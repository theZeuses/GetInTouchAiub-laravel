$(document).ready(function(){
	
	$('input[type=button]').click(function(){
		let jsonsend = {
			"guid" : $('#guid').val(),
			"name" : $('#name').val(),
			"email" : $('#email').val(),
			"gender": $("input[name='gender']:checked").val(),
			"dob" : $('#dob').val(),
			"address" : $('#address').val(),
			"userstatus" : $('#userstatus').val()
		}
		$.ajax({
			url: '/userController/registrationrequest',
			type: 'POST',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				if(response.result=="Registration request submited Successfully!")
				{
					$('#guid').val('');
					$('#name').val('');
					$('#email').val('');
					$('#dob').val('');
					$('#address').val('');
					$('#userstatus').val('');
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