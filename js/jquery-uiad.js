var jqueryui = {
    
    
    Buttons:function()
    {
         
            $('button#create-new').click(function(){	  
             $.ajax({
				type: "POST",
				url: "http://localhost/talandaan/index.php/overview/add_event",
				data: $('#dateRangeForm').serialize(),
				dataType: 'json',
				
                     success: function(data) {		
                                if(data == 'invalid'){ 
                                        $('#message').html("<div class='errorMessage'>Date range is invalid.</div>");
                                        $('#messages').html("<div class='errorMessage'>Error:Title is required.</div>");
                                        $('#messaged').html("<div class='errorMessage'>Error:Description is required.</div>");
                                } else{ 
                                $('#msgDialog').dialog('open');
                               
                                }
                     }
			  	});
				return false;
				      
	});
       
    },
    
    Dialog:function()
    {
        
        $( '#msgDialog' ).dialog({
            autoOpen: false,
            buttons: {
                'Ok': function() 
                    {
                  
                    $( this ).dialog( 'close' );
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
                         $('#title, #desc, #startdate, #enddate').val('');
                         $('#message').html("");
                         $('#messages').html("");
                         $('#messaged').html("");
                         
                       }
                });
                    }
                    }
        });
        
}
}

jQuery(function ($){
       if($("#create-new").length){jqueryui.Buttons()}
       if($("#msgDialog").length){jqueryui.Dialog()}
       
            
});

    

