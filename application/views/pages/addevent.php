<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="" class="section loginBackGround">
		<div class="bg-img loginBackGround">
			<div class="overlay"></div>
		</div>
		<!-- Container -->
		<div class="container md-padding">
			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">ADD EVENT</h2>
				</div>
				<!-- /Section header -->
				
				<form class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="alert alert-danger" id="ErrorMessage"  style="display: none;">
					</div>
				  	<div class="form-group">
				    	<label for="eventTitle">EVENT TITLE:</label>
				    	<input type="text" class="form-control" id="eventTitle">
				  	</div>
				  	<div class="form-group">
				    	<label for="eventDatetime">EVENT DATE:</label>
				    	<input type="date" class="form-control" id="eventDatetime">
				  	</div>
				  	<div class="form-group">
				    	<label for="clubName">CLUB NAME:</label>
				    	<input type="text" value="<?php echo $this->session->userdata['clubData']['clubName'];?>" class="form-control" id="clubName" disabled>
				  	</div>
				  	<div class="form-group">
					  <label for="eventDescription">EVENT DESCRIPTION:</label>
					  <textarea class="form-control" rows="3" id="eventDescription"></textarea>
					</div>
				  	<button id="addEvent" type="submit" class="btn btn-default">
				  		ADD EVENT
				  	</button>
				</form>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>