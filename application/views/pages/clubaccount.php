
<!-- Service -->
		<div id="service" class="section md-padding">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<!-- Section header -->
					<div class="section-header text-center">
						<h2 class="title"><?php echo $this->session->userdata['clubData']['clubName'];?></h2>
					</div>
					<!-- /Section header -->

					<!-- service -->
					<div class="col-md-4 col-sm-6" id="MonthlyReport">
						<div class="service">
							<i class="fa fa-flag" aria-hidden="true"></i>
							<h3>Monthly Report</h3>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6" id="AddDistrictEvent">
						<div class="service">
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<h3>Add Event</h3>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6" id="AddDistrictMember">
						<div class="service">
							<i class="fa fa-user-plus" aria-hidden="true"></i>
							<h3>Member Registration</h3>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service uploadImg">
							<h3>Upload President Image</h3>
							<form action="" method="post" enctype="multipart/form-data">
								<div id="selectImage">
									<input type="file" name="PresidentImg" id="PresidentImg" class="form-control" required />
									<input type="hidden" value="<?php echo $this->session->userdata['clubData']['clubName'];?>"
									id="presidentClubName">
									<button type="submit" id="uploadPresidentImg" class="submit btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">Upload</button>
								</div>
								<span>Note: Upload Max. 1MB Image</span>
							</form>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service uploadImg">
							<h3>Upload Secretary Image</h3>
							<form action="" method="post" enctype="multipart/form-data">
								<div id="selectImage">
									<input type="file" name="SecretaryImg" id="SecretaryImg" class="form-control" required />
									<input type="hidden" value="<?php echo $this->session->userdata['clubData']['clubName'];?>" id="secretaryClubName">
									<button type="submit" id="uploadSecretaryImg" class="submit btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">Upload</button>
								</div>							
								<span>Note: Upload Max. 1MB Image</span>
							</form>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service uploadImg">
							<h3>Upload Gallery Image</h3>
							<form action="" method="post" enctype="multipart/form-data">
								<div id="selectImage">
									<input type="file" name="GalleryImg" id="GalleryImg" class="form-control" required />
									<input type="hidden" value="<?php echo $this->session->userdata['clubData']['clubName'];?>" id="galleryClubName">
									<button type="submit" id="uploadGalleryImg" class="submit btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">Upload</button>
								</div>							
								<span>Note: Upload Max. 1MB Image</span>
							</form>
						</div>
					</div>
					<!-- /service -->

				</div>
				<!-- /Row -->

				<!-- Row -->
				<div class="row md-padding">
					<!-- Section header -->
					<div class="section-header text-center">
						<h2 class="title">Club Board of Directors</h2>
					</div>
					 <table class="table table-striped">
					    <thead>
					      <tr>
					        <th>Name</th>
					        <th>Contact</th>
					        <th class="mobileView">Email</th>
					        <th>Blood Group</th>
					        <th class="mobileView">DESIGNATION</th>
					        <th>Update / Delete</th>
					      </tr>
					    </thead>
					    <tbody id="clubBODData">
					</table>
					<!-- /Section header -->
				</div>
				<!-- /Row -->

				<!-- Row -->
				<div class="row md-padding">
					<!-- Section header -->
					<div class="section-header text-center">
						<h2 class="title">Club Members</h2>
					</div>
					 <table class="table table-striped">
					    <thead>
					      <tr>
					        <th>Name</th>
					        <th>Contact</th>
					        <th class="mobileView">Email</th>
					        <th>Blood Group</th>
					        <th class="mobileView">DESIGNATION</th>
					        <th>Update / Delete</th>
					      </tr>
					    </thead>
					    <tbody id="clubMembersData">
					</table>
					<!-- /Section header -->
				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Service -->
		 <script type="text/javascript">
	    	$(document).ready(function(){
	    		ClubMembers("<?php echo $this->session->userdata['clubData']['clubName'];?>");
	    	});
	    </script>