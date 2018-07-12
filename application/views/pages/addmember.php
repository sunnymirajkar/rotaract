<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="" class="section">
	<!-- Container -->
	<div class="container xs-padding">
		<!-- Row -->
		<div class="row">
			<!-- Section header -->
			<div class="section-header text-center">
				<h2 class="title">Member Registration</h2>
			</div>
			<!-- /Section header -->
			<!-- alert  -->
			<div style="display: none;" class="alert">
			  
			</div>
			<!-- /alert -->
			<form class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>				
			  	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    	<label for="clubLoginId">FIRST NAME:</label>
			    	<input type="text" class="form-control" id="firstName" placeholder="First Name" required>
			  	</div>
			  	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    	<label for="clubLoginId">LAST NAME:</label>
			    	<input type="text" class="form-control" id="lastName" placeholder="Last Name"
			    	pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
			    	<label for="clubLoginId">CONTACT NO:</label>
			    	<input type="text" class="form-control" id="contact" placeholder="Contact"
			    	pattern="[0-9]{10}" title="Only 10 Digits" maxlength="10" required >
			  	</div>

			  	<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
			    	<label for="clubLoginId">E-MAIL:</label>
			    	<input type="text" class="form-control" id="email" placeholder="Email" required>
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
			    	<label for="clubLoginId">BLOOD GROUP:</label>
			    	<select class="form-control" id="bloodGroup" required>
					    <option value="">Select Blood Group</option>
					    <option value="A+">A+</option>
					    <option value="A-">A-</option>
					    <option value="B+">B+</option>
					    <option value="B-">B-</option>
					    <option value="O+">O+</option>
					    <option value="O-">O-</option>
					    <option value="AB+">AB+</option>
					    <option value="AB-">Ab-</option>
					</select>
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    	<label for="clubLoginId">CLUB NAME:</label>
			    	<input type="text" value="<?php echo $this->session->userdata['clubData']['clubName'];?>" class="form-control" id="clubName" placeholder="Club Name" readonly>
			    	<input type="hidden" value="<?php echo $this->session->userdata['clubData']['email'];?>" id="clubEmail">
			  	</div>
			  	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    	<label for="clubLoginId">DESIGNATION:</label>
			    	<select class="form-control" id="designation" required>
					    <option value="">Select Designation</option>
					    <option value="President">President</option>
					    <option value="Secretary">Secretary</option>
					    <option value="Vice-President">Vice President</option>
					    <option value="President-Elect">President Elect</option>
					    <option value="IP-President">IP President</option>
					    <option value="Treasurer">Treasurer</option>
					    <option value="International-Service">International Service</option>
					    <option value="Community-Service">Community Service</option>
					    <option value="Club-Service">Club Service</option>
					    <option value="Sergeant-at-Arms">Sergeant at Arms</option>
					    <option value="Professional-Development">Professional Development</option>
					    <option value="Finance">Finance</option>					    
					    <option value="Womens-Representive">Women’s Representive</option>
					    <option value="Joint-Secretary">Joint Secretary</option>
					    <option value="PRO">PRO</option>
					    <option value="Editor">Editor</option>
					    <option value="Joint-Editor">Joint Editor</option>
					    <option value="Snapper">Snapper</option>
					     <option value="Other-BOD">Other BOD</option>
					    <option value="Member">Member</option>
					</select>
			  	</div>
			  	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    	<label for="clubLoginId">ZONE No.:</label>
			    	<select class="form-control" id="zoneNo" required>
					    <option value="">Select Zone</option>
					    <option value="1">1</option>
					    <option value="2">2</option>
					    <option value="3">3</option>
					    <option value="4">4</option>
					    <option value="5">5</option>
					</select>
			  	</div>
			  	<input type="hidden" id="updateMember">
			  	<div id="submitWrapper" style="display: block;" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  	<button id="SubmitRegistration" class="btn btn-primary col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">SUBMIT</button>
			  	</div>
			  	<div id="updateWrapper" style="display: none;" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  	<button id="UpdateRegistration" class="btn btn-primary col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">UPDATE</button>
			  	</div>
			</form>
		</div>
		<!-- /Row -->
	</div>
	<!-- /Container -->
</div>
<script type="text/javascript">
	$(document).ready(function(){		
		var id = <?php echo $this->session->userdata['memberData']['id']; ?>;
		if(id != ""){   				
			SelectClubMember(id);
			$("#submitWrapper").hide();
			$("#updateWrapper").show();
		}else{
			alert("in")
			$("#submitWrapper").show();
		}
	});
</script>