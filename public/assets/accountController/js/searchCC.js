$(document).ready(function(){

	$('input[type=button]').click(function(){
		let jsonsend = {
			"key" : $('#searchkey').val()
		}
		$.ajax({
			url: '/acsearchcc',
			type: 'GET',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				var strign=`<table id="view">
						<tr>
							<td>CC ID</td>
							<td>Name</td>
							<td>Email</td>
							<td>Gender</td>
							<td>Date Of Birth</td>
							<td>Address</td>
							<td>Profile Picture</td>
							<td>Account Status</td>
						</tr>`;
				for(i=0; i<response.length ; i++)
				{
					strign=strign+"<tr>";
					strign=strign+"<td>"+response[i].ccid+"</td>";
					strign=strign+"<td>"+response[i].name+"</td>";
					strign=strign+"<td>"+response[i].email+"</td>";
					strign=strign+"<td>"+response[i].gender+"</td>";
					strign=strign+"<td>"+response[i].dob+"</td>";
					strign=strign+"<td>"+response[i].address+"</td>";
					strign=strign+"<td><img width='50' height='45' src='"+response[i].profilepicture+"'></td>";
					strign=strign+"<td>"+response[i].accountstatus+"</td>";
					strign=strign+"</tr>";
				}
				strign=strign+`</table>`;
				console.log(strign);
				$("#searchresult").html(strign);
			},
			error: function(error){

			}
		});

	});			
});