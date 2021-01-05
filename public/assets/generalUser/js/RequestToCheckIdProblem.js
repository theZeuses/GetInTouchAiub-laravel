$(document).ready(function(){
	
	$('input[type=button]').click(function(){
		let jsonsend = {
			"towhom" 		: $('#towhom').val(),
			"actiontype"	: $('#actiontype').val(),
			"text" 			: $('#text').val()
		}
		$.ajax({
			url: '/userController/RequestToCheckIdProblem',
			type: 'POST',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				if(response.result=="Request Sent Successfully!")
				{
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