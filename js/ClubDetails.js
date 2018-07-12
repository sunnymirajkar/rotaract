$(document).ready(function(){
	var clubData = {};
	clubData.type = "read";
	$.ajax({
        type: "POST",
        dataType: "json",
        url: "districtclubs/getdistrictclubdata",
        data: clubData,
        success: function(data) {         	
            for(i in data){
            	if(data[i]['zoneNo'] == 1){
            		$('#zone1').append('<div class="col-lg-4 col-md-4 col-sm-6">'+
								'<div class="pricing">'+
									'<div class="price-head">'+
										'<span class="price-title">'+
											data[i]['clubName'] +
										'</span>'+
										'<div class="price">'+
										'<img class="clublogo" src="'+data[i]['clubLogo']+'">'+
										'</div>'+
									'</div>'+
									'<ul class="price-content">'+
										'<li>'+
											'<p>Charter Day: '+data[i]['charterDay']+'</p>'+
										'</li>'+
										'<li>'+
											'<p>Meeting: '+data[i]['meeting']+'</p>'+
										'</li>'+
										'<li>'+
											'<p class="clubEmail">'+data[i]['email']+'</p>'+
										'</li>'+
									'</ul>'+
									'<div class="price-btn">'+
										'<button onclick=\'(clubName("' + data[i]['clubName'] + '"))\' class="outline-btn">'+
											'Club Details'+
										'</button>'+
									'</div>'+
								'</div>'+
							'</div>');
            	}else if(data[i]['zoneNo'] == 2){

            		$('#zone2').append('<div class="col-lg-4 col-md-4 col-sm-6">'+
								'<div class="pricing">'+
									'<div class="price-head">'+
										'<span class="price-title">'+
											data[i]['clubName'] +
										'</span>'+
										'<div class="price">'+
										'<img class="clublogo" src="'+data[i]['clubLogo']+'">'+
										'</div>'+
									'</div>'+
									'<ul class="price-content">'+
										'<li>'+
											'<p>Charter Day: '+data[i]['charterDay']+'</p>'+
										'</li>'+
										'<li>'+
											'<p>Meeting: '+data[i]['meeting']+'</p>'+
										'</li>'+
										'<li>'+
											'<p class="clubEmail">'+data[i]['email']+'</p>'+
										'</li>'+
									'</ul>'+
									'<div class="price-btn">'+
										'<button onclick=\'(clubName("' + data[i]['clubName'] + '"))\' class="outline-btn">'+
											'Club Details'+
										'</button>'+
									'</div>'+
								'</div>'+
							'</div>');

            	}else if(data[i]['zoneNo'] == 3){
            		$('#zone3').append('<div class="col-lg-4 col-md-4 col-sm-6">'+
								'<div class="pricing">'+
									'<div class="price-head">'+
										'<span class="price-title">'+
											data[i]['clubName'] +
										'</span>'+
										'<div class="price">'+
										'<img class="clublogo" src="'+data[i]['clubLogo']+'">'+
										'</div>'+
									'</div>'+
									'<ul class="price-content">'+
										'<li>'+
											'<p>Charter Day: '+data[i]['charterDay']+'</p>'+
										'</li>'+
										'<li>'+
											'<p>Meeting: '+data[i]['meeting']+'</p>'+
										'</li>'+
										'<li>'+
											'<p class="clubEmail">'+data[i]['email']+'</p>'+
										'</li>'+
									'</ul>'+
									'<div class="price-btn">'+
										'<button onclick=\'(clubName("' + data[i]['clubName'] + '"))\' class="outline-btn">'+
											'Club Details'+
										'</button>'+
									'</div>'+
								'</div>'+
							'</div>');
            		
            	}else if(data[i]['zoneNo'] == 4){
            		$('#zone4').append('<div class="col-lg-4 col-md-4 col-sm-6">'+
								'<div class="pricing">'+
									'<div class="price-head">'+
										'<span class="price-title">'+
											data[i]['clubName'] +
										'</span>'+
										'<div class="price">'+
										'<img class="clublogo" src="'+data[i]['clubLogo']+'">'+
										'</div>'+
									'</div>'+
									'<ul class="price-content">'+
										'<li>'+
											'<p>Charter Day: '+data[i]['charterDay']+'</p>'+
										'</li>'+
										'<li>'+
											'<p>Meeting: '+data[i]['meeting']+'</p>'+
										'</li>'+
										'<li>'+
											'<p class="clubEmail">'+data[i]['email']+'</p>'+
										'</li>'+
									'</ul>'+
									'<div class="price-btn">'+
										'<button onclick=\'(clubName("' + data[i]['clubName'] + '"))\' class="outline-btn">'+
											'Club Details'+
										'</button>'+
									'</div>'+
								'</div>'+
							'</div>');
            		
            	}else if(data[i]['zoneNo'] == 5){
            		$('#zone5').append('<div class="col-lg-4 col-md-4 col-sm-6">'+
								'<div class="pricing">'+
									'<div class="price-head">'+
										'<span class="price-title">'+
											data[i]['clubName'] +
										'</span>'+
										'<div class="price">'+
										'<img class="clublogo" src="'+data[i]['clubLogo']+'">'+
										'</div>'+
									'</div>'+
									'<ul class="price-content">'+
										'<li>'+
											'<p>Charter Day: '+data[i]['charterDay']+'</p>'+
										'</li>'+
										'<li>'+
											'<p>Meeting: '+data[i]['meeting']+'</p>'+
										'</li>'+
										'<li>'+
											'<p class="clubEmail">'+data[i]['email']+'</p>'+
										'</li>'+
										'<input type="hidden" id="nameClub" value="'+data[i]['email']+'">'+
									'</ul>'+
									'<div class="price-btn">'+
										'<button onclick=\'(clubName("' + data[i]['clubName'] + '"))\' class="outline-btn">'+
											'Club Details'+
										'</button>'+
									'</div>'+
								'</div>'+
							'</div>');
            		
            	}


            }                        
        }
    });

});
							