<!DOCTYPE html>

<html>
	<head>
		<title>Edit Organization</title>
		<?php include('bundle.php');?>
	</head>
	<body class="font">
	<div class="container topmargin">
	<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
	<?php echo form_open_multipart($host."User/registration",['class'=>'form-horizontal backgray formmarpad shadow','id'=>'regform']) ?>
  <fieldset>
    <legend>Edit Organization</legend>
    
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
		
		?>
   
    </span>
    
     
    
    
    
      <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'name','id'=>'inputName','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="nameErr" >*</p></div>
    </div>
	
	
	
     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'email','id'=>'inputEmail','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="emailErr" >*</p></div>
    </div>
	
	
	<div class="form-group">
      <label for="inputWebsite" class="col-lg-2 control-label">Website</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'website','id'=>'inputWebsite','class'=>'form-control','placeholder'=>'Website','value'=>set_value('website')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="websiteErr" >*</p></div>
    </div>
    
      <div class="form-group">
      <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'phone','id'=>'inputPhone','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('phone')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="phoneErr" >*</p></div>
    </div>
    
      <div class="form-group">
      <label for="inputStreet" class="col-lg-2 control-label">Street</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'street','id'=>'inputStreet','class'=>'form-control','placeholder'=>'Street','value'=>set_value('street')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="streetErr" >*</p></div>
    </div>
    
     <div class="form-group">
      <label for="selectCity" class="col-lg-2 control-label">City</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectCity" name="city">
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
      <label for="selectThana" class="col-lg-2 control-label">Thana</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectThana" name="thana">
          <option value="Khilkhet">Khilkhet</option>
          <option value="Banani">Banani</option>
          <option value="Adamdeghi">Adamdeghi</option>
		  </select>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="thanaErr" >*</p></div>
    </div>
    
        <div class="form-group">
      <label for="selectDistrict" class="col-lg-2 control-label">District</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectDistrict" name="district">
          <option value="Dhaka">Dhaka</option>
          <option value="Bogra">Bogra</option>
          <option value="Comilla">Comilla</option>
		  </select>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="districtErr" >*</p></div>
    </div>
    
        <div class="form-group">
      <label for="selectDivision" class="col-lg-2 control-label">Division</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectDivision" name="division">
          <option value="Dhaka">Dhaka</option>
          <option value="Rajshahi">Rajshahi</option>
          <option value="Chittagong">Chittgong</option>
		  </select>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="divisionErr" >*</p></div>
    </div>
    
        <div class="form-group">
      <label for="selectCountry" class="col-lg-2 control-label">Country</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectCountry" name="country">
          <option value="Bangladesh">Bangladesh</option>
          <option value="India">India</option>
          <option value="Pakistan">Pakistan</option>
		  </select>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="countryErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="inputLatitude" class="col-lg-2 control-label">Latitude</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'latitude','id'=>'inputLatitude','class'=>'form-control','placeholder'=>'Latitude','value'=>set_value('latitude')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="latitudeErr" >*</p></div>
    </div>
	
	
	<div class="form-group">
      <label for="inputLongitude" class="col-lg-2 control-label">Longitude</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'longitude','id'=>'inputLongitude','class'=>'form-control','placeholder'=>'Longitude','value'=>set_value('longitude')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="longitudeErr" >*</p></div>
    </div>
	
	<div class="form-group">
      <label for="inputRules" class="col-lg-2 control-label">Rules</label>
      <div class="col-lg-10">
         <?php echo form_textarea(['name'=>'rules','id'=>'inputRules','rows'=>'3','class'=>'form-control','value'=>set_value('rules')]);?>
      </div>
    </div>
    <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="rulesErr" >*</p></div>
    </div>
    
    
    <div class="form-group">
      <label for="inputAbout" class="col-lg-2 control-label">About</label>
      <div class="col-lg-10">
         <?php echo form_textarea(['name'=>'about','id'=>'inputAbout','rows'=>'3','class'=>'form-control','value'=>set_value('about')]);?>
      </div>
    </div>
    <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="aboutErr" >*</p></div>
    </div>
	
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Logo</label>
      <div class="col-lg-10">
      <?php echo img(['src'=>'#','alt'=>'Profile Picture','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'logo'])?>
       <?php echo form_upload(['name'=>'profile','id'=>'file1','class'=>'form-control inputFile', 'value'=>set_value('profile')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="profileErr" >*</p></div>
    </div>
	
	<div class="form-group">
      <label class="col-lg-2 control-label">Image Box 1</label>
      <div class="col-lg-10">
      <?php echo img(['src'=>'#','alt'=>'ImageBox1','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'imagebox1'])?>
       <?php echo form_upload(['name'=>'imagebox1','id'=>'file1','class'=>'form-control inputFile', 'value'=>set_value('imagebox1')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="imagebox1Err" >*</p></div>
    </div>
	
	<div class="form-group">
      <label class="col-lg-2 control-label">Image Box 2</label>
      <div class="col-lg-10">
      <?php echo img(['src'=>'#','alt'=>'ImageBox2','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'imagebox2'])?>
       <?php echo form_upload(['name'=>'imagebox2','id'=>'file1','class'=>'form-control inputFile', 'value'=>set_value('imagebox2')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="imagebox2Err" >*</p></div>
    </div>
	
	<div class="form-group">
      <label class="col-lg-2 control-label">Image Box 3</label>
      <div class="col-lg-10">
      <?php echo img(['src'=>'#','alt'=>'ImageBox3','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'imagebox3'])?>
       <?php echo form_upload(['name'=>'imagebox3','id'=>'file1','class'=>'form-control inputFile', 'value'=>set_value('imagebox3')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="imagebox3Err" >*</p></div>
    </div>
	
	<div class="form-group">
      <label class="col-lg-2 control-label">Image Box 4</label>
      <div class="col-lg-10">
      <?php echo img(['src'=>'#','alt'=>'ImageBox4','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'imagebox4'])?>
       <?php echo form_upload(['name'=>'imagebox4','id'=>'file1','class'=>'form-control inputFile', 'value'=>set_value('imagebox4')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="profileErr" >*</p></div>
    </div>
    
    <div class="form-group right">
      <div class="col-lg-10 col-lg-offset-2">
        <?php echo form_reset(['id'=>'formReset','class'=>'btn btn-default','value'=>'Reset'])?>
        <?php echo form_submit(['id'=>'formSubmit','class'=>'btn btn-primary','value'=>'Edit'])?>
      </div>
    </div>
  </fieldset>
		<?php echo form_close();?>
		</div>
		<div class="col-lg-1"></div>
		</div>
		</div>
		<?php include('logo.php');?>
		<?php include('_footer.php');?>
	</body>
</html>