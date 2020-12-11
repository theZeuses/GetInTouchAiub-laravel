$(document).ready(function(){
	
	$('input[type=button]').click(function(){
		let jsonsend = {
			"towhom" : $('#towhom').val(),
			"subject" : $('#noticesubject').val(),
			"body" : $('#noticebody').val(),
			"acid" : $('#id').val()
		}
		$.ajax({
			url: '/acNotice/CreateNotice',
			type: 'POST',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				if(response)
				{
					$('#towhom').val('');
					$('#noticebody').val('');
					$('#noticesubject').val('');
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