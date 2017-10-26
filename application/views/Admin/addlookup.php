<!DOCTYPE html>

<html>
	<head>
		<title>Add Lookup</title>
		<?php include('bundle.php')?>
	</head>
	<body class="font">
	<div class="container topmargin">
	<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
	<?php echo form_open_multipart($host."User/registration",['class'=>'form-horizontal backgray formmarpad shadow','id'=>'regform']) ?>
  <fieldset>
    <legend>Add Lookup</legend>
    
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
      <label for="inputValue" class="col-lg-2 control-label">Value</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'value','id'=>'inputValue','class'=>'form-control','placeholder'=>'Value','value'=>set_value('value')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="valueErr" >*</p></div>
    </div>
	
	
	<div class="form-group">
      <label for="inputType" class="col-lg-2 control-label">Type</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'type','id'=>'inputName','class'=>'form-control','placeholder'=>'Type','value'=>set_value('type')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="typeErr" >*</p></div>
    </div>
   
	
    
    <div class="form-group right">
      <div class="col-lg-10 col-lg-offset-2">
        <?php echo form_reset(['id'=>'formReset','class'=>'btn btn-default','value'=>'Reset'])?>
        <?php echo form_submit(['id'=>'formSubmit','class'=>'btn btn-primary','value'=>'Add'])?>
      </div>
    </div>
  </fieldset>
		<?php echo form_close();?>
		</div>
		<div class="col-lg-1"></div>
		</div>
		</div>
		<?php include('logo.php')?>
		<?php include('_footer.php')?>
	</body>
</html>