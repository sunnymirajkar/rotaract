<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
	.loader{
		width: 100%;
		position: absolute;
		background: #333333;
		display: none;
		z-index: 99999;
		opacity: .6

	}
</style>
<div class="loader">
</div>
<div id="" class="section">
	<!-- Container -->
	<div class="container xs-padding">
		<!-- Row -->
		<div class="row">
			<!-- Section header -->
			<div class="section-header text-center">
				<h2 class="title">Monthly Report</h2>
			</div>
			<!-- /Section header -->
			<!-- alert  -->
			<div style="display: none;" class="alert">
			  
			</div>
			<!-- /alert -->
			<h3 class="title">
				Number Of Members&emsp;&emsp;
				<span id="noOfMembers"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="noOfMembersForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    	<label for="reportName">Female Members:</label>
			    	<input type="number" class="form-control" id="femaleMember"  required>
			  	</div>
			  	<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    	<label for="reportDate">Male Members:</label>
			    	<input type="number" class="form-control" id="maleMember" required >
			  	</div>					    	
			  	<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    	<label for="attendance">Prospective Members:</label>
			    	<input type="number" class="form-control" id="prospectiveMember" required >
			  	</div>
			  	<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    	<label for="attendance">Total Members:</label>
			    	<input type="number" class="form-control" id="totalMember" required >
			  	</div>
			</form>

			<h3 class="title">
				Club Service Project&emsp;&emsp;
				<span id="addClubService"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			
			<form id="clubServiceForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameClubS1" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueClubS1" value="Club Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateClubS1" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceClubS1" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionClubS1" placeholder="Event Description"></textarea>
				</div>

				<!-- SECOND -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameClubS2" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueClubS2" value="Club Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateClubS2" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceClubS2" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionClubS2" placeholder="Event Description"></textarea>
				</div>

				<!-- THREE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameClubS3" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueClubS3" value="Club Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateClubS3" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceClubS3" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionClubS3" placeholder="Event Description"></textarea>
				</div>

				<!-- FOUR -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameClubS4" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueClubS4" value="Club Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateClubS4" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceClubS4" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionClubS4" placeholder="Event Description"></textarea>
				</div>

				<!-- FIVE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameClubS5" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueClubS5" value="Club Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateClubS5" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceClubS5" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionClubS5" placeholder="Event Description"></textarea>
				</div>
				<!--<input type="hidden" id="updateMember"> -->
			</form>

			<h3 class="title">
				Professional Service Project&emsp;&emsp;
				<span id="addProfessionalService"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="professionalServiceForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameFS1" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueFS1" value="Professional Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateFS1" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceFS1" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionFS1" placeholder="Event Description"></textarea>
				</div>

				<!-- SECOND -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameFS2" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueFS2" value="Professional Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateFS2" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceFS2" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionFS2" placeholder="Event Description"></textarea>
				</div>

				<!-- THREE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameFS3" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueFS3" value="Professional Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateFS3" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceFS3" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionFS3" placeholder="Event Description"></textarea>
				</div>

				<!-- FOUR -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameFS4" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueFS4" value="Professional Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateFS4" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceFS4" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionFS4" placeholder="Event Description"></textarea>
				</div>

				<!-- FIVE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameFS5" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueFS5" value="Professional Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateFS5" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceFS5" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionFS5" placeholder="Event Description"></textarea>
				</div>
				<!--<input type="hidden" id="updateMember"> -->
			</form>

			<h3 class="title">
				Community Service Project&emsp;&emsp;
				<span id="addCommunityService"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="communityServiceForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameCS1" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueCS1" value="Community Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateCS1" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceCS1" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionCS1" placeholder="Event Description"></textarea>
				</div>

				<!-- SECOND -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameCS2" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueCS2" value="Community Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateCS2" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceCS2" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionCS2" placeholder="Event Description"></textarea>
				</div>

				<!-- THREE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameCS3" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueCS3" value="Community Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateCS3" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceCS3" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionCS3" placeholder="Event Description"></textarea>
				</div>

				<!-- FOUR -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameCS4" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueCS4" value="Community Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateCS4" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceCS4" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionCS4" placeholder="Event Description"></textarea>
				</div>

				<!-- FIVE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameCS5" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueCS5" value="Community Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateCS5" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceCS5" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionCS5" placeholder="Event Description"></textarea>
				</div>
				<!--<input type="hidden" id="updateMember"> -->
			</form>

			<h3 class="title">
				International Service Project&emsp;&emsp;
				<span id="addInternationalService"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="internationalServiceForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameIS1" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueIS1" value="International Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateIS1" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceIS1" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionIS1" placeholder="Event Description"></textarea>
				</div>

				<!-- SECOND -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameIS2" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueIS2" value="International Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateIS2" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceIS2" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionIS2" placeholder="Event Description"></textarea>
				</div>

				<!-- THREE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameIS3" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueIS3" value="International Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateIS3" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceIS3" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionIS3" placeholder="Event Description"></textarea>
				</div>

				<!-- FOUR -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameIS4" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueIS4" value="International Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateIS4" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceIS4" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionIS4" placeholder="Event Description"></textarea>
				</div>

				<!-- FIVE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameIS5" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueIS5" value="International Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateIS5" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceIS5" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionIS5" placeholder="Event Description"></textarea>
				</div>
				<!--<input type="hidden" id="updateMember"> -->
			</form>

			<h3 class="title">
				Other Project&emsp;&emsp;
				<span id="addOtherService"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="otherServiceForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameOther1" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueOther1" value="Other Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateOther1" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceOther1" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionOther1" placeholder="Event Description"></textarea>
				</div>

				<!-- SECOND -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameOther2" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueOther2" value="Other Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateOther2" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceOther2" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionOther2" placeholder="Event Description"></textarea>
				</div>

				<!-- THREE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameOther3" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueOther3" value="Other Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateOther3" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceOther3" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionOther3" placeholder="Event Description"></textarea>
				</div>

				<!-- FOUR -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameOther4" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueOther4" value="Other Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateOther4" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceOther4" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionOther4" placeholder="Event Description"></textarea>
				</div>

				<!-- FIVE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">EVENT NAME:</label>
			    	<input type="text" class="form-control" id="reportNameOther5" placeholder="EVENT NAME" required>
			    	<input type="hidden" class="form-control" id="avenueOther5" value="Other Service" readonly >
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">EVENT DATE:</label>
			    	<input type="date" class="form-control" id="reportDateOther5" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="attendanceOther5" placeholder="No. of Attendance" pattern="[A-Za-z]{}" required title="Only Characters">
			  	</div>
			  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <label for="reportDescription">EVENT DESCRIPTION:</label>
				  <textarea class="form-control" rows="3" id="reportDescriptionOther5" placeholder="Event Description"></textarea>
				</div>
				<!--<input type="hidden" id="updateMember"> -->
			</form>

			<h3 class="title">
				Club Dues&emsp;&emsp;
				<span id="addClubDues"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="clubDuesForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">Amount of District Dues Paid:</label>
			    	<input type="number" class="form-control" id="amountDistrictDuesPaid"  required>
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">Total Dues Paid In The Month:</label>
			    	<input type="number" class="form-control" id="duesPaidInMonth" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">Amount Paind For New Members:</label>
			    	<input type="number" class="form-control" id="newMemberDues" required >
			  	</div>
			</form>

			<h3 class="title">
				Bulletin Details&emsp;&emsp;
				<span id="addBulletin"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="BulletinData" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12" enctype="multipart/form-data">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">BULLETIN NAME:</label>
			    	<input type="text" class="form-control" id="bulletinName"  required>
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">RELEASE DATE:</label>
			    	<input type="date" class="form-control" id="bulletinDate" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">UPLOAD BULLETIN:</label>
			    	<input type="file" class="form-control" id="bulletinFile" required >
			  	</div>
			  	<input type="hidden" value="<?php echo $this->session->userdata['clubData']['clubName'];?>" 
				name="clubName">
			</form>

			<h3 class="title">
				GBM Meetings&emsp;&emsp;
				<span id="addGBM"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="gbmForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="meetingNo1" placeholder="MEETING No" required>
			    	<input type="hidden" value="GBM" id="meetingType1">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="meetingDate1" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="meetingAttendance1" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- SECOND -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="meetingNo2" placeholder="MEETING No" required>
			    	<input type="hidden" value="GBM" id="meetingType2">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="meetingDate2" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="meetingAttendance2" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- THREE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="meetingNo3" placeholder="MEETING No" required>
			    	<input type="hidden" value="GBM" id="meetingType3">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="meetingDate3" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="meetingAttendance3" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- FOUR -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="meetingNo4" placeholder="MEETING No" required>
			    	<input type="hidden" value="GBM" id="meetingType4">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="meetingDate4" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="meetingAttendance4" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- FIVE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="meetingNo5" placeholder="MEETING No" required>
			    	<input type="hidden" value="GBM" id="meetingType5">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="meetingDate5" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="meetingAttendance5" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>
			</form>

			<h3 class="title">
				BOD Meetings&emsp;&emsp;
				<span id="addBOD"><i class="fa fa-plus" aria-hidden="true"></i></span>
			</h3>
			<form id="bodForm" class="monthlyReport col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="alert alert-danger" id="ErrorMessage" style="display: none;">
				</div>	
				<!-- FIRST			 -->
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="BODmeetingNo1" placeholder="MEETING No" required>
			    	<input type="hidden" value="BOD" id="BODmeetingType1">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="BODmeetingDate1" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="BODmeetingAttendance1" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- SECOND -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="BODmeetingNo2" placeholder="MEETING No" required>
			    	<input type="hidden" value="BOD" id="BODmeetingType2">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="BODmeetingDate2" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="BODmeetingAttendance2" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- THREE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="BODmeetingNo3" placeholder="MEETING No" required>
			    	<input type="hidden" value="BOD" id="BODmeetingType3">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="BODmeetingDate3" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="BODmeetingAttendance3" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- FOUR -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="BODmeetingNo4" placeholder="MEETING No" required>
			    	<input type="hidden" value="BOD" id="BODmeetingType4">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="BODmeetingDate4" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="BODmeetingAttendance4" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>

				<!-- FIVE -->
				<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportName">MEETING No.:</label>
			    	<input type="number" class="form-control" id="BODmeetingNo5" placeholder="MEETING No" required>
			    	<input type="hidden" value="BOD" id="BODmeetingType5">
			  	</div>
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="reportDate">MEETING DATE:</label>
			    	<input type="date" class="form-control" id="BODmeetingDate5" required >
			  	</div>					    	
			  	<div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    	<label for="attendance">NO. PEOPLE ATTENDED:</label>
			    	<input type="number" class="form-control" id="BODmeetingAttendance5" placeholder="No. of Attendance" required title="Only Characters">
			  	</div>
			</form>

		  	<div id="monthlyReportBtn" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
		  		<input type="hidden" value="<?php echo $this->session->userdata['clubData']['clubName'];?>" id="clubName">
		  		<input type="hidden" value="<?php echo $this->session->userdata['clubData']['email'];?>" id="clubEmail">
			  	<button id="SumbitReport" class="btn btn-primary col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">SUBMIT</button>
		  	</div>
		</div>
		<!-- /Row -->
	</div>
	<!-- /Container -->
</div>
<script type="text/javascript" src="js/MonthlyReport.js"></script>