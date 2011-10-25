
<div id="calendar">
        
</div>

<script>
 $(document).ready(function() {
            
            
                $('#calendar').fullCalendar({
                        theme: true,
			header: {
				left: 'prev',
				center: 'title',
				right: 'next'
			},
       //if the event is click, show the title and description in a dialog        
                        events: "index.php/overview/event",
                        eventClick: function(event) {
                                $( '#event_id' ).val(event.id);
                                 $( '#updatetitle' ).val(event.title);
                                 $( '#description' ).val( event.description);
                                 $('#updateDialog').dialog('open');       
                                
				return false;
			}
		});
                
        //update form, for events        
                $( '#updateDialog' ).dialog({
                     autoOpen: false,
                     width: 350,
                     modal: true,
                     resizable: false,
                     draggable: false,
                     buttons: {
                                'Update': function() {
                                $( this ).dialog( 'close' );

                     $.ajax({
                            url: "index.php/overview/update",
                            type: 'POST',
                            data: $( '#updateDialog form' ).serialize(),
                            dataType: 'json',
                        
                            success: function() {                       
                            $('#title, #desciption').val('');
                             reload();
                             
                                } //end success
                            }); //end ajax()
                        },

                                'delete': function() {
                                    $('#delDialog').dialog('open');
                                    $( this ).dialog('close');    
                         }
                                                        
                       }
            }); //end update dialog
  //this is a confirmation dialog        
 $( '#delDialog' ).dialog({
    autoOpen: false,
 
    buttons: {
        'No': function() {
            $( this ).dialog( 'close' );
        },
        'Yes': function() {
 
            $( this ).dialog( 'close' );
            var id = $('#event_id').val();
 
            $.ajax({
            url: "index.php/overview/delete/"+id,
            success: function() {
                reload();
            } //end success
        });
        } //end Yes
    } //end button
}); //end dialog
  
 });
 //this function reloading the calendar
  function reload(){
                  
        $.ajax({
           url: "index.php/overview/calendar",
           type: 'GET',
           cache: false,
           dataType: 'html',
           beforeSend:function(){
                 $.loading(true, {text:'Reloading calendar, please wait...'});
           },
           success: function(html){
               $("#ajax").html(html);
             $.loading(false);   

           }
    });
  }



</script>
