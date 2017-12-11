<!DOCTYPE html>

<html>
  <head>
    <title>Edit Organization</title>
    <?php include('bundle.php');?>
  </head>
  <body class="font">
  <div class="container topmargin slideup">
  <div class="row">
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
  <?php echo form_open_multipart($host."Organization/editOrganization/".$orginfo[0]['name'],['class'=>'form-horizontal backgray formmarpad shadow','id'=>'regform']) ?>
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
     if($feedback=$this->session->flashdata('feedback'))
         {
           echo ' <div class="alert alert-dismissible alert-success fontsmall">
           <button type="button" class="close" data-dismiss="alert">&times;</button>'.$feedback.
           '</div>';
         }
    ?>
   </span>
      <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <label class="form-control"><?=$orginfo[0]['name']?></label>
        <?php echo form_input(['type'=>'hidden','name'=>'name','required'=>TRUE,'id'=>'inputName','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name',$orginfo[0]['name'])]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="nameErr" >*</p></div>
    </div>
  
     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <?php echo form_input(['type'=>'email','name'=>'email','required'=>TRUE,'id'=>'inputEmail','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email',$orginfo[0]['email'])]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="emailErr" >*</p></div>
    </div>
  
  
  <div class="form-group">
      <label for="inputWebsite" class="col-lg-2 control-label">Website</label>
      <div class="col-lg-10">
        <?php echo form_input(['type'=>'url','name'=>'website','id'=>'inputWebsite','class'=>'form-control','placeholder'=>'Website','value'=>set_value('website',$orginfo[0]['website'])]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="websiteErr" >*</p></div>
    </div>
    
      <div class="form-group">
      <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'phone','required'=>TRUE,'id'=>'inputPhone','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('phone',$orginfo[0]['phone'])]);?>
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
        <?php echo form_input(['name'=>'street','id'=>'inputStreet','class'=>'form-control','placeholder'=>'Street','value'=>set_value('street',$orginfo[0]['street'])]);?>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="streetErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="inputLatitude" class="col-lg-2 control-label">Latitude</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'latitude','id'=>'inputLatitude','class'=>'form-control','placeholder'=>'Latitude','value'=>set_value('latitude',$orginfo[0]['latitude'])]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="latitudeErr" >*</p></div>
    </div>
  
  
  <div class="form-group">
      <label for="inputLongitude" class="col-lg-2 control-label">Longitude</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'longitude','id'=>'inputLongitude','class'=>'form-control','placeholder'=>'Longitude','value'=>set_value('longitude',$orginfo[0]['longitude'])]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="longitudeErr" >*</p></div>
    </div>
  
  <div class="form-group">
      <label for="inputRules" class="col-lg-2 control-label">Rules</label>
      <div class="col-lg-10">
         <?php echo form_textarea(['name'=>'rules','id'=>'inputRules','rows'=>'3','class'=>'form-control','value'=>set_value('rules',$orginfo[0]['rules'])]);?>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="rulesErr" >*</p></div>
    </div>
    
    
    <div class="form-group">
      <label for="inputAbout" class="col-lg-2 control-label">About</label>
      <div class="col-lg-10">
         <?php echo form_textarea(['name'=>'about','id'=>'inputAbout','rows'=>'3','class'=>'form-control','value'=>set_value('about',$orginfo[0]['about'])]);?>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="aboutErr" >*</p></div>
    </div>
  
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Logo</label>
      <div class="col-lg-10">
      <?php echo img(['src'=>base_url().$orginfo[0]['filepath'],'alt'=>'','class'=>'imagebox','width'=>'100','height'=>'100','id'=>'logobox'])?>
       <?php echo form_upload(['name'=>'logo','id'=>'logo','class'=>'form-control inputFile', 'accept'=>'image/*', 'value'=>set_value('logo')]);?>
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
    <?php include('logosmall.php');?>
    <?php include('_footer.php');?>
  </body>
</html>

<script type="text/javascript">
  $(function(){
    CKEDITOR.replace('inputAbout');
    CKEDITOR.replace('inputRules');
    
  });
</script>