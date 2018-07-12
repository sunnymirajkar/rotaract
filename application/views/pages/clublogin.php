<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Modal -->
<div class="modal fade" id="changePasswordModal" role="dialog">
    <div class="modal-dialog">	    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
          <input id="changePasswordEmail" type="text" name="email"  placeholder="enter your username\email">
        </div>
        <div class="modal-footer">
          <button id="changePasswordBtn" type="submit" class="btn btn-submit">Submit</button>
        </div>
      </div>
      
    </div>
</div>

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
				<h2 class="title">CLUB LOGIN</h2>
			</div>
			<!-- /Section header -->
			<div style="display: none;" class="alert">
			  
			</div>
			<form class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
			  	<div class="form-group">
			    	<label for="clubLoginId">USERNAME:</label>
			    	<input type="text" class="form-control" id="clubLoginId">
			  	</div>
			  	<div class="form-group">
			    	<label for="clubPassword">PASSWORD:</label>
			    	<input type="password" class="form-control" id="clubPassword">
			  	</div>
			  	<div class="checkbox">
			   	 	<label><a data-toggle="modal" data-target="#changePasswordModal" href="#">Change Password</a></label>
			  	</div>
			  	<button id="loginSubmit" type="submit" class="btn btn-default">
			  		Submit
			  	</button>
			</form>
		</div>
		<!-- /Row -->
	</div>
	<!-- /Container -->
</div>