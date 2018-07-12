$(document).ready(function(){
      $.ajax({
            type: "GET",
            dataType: "json",
            url: "districtgallery/GalleryImg",
            success: function(data) {
            	for(x in data){
            		$('#links').append('<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">'+
						'<div class="gallery-image">'+
							'<a href="'+data[x]['paths']+'" title="">'+
					        	'<img src="'+data[x]['paths']+'" alt="" />'+
					    	'</a>'+
						'</div>'+
					'</div>');	
            	}
            }
      });
});