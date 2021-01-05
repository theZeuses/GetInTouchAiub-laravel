$(document).ready(function(){

	$('input[type=button]').click(function(){
		let jsonsend = {
			"key" : $('#searchkey').val()
		}
		$.ajax({
			url: '/acadmincontroller/searchadmin',
			type: 'GET',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				$("#searchresult").html(response.status);
			},
			error: function(error){

			}
		});

	});			
});