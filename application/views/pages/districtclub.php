<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Container -->
<div class="container">
	<!-- Team -->
	<!-- Row -->
	<div class="row">
		<div id="" class="section xs-padding">
			<!-- Section header -->
			<div class="section-header text-center">
				<h2 id="ClubName" class="title"></h2>

			</div>
			<!-- /Section header -->
		</div>
		<!-- team -->
		<div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-sm-3 col-xs-10 col-xs-offset-1">				<div class="team">
				<div id="presidentImg" class="team-img">								
					<div class="overlay">
					</div>
				</div>
				<div class="team-content">
					<h3 id="clubPresident"></h3>
					<span id="clubPresidentAvenue"></span></br>
					<span id="clubPresidentEmail" class="emails"></span>
				</div>
			</div>
		</div>
		<!-- /team -->

		<!-- team -->
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-10 col-xs-offset-1">
			<div class="team">
				<div id="secretaryImg" class="team-img">
					<div class="overlay">
					</div>
				</div>
				<div class="team-content">
					<h3 id="clubSecretary"></h3>
					<span id="clubSecretaryAvenue"></span>
					<span id="clubSecretaryEmail" class="emails"></span>
				</div>
			</div>
		</div>
		<!-- /team -->
	</div>
	<div class="row">
		<div class="tableWrapper">
			<table id="BODTable" class="table table-striped">
			    <thead>
			      	<tr>
			        	<th>Name</th>
			        	<th class="BODEmail">Post</th>
			        	<th>Email</th>
			      	</tr>
			    </thead>
			    <tbody id="clubBODList"></tbody>
			</table>				
		</div>
	</div>
	<!-- /Team -->

</div>
<!-- /Container -->
<div class="socialMediaWrapper">
	<div class="socialMedia" id="facebook">
		<a id="facebookLink" target="_blank" href=""><i class="fa fa-facebook fa-2x"></i></a>
	</div>
	<div class="socialMedia" id="instagram">
		<a id="instagramLink" target="_blank" href=""><i class="fa fa-instagram fa-2x"></i></a>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var clubName = "<?php echo $this->session->userdata['clubName']; ?>";
		PresidentImage(clubName);
	   	SecretaryImage(clubName);
	   	ClubSocialMedia(clubName);
	   	ClubRecord(clubName);  
	});
</script>