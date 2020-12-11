$(document).ready(function(){
	
	$('input[type=button]').click(function(){
		let jsonsend = {
			"ccid" : $('#ccid').val(),
			"name": $('#name').val(),
			"email": $('#email').val(),
			"gender": $("input[name='gender']:checked").val(),
			"dob": $('#dob').val(),
			"address": $('#address').val()
		}
		console.log(jsonsend);
		$.ajax({
			url: '/acCCController/CreateCC',
			type: 'POST',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				if(response.status == "Content Controller Added!!")
				{
					$('#ccid').val('');
					$('#name').val('');
					$('#email').val('');
					$('#gender').val('');
					$('#dob').val('');
					$('#address').val('');
					$("#searchresult").html(response.status);
				}
				else
				{
					$("#searchresult").html(response.status);
				}
				

			},
			error: function(error){

			}
		});

	});			
});