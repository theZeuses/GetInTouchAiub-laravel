$(document).ready(function(){
	
	$('input[type=button]').click(function(){
		let jsonsend = {
			"guid" : $('#guid').val(),
			"name" : $('#name').val(),
			"email" : $('#email').val(),
			"dob" : $('#dob').val(),
			"address" : $('#address').val()
		}
		$.ajax({
			url: '/userController/UpdateProfile',
			type: 'POST',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				if(response.result == "Profile updated Successfully!")
				{
					$('#guid').val('');
					$('#name').val('');
					$('#email').val('');
					$('#dob').val('');
					$('#address').val('');
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