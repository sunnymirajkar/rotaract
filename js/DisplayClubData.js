$(document).ready(function(){
	
	var cLubData = {};    
	cLubData.type 		= "read";
	$.ajax({
            type: "POST",
            dataType: "json",
            url: "php/InsertClubData.php",
            data: cLubData,
            success: function(data) {
                console.log(data) 
                for (x in data) {
                	if(data[x][5]==1){
                		$('#displayClubDataZone1').append('<tr>'+
							        	'<td>'+data[x][1]+'</td>'+
							        	'<td>'+data[x][3]+'</td>'+
							        	'<td>'+data[x][4]+'</td>'+
							        	'<td>'+data[x][5]+'</td>'+
							        	'<td>'+data[x][8]+'</td>'+
							        	'<td>'+data[x][9]+'</td>'+
							        	'<td>'+data[x][10]+'</td>'+
							        	'<td><button class="btn btn-warning" onclick="FindClubData('+
							        	data[x][0]+');">UPDATE</button></td>'+
			                          	'</tr>');
                	}else if(data[x][5]==2){
                		$('#displayClubDataZone2').append('<tr>'+
							        	'<td>'+data[x][1]+'</td>'+
							        	'<td>'+data[x][3]+'</td>'+
							        	'<td>'+data[x][4]+'</td>'+
							        	'<td>'+data[x][5]+'</td>'+
							        	'<td>'+data[x][8]+'</td>'+
							        	'<td>'+data[x][9]+'</td>'+
							        	'<td>'+data[x][10]+'</td>'+
							        	'<td><button class="btn btn-warning" onclick="FindClubData('+
							        	data[x][0]+');">UPDATE</button></td>'+
			                          	'</tr>');
                	}else if(data[x][5]==3){
                		$('#displayClubDataZone3').append('<tr>'+
							        	'<td>'+data[x][1]+'</td>'+
							        	'<td>'+data[x][3]+'</td>'+
							        	'<td>'+data[x][4]+'</td>'+
							        	'<td>'+data[x][5]+'</td>'+
							        	'<td>'+data[x][8]+'</td>'+
							        	'<td>'+data[x][9]+'</td>'+
							        	'<td>'+data[x][10]+'</td>'+
							        	'<td><button class="btn btn-warning" onclick="FindClubData('+
							        	data[x][0]+');">UPDATE</button></td>'+
			                          	'</tr>');
                	}else if(data[x][5]==4){
                		$('#displayClubDataZone4').append('<tr>'+
							        	'<td>'+data[x][1]+'</td>'+
							        	'<td>'+data[x][3]+'</td>'+
							        	'<td>'+data[x][4]+'</td>'+
							        	'<td>'+data[x][5]+'</td>'+
							        	'<td>'+data[x][8]+'</td>'+
							        	'<td>'+data[x][9]+'</td>'+
							        	'<td>'+data[x][10]+'</td>'+
							        	'<td><button class="btn btn-warning" onclick="FindClubData('+
							        	data[x][0]+');">UPDATE</button></td>'+
			                          	'</tr>');
                	}else if(data[x][5]==5){
                		$('#displayClubDataZone5').append('<tr>'+
							        	'<td>'+data[x][1]+'</td>'+
							        	'<td>'+data[x][3]+'</td>'+
							        	'<td>'+data[x][4]+'</td>'+
							        	'<td>'+data[x][5]+'</td>'+
							        	'<td>'+data[x][8]+'</td>'+
							        	'<td>'+data[x][9]+'</td>'+
							        	'<td>'+data[x][10]+'</td>'+
							        	'<td><button class="btn btn-warning" onclick="FindClubData('+
							        	data[x][0]+');">UPDATE</button></td>'+
			                          	'</tr>');
                	}
              		  
				}                   
            }
      	});
});

function FindClubData(id){

	document.location.href ='InsertClubData.html?id='+id;

}