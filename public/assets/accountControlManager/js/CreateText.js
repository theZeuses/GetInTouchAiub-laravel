$(document).ready(function(){
	
	$('input[type=button]').click(function(){
		let jsonsend = {
			"receiverid" : $('#receiverid').val(),
			"text" : $('#text').val(),
			"acid" : $('#id').val()
		}
		$.ajax({
			url: '/acText/CreateText',
			type: 'POST',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				if(response)
				{
					$('#receiverid').val('');
					$('#text').val('');
					$("#searchresult").html(response.status);
				}
				else
				{
					$("#searchresult").html('Failed, please try again to send..');
				}
				

			},
			error: function(error){

			}
		});

	});			
});