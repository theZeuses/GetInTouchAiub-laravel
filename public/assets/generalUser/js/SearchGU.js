$(document).ready(function(){

	$('input[type=button]').click(function(){
		let json = {
			"text" : $('input[type=text]').val()
		}
		$.ajax({
			url: '/userController/AjaxSearchGU',
			type: 'GET',
			dataType:'json',
			data: json,
			success: function(response){
				$("#result").html(response.result);
			},
			error: function(error){

			}
		});

	});			
});