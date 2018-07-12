<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Container -->
<div class="container">
	<!-- Row -->
	<div class="row">
		<div id="" class="section xs-padding">
			<!-- Section header -->
			<div class="section-header text-center">
				<h2 id="ClubName" class="title">District Gallery</h2>
			</div>
			<!-- /Section header -->
			<div id="gallery_body" class="container-fluid padding-zero">
				<div id="blueimp-gallery" class="blueimp-gallery">
				    <div class="slides"></div>
				    <h3 class="title"></h3>
				    <a class="prev"><i class="fa fa-angle-left angleleft" aria-hidden="false"></i></a>
				    <a class="next"><i class="fa fa-angle-right angleright" aria-hidden="false"></i></i></a>
				    <a class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
				    <a class="play-pause"></a>
				    <ol class="indicator"></ol>
				</div>
				<div  id="links" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
				</div>	
			</div>
		</div>
	</div>
	<!-- /Row -->
</div>
<!-- /Container -->	
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/DistrictGallery.js"></script>
<script type="text/javascript" src="js/blueimp-gallery.min.js"></script>
<script>
	document.getElementById('links').onclick = function (event) {
	    event = event || window.event;
	    var target = event.target || event.srcElement,
	        link = target.src ? target.parentNode : target,
	        options = {index: link, event: event},
	        links = this.getElementsByTagName('a');
	    blueimp.Gallery(links, options);
	};
</script>