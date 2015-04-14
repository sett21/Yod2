$( document ).ready(function() {
    
    $( "#input-pet-id" ).keyup(function() {
  		if($(this).val().length > 1){
  			
  			$.post( "/admin/botnet/getpetinfo/", { pid: $(this).val()})
  			.done(function( data ) {
    			var obj = jQuery.parseJSON( data );
    			if(obj.title != undefined){
    				$("#pet-id").text(obj.id);
    				$("#pet-name").text(obj.title);
    				$("#pet-sign").text(obj.votes);
    				$("#pet-bot").text(obj.botCount);    				
    				$(".pet-info").show();
    			}				
    			else
    				$(".pet-info").hide();
  			});
  		}
		else
			$(".pet-info").hide();

	});

});