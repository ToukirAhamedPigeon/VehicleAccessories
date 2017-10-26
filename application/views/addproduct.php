<!DOCTYPE html>

<html>
	<head>
		<title>Add Product</title>
		<?php include('bundle.php')?>
	</head>
	<body class="font">
	<div class="container topmargin">
	<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
	<?php echo form_open_multipart($host."User/registration",['class'=>'form-horizontal backgray formmarpad shadow','id'=>'regform']) ?>
  <fieldset>
    <legend>Add Product</legend>
    
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
      <label for="inputUserName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'name','id'=>'inputName','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="nameErr" >*</p></div>
    </div>
	
	<div class="form-group">
      <label for="selectCatagory" class="col-lg-2 control-label">Catagory</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectCatagory" name="catagory">
          <option value="Mr">Mr</option>
          <option value="Miss">Miss</option>
          <option value="Mrs">Mrs</option>
		  </select>
      </div>
    </div>
    <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="catagoryErr" >*</p></div>
    </div>
	
	<div class="form-group">
      <label for="selectBrand" class="col-lg-2 control-label">Brand</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectBrand" name="brand">
          <option value="Mr">Mr</option>
          <option value="Miss">Miss</option>
          <option value="Mrs">Mrs</option>
		  </select>
      </div>
    </div>
    <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="brandErr" >*</p></div>
    </div>
    
     <div class="form-group">
      <label for="inputPrice" class="col-lg-2 control-label">Price</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'price','id'=>'inputPrice','class'=>'form-control','placeholder'=>'Price','value'=>set_value('price')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="priceErr" >*</p></div>
    </div>
    
     <div class="form-group">
      <label for="inputUnit" class="col-lg-2 control-label">Unit</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'unit','id'=>'inputUnit','class'=>'form-control','placeholder'=>'unit','value'=>set_value('unit')]);?>
      </div>
    </div>
     <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="unitErr" >*</p></div>
    </div>
    
      
    
    <div class="form-group">
      <label for="inputSpecification" class="col-lg-2 control-label">Specification</label>
      <div class="col-lg-10">
         <?php echo form_textarea(['name'=>'specification','id'=>'inputSpecification','rows'=>'3','class'=>'form-control','value'=>set_value('specification')]);?>
      </div>
    </div>
    <div class="errrow">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-10"><p class="white" id="specificationErr" >*</p></div>
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
    	<div class="col-lg-10"><p class="white" id="imagebox4Err" >*</p></div>
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