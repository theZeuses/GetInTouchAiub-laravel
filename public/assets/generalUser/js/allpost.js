$(document).ready(function(){

	$('input[type=button]').click(function(){
		let jsonsend = {
			"key" : $('#searchkey').val()
		}
		$.ajax({
			url: '/allpost',
			type: 'GET',
			dataType:'json',
			data: jsonsend,
			success: function(response){
				var strign=`<table id="view">
							<tr>
								<td>GU ID</td>
								<td>Test</td>
								<td>File</td>
								<td>Approved By</td>
							</tr>`;
				for(i=0; i<response.length ; i++)
				{
					strign=strign+"<tr>";
					strign=strign+"<td>"+response[i]['guid']+"</td>";
					strign=strign+"<td>"+response[i]['text']+"</td>";
					strign=strign+"<td><file width='50' height='45' src='"+response[i]['post']+"'></td>";
					strign=strign+"<td>"+response[i]['approvedby']+"</td>";
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