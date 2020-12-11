$(document).ready(function(){
	
	$('input[type=button]').click(function(){
		let jsonsend = {
			"receiverid" : $('#receiverid').val(),
			"text" : $('#text').val()
		}
		$.ajax({
			url: '/userController/SendText',
			type: 'POST',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				if(response.result=="Message Sent Successfully!")
				{
					$('#receiverid').val('');
					$('#text').val('');
					$("#result").html(response.result);
				}
				else
				{
					$("#result").html(response.result);
				}
				

			},
			error: function(error){

			}
		});

	});			
});