<!DOCTYPE html>

<html>
<head>
  <title>Log In</title>
  <?php include('bundle.php');?>
</head>
<body class="font">
	<div class="container topmargin">
   <div class="row">
     <div class="col-lg-1"></div>
     <div class="col-lg-10">
       <?php echo form_open($host."Home/login",['class'=>'form-horizontal backgray formmarpad shadow','id'=>'regform']) ?>
       <fieldset>
        <legend>Log In</legend>
        
        <span id="posterrors">
         
          <?php 
          if(validation_errors()!="")
          {
           echo ' <button type="button" id="errorclose" class="close" data-dismiss="alert">&times</button><div class="alert alert-dismissible alert-danger fontsmall"><strong>Oops!</strong></br>'.validation_errors().'</div>';
         }
         elseif(isset($check_error))
         {
           echo ' <button type="button" id="errorclose" class="close" data-dismiss="alert">&times</button><div class="alert alert-dismissible alert-danger fontsmall"><strong>Oops!</strong></br>'.$check_error.'</div>';
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
        <label for="inputUserName" class="col-lg-2 control-label">User Name</label>
        <div class="col-lg-10">
          <?php echo form_input(['name'=>'username','id'=>'inputUserName','class'=>'form-control','placeholder'=>'UserName','value'=>set_value('username')]);?>
        </div>
      </div>
      <div class="errrow">
       <div class="col-lg-2"></div>
       <div class="col-lg-10"><p class="white" id="usernameErr" >*</p></div>
     </div>
     
     
     
     <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <?php echo form_password(['name'=>'password','id'=>'inputPassword','class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')]);?>
        <div class="checkbox">
          <label>
           <?php echo form_checkbox(['id'=>'inputCheckPass','class'=>'check']);?>
           <?php echo form_label('See Password', 'labelcheckpass', [ 'class' => 'fontsmall','id' => 'labelCheckPass']);?>
         </label>
       </div>
     </div>
   </div>
   <div class="errrow">
     <div class="col-lg-2"></div>
     <div class="col-lg-10"><p class="white" id="passwordErr" >*</p></div>
   </div>
   
   
   
   <div class="form-group right">
    <div class="col-lg-10 col-lg-offset-2">
      
      <?php echo form_submit(['id'=>'formSubmit','class'=>'btn btn-default','value'=>'Log In'])?>
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
