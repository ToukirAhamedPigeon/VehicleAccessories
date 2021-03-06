<!DOCTYPE html>

<html>
<head>
  <title>Edit User</title>
  <?php include('bundle.php');?>
</head>
<body class="font">
  <div class="container topmargin">
   <div class="row">
     <div class="col-lg-1"></div>
     <div class="col-lg-10">
       <?php echo form_open_multipart($host."User/editUser",['class'=>'form-horizontal backgray formmarpad shadow slideup','id'=>'regform']) ?>
       <fieldset>
        <legend>Edit User</legend>

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
        <label for="selectTitle" class="col-lg-2 control-label">Title</label>
        <div class="col-lg-10">
          <select class="form-control" id="selectTitle" name="title">
            <option value="Mr"<?php echo set_select('title', 'Mr', TRUE);?>>Mr</option>
            <option value="Miss"<?php echo set_select('title', 'Miss');?>>Miss</option>
            <option value="Mrs"<?php echo set_select('title', 'Mrs');?>>Mrs</option>
          </select>
        </div>
      </div>
      <div class="errrow">
       <div class="col-lg-2"></div>
       <div class="col-lg-10"><p class="white" id="titleErr" >*</p></div>
     </div>

     <div class="form-group">
      <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'firstname','id'=>'inputFirstName','required'=>TRUE,'class'=>'form-control','placeholder'=>'FirstName','value'=>set_value('firstname',$current_user_info[0]['firstname'])]);?>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="firstnameErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'lastname','id'=>'inputLastName','required'=>TRUE,'class'=>'form-control','placeholder'=>'LastName','value'=>set_value('lastname',$current_user_info[0]['lastname'])]);?>
      </div>
    </div> 
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="lastnameErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <?php echo form_input(['type'=>'email','name'=>'email','id'=>'inputEmail','required'=>TRUE,'class'=>'form-control','placeholder'=>'Email','value'=>set_value('email',$current_user_info[0]['email'])]);?>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="emailErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="inputNID" class="col-lg-2 control-label">NID</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'nid','id'=>'inputNID','class'=>'form-control','placeholder'=>'NID','value'=>set_value('nid',$current_user_info[0]['nid'])]);?>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="nidErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'phone','id'=>'inputPhone','required'=>TRUE,'class'=>'form-control','placeholder'=>'Phone','value'=>set_value('phone',$current_user_info[0]['phone'])]);?>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="phoneErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="selectCountry" class="col-lg-2 control-label">Country</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectCountry" name="country">
         <option value="Bangladesh"<?php echo set_select('country', 'Bangladesh', TRUE);?>>Bangladesh</option>
         <option value="India"<?php echo set_select('country', 'India');?>>India</option>
         <option value="Pakistan"<?php echo set_select('country', 'Pakistan');?>>Pakistan</option>
       </select>
     </div>
   </div>
   <div class="errrow">
     <div class="col-lg-2"></div>
     <div class="col-lg-10"><p class="white" id="countryErr" >*</p></div>
   </div>

   <div class="form-group">
    <label for="selectDivision" class="col-lg-2 control-label">Division</label>
    <div class="col-lg-10">
      <select class="form-control" id="selectDivision" name="division">
        <option value="Dhaka"<?php echo set_select('division', 'Dhaka', TRUE);?>>Dhaka</option>
        <option value="Rajshahi"<?php echo set_select('division', 'Rajshahi');?>>Rajshahi</option>
        <option value="Chittgong"<?php echo set_select('division', 'Chittgong');?>>Chittgong</option>
      </select>
    </div>
  </div>
  <div class="errrow">
   <div class="col-lg-2"></div>
   <div class="col-lg-10"><p class="white" id="divisionErr" >*</p></div>
 </div>

 <div class="form-group">
  <label for="selectDistrict" class="col-lg-2 control-label">District</label>
  <div class="col-lg-10">
    <select class="form-control" id="selectDistrict" name="district">
     <option value="Dhaka"<?php echo set_select('district', 'Dhaka', TRUE);?>>Dhaka</option>
     <option value="Bogra"<?php echo set_select('district', 'Bogra');?>>Bogra</option>
     <option value="Comilla"<?php echo set_select('district', 'Comilla');?>>Comilla</option>
   </select>
 </div>
