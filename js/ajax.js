jQuery(document).ready(function(){
	$('.ajax').live('click', function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        
        $.ajax({
                       url: link,
                       type: 'GET',
                       cache: false,
                       dataType: 'html',
                       beforeSend:function(){
                             $.loading(true, {text:'Loading, please wait...'});
                       },
                       success: function(html){
                           $("#ajax").html(html);
                         $.loading(false);
                       }
               });
        });
       
  $("#startdate").datepicker({altField: '#start_alternate',altFormat: 'yy-mm-dd'});
  $("#enddate").datepicker({altField: '#end_alternate',altFormat: 'yy-mm-dd'});	
        
    
        $(".flip").click(function(){
        $(".panel").slideToggle("slow");
    });
    

       
});




