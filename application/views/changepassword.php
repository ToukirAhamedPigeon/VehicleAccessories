<!DOCTYPE html>

<html>
<head>
	<title>Change Password</title>
	<?php include('bundle.php');?>
</head>
<body class="font">
	<div class="container topmargin">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<?php echo form_open_multipart($host."User/changePassword",['class'=>'form-horizontal backgray formmarpad shadow slideup','id'=>'regform']) ?>
				<fieldset>
					<legend>Change Password</legend>

					<span id="posterrors">

						<?php 
						if(validation_errors()!="")
						{
							echo ' <button type="button" id="errorclose" class="close" data-dismiss="alert">&times</button><div class="alert alert-dismissible alert-danger fontsmall"><strong>Oops!</strong></br>'.validation_errors().'</div>';
						}
						elseif(isset($upload_error))
						{
							echo ' <button type="button" id="errorclose" class="close" data-dismiss="alert">&times</button><div class="alert alert-dismissible alert-danger fontsmall"><strong>Oops!</strong></br>'.$upload_error.'</div>';
						}
						if($feedback=$this->session->flashdata('feedback'))
						{
							echo ' <div class="alert alert-dismissible alert-success fontsmall">
							<button type="button" class="close" data-dismiss="alert">&times;</button>'.$feedback.
							'</div>';
						}

						?>

					</span>

					<div class="form-group">
						<label for="inputPassword" class="col-lg-4 control-label">Old Password</label>
						<div class="col-lg-8">
							<?php echo form_password(['name'=>'oldpassword','id'=>'inputOldPassword','required'=>TRUE,'class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')]);?>
							<div class="checkbox">
								<label>
									<?php echo form_checkbox(['id'=>'inputOldCheckPass','class'=>'check']);?>
									<?php echo form_label('See Old Password', 'labelcheckpass', [ 'class' => 'fontsmall','id' => 'labelCheckPass']);?>
								</label>
							</div>
						</div>
					</div>
					<div class="errrow">
						<div class="col-lg-4"></div>
						<div class="col-lg-8"><p class="white" id="passwordErr" >*</p></div>
					</div>

					<div class="form-group">
						<label for="inputPassword" class="col-lg-4 control-label">New Password</label>
						<div class="col-lg-8">
							<?php echo form_password(['name'=>'password','id'=>'inputPassword','required'=>TRUE,'class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')]);?>
							<div class="checkbox">
								<label>
									<?php echo form_checkbox(['id'=>'inputCheckPass','class'=>'check']);?>
									<?php echo form_label('See New Password', 'labelcheckpass', [ 'class' => 'fontsmall','id' => 'labelCheckPass']);?>
								</label>
							</div>
						</div>
					</div>
					<div class="errrow">
						<div class="col-lg-4"></div>
						<div class="col-lg-8"><p class="white" id="passwordErr" >*</p></div>
					</div>

					<div class="form-group">
						<label for="inputConfirmPassword" class="col-lg-4 control-label">Confirm New Password</label>
						<div class="col-lg-8">
							<?php echo form_password(['name'=>'confirmpassword','id'=>'inputConfirmPassword','required'=>TRUE,'class'=>'form-control','placeholder'=>'Confirm Password','value'=>set_value('confirmpassword')]);?>
							<div class="checkbox">
								<label>
									<?php echo form_checkbox(['id'=>'inputConfCheckPass','class'=>'check']);?>
									<?php echo form_label('See Confirm Password', 'labelcheckconfpass', [ 'class' => 'fontsmall','id' => 'labelCheckPass']);?>
								</label>
							</div>
						</div>
					</div>
					<div class="errrow">
						<div class="col-lg-2"></div>
						<div class="col-lg-10"><p class="white" id="confirmpasswordErr" >*</p></div>
					</div>  

					<div class="form-group right">
						<div class="col-lg-10 col-lg-offset-2">
							<?php echo form_reset(['id'=>'formReset','class'=>'btn btn-default','value'=>'Reset'])?>
							<?php echo form_submit(['id'=>'formSubmit','class'=>'btn btn-primary','value'=>'Submit'])?>
						</div>
					</div>
				</fieldset>
				<?php echo form_close();?>
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>
	<?php include('logosmall.php');?>
	<?php include('_footer.php');?>
</body>
</html>