</div>
<div class="errrow">
 <div class="col-lg-2"></div>
 <div class="col-lg-10"><p class="white" id="districtErr" >*</p></div>
</div>


<div class="form-group">
  <label for="selectThana" class="col-lg-2 control-label">Thana</label>
  <div class="col-lg-10">
    <select class="form-control" id="selectThana" name="thana">
     <option value="Khilkhet"<?php echo set_select('thana', 'Khilkhet', TRUE);?>>Khilkhet</option>
     <option value="Banani"<?php echo set_select('thana', 'Banani');?>>Banani</option>
     <option value="Adamdeghi"<?php echo set_select('thana', 'Adamdeghi');?>>Adamdeghi</option>
   </select>
 </div>
</div>
<div class="errrow">
 <div class="col-lg-2"></div>
 <div class="col-lg-10"><p class="white" id="thanaErr" >*</p></div>
</div>

<div class="form-group">
  <label for="selectCity" class="col-lg-2 control-label">City</label>
  <div class="col-lg-10">
    <select class="form-control" id="selectCity" name="city">
     <option value="Dhaka"<?php echo set_select('city', 'Dhaka', TRUE);?>>Dhaka</option>
     <option value="Bogra"<?php echo set_select('city', 'Bogra');?>>Bogra</option>
     <option value="Chittgong"<?php echo set_select('city', 'Chittgong');?>>Chittgong</option>
     <option value="Dhaka">Dhaka</option>
     <option value="Bogra">Bogra</option>
     <option value="Chittgong">Chittagong</option>
   </select>
 </div>
</div>
<div class="errrow">
 <div class="col-lg-2"></div>
 <div class="col-lg-10"><p class="white" id="cityErr" >*</p></div>
</div>


<div class="form-group">
  <label for="inputStreet" class="col-lg-2 control-label">Street</label>
  <div class="col-lg-10">
    <?php echo form_input(['name'=>'street','id'=>'inputStreet','required'=>TRUE,'class'=>'form-control','placeholder'=>'Street','value'=>set_value('street',$current_user_info[0]['street'])]);?>
  </div>
</div>
<div class="errrow">
 <div class="col-lg-2"></div>
 <div class="col-lg-10"><p class="white" id="streetErr" >*</p></div>
</div>

<div class="form-group">
  <label for="inputAbout" class="col-lg-2 control-label">About</label>
  <div class="col-lg-10">
   <?php echo form_textarea(['name'=>'about','id'=>'inputAbout','rows'=>'3','class'=>'form-control','value'=>set_value('about',$current_user_info[0]['about'])]);?>
 </div>
</div>
<div class="errrow">
 <div class="col-lg-2"></div>
 <div class="col-lg-10"><p class="white" id="aboutErr" >*</p></div>
</div>

<div class="form-group">
  <label class="col-lg-2 control-label">Profile Picture</label>
  <div class="col-lg-10">
    <?php echo img(['src'=>base_url().$current_user_info[0]['filepath'],'alt'=>'','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'Imagebox1'])?>
    <?php echo form_upload(['name'=>'profile','id'=>'file1','class'=>'form-control inputFile', 'accept'=>"image/*", 'value'=>set_value('profile')]);?>
  </div>
</div>
<div class="errrow">
 <div class="col-lg-2"></div>
 <div class="col-lg-10"><p class="white" id="profileErr" >*</p></div>
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

<script type="text/javascript">
  $(function(){
    CKEDITOR.replace('inputAbout');
    
  });
</script>