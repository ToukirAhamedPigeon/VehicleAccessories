<!DOCTYPE html>

<html>
  <head>
    <title>Add Product</title>
    <?php include('bundle.php');?>
  </head>
  <body class="font">
  <div class="container topmargin slideup">
  <div class="row">
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
  <?php echo form_open_multipart($host."Product/addProduct",['class'=>'form-horizontal backgray formmarpad shadow','id'=>'regform']) ?>
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
     if($feedback=$this->session->flashdata('feedback'))
         {
           echo ' <div class="alert alert-dismissible alert-success fontsmall">
           <button type="button" class="close" data-dismiss="alert">&times;</button>'.$feedback.
           '</div>';
         }
    ?>
   </span>
       <?php echo form_input(['type'=>'hidden','name'=>'orgid','id'=>'inputOrgId','value'=>set_value('orgid',$orgid)]);?>

      <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'name','required'=>TRUE,'id'=>'inputName','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name')]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="nameErr" >*</p></div>
    </div>
  
      <div class="form-group">
      <label for="inputPrice" class="col-lg-2 control-label">Price</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'price','required'=>TRUE,'id'=>'inputPrice','class'=>'form-control','placeholder'=>'Price','value'=>set_value('price')]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="priceErr" >*</p></div>
    </div>

     <div class="form-group">
      <label for="selectUnit" class="col-lg-2 control-label">Unit</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectUnit" name="unit">
           <option value="kg"<?php echo set_select('unit', 'kg', TRUE);?>>kg</option>
            <option value="litre"<?php echo set_select('unit', 'litre');?>>litre</option>
            <option value="piece"<?php echo set_select('unit', 'piece');?>>piece</option>
        </select>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="unitErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="selectCategory" class="col-lg-2 control-label">Category</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectCategory" name="category">
          <option value="oil"<?php echo set_select('category', 'oil', TRUE);?>>oil</option>
            <option value="parts"<?php echo set_select('category', 'parts');?>>parts</option>
            <option value="service"<?php echo set_select('category', 'service');?>>service</option>
        </select>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="categoryErr" >*</p></div>
    </div>
    
    <div class="form-group">
      <label for="selectBrand" class="col-lg-2 control-label">Brand</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectBrand" name="brand">
           <option value="No Brand"<?php echo set_select('brand', 'No Brand', TRUE);?>>No Brand</option>
            <option value="Lamborgini"<?php echo set_select('brand', 'Lamborgini');?>>Lamborgini</option>
            <option value="Audi"<?php echo set_select('brand', 'Audi');?>>Audi</option>
        </select>
      </div>
    </div>
    <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="brandErr" >*</p></div>
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
      <?php echo img(['alt'=>'','class'=>'imagebox','width'=>'100','height'=>'100','id'=>'logobox'])?>
       <?php echo form_upload(['name'=>'logo','id'=>'logo','class'=>'form-control inputFile', 'accept'=>'image/*', 'value'=>set_value('logo')]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="profileErr" >*</p></div>
    </div>
  
  <div class="form-group">
      <label class="col-lg-2 control-label">Image Box 1</label>
      <div class="col-lg-10">
     <?php echo img(['alt'=>'','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'Imagebox1'])?>
       <?php echo form_upload(['name'=>'imagebox1','id'=>'file1','class'=>'form-control inputFile', 'accept'=>'image/*', 'value'=>set_value('imagebox1')]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="imagebox1Err" >*</p></div>
    </div>
  
  <div class="form-group">
      <label class="col-lg-2 control-label">Image Box 2</label>
      <div class="col-lg-10">
    <?php echo img(['alt'=>'','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'Imagebox2'])?>
       <?php echo form_upload(['name'=>'imagebox2','id'=>'file2','class'=>'form-control inputFile', 'accept'=>'image/*', 'value'=>set_value('imagebox2')]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="imagebox2Err" >*</p></div>
    </div>
  
  <div class="form-group">
      <label class="col-lg-2 control-label">Image Box 3</label>
      <div class="col-lg-10">
     <?php echo img(['alt'=>'','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'Imagebox3'])?>
       <?php echo form_upload(['name'=>'imagebox3','id'=>'file3','class'=>'form-control inputFile', 'accept'=>'image/*', 'value'=>set_value('imagebox3')]);?>
      </div>
    </div>
     <div class="errrow">
      <div class="col-lg-2"></div>
      <div class="col-lg-10"><p class="white" id="imagebox3Err" >*</p></div>
    </div>
  
  <div class="form-group">
      <label class="col-lg-2 control-label">Image Box 4</label>
      <div class="col-lg-10">
     <?php echo img(['alt'=>'','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'Imagebox4'])?>
       <?php echo form_upload(['name'=>'imagebox4','id'=>'file4','class'=>'form-control inputFile', 'accept'=>'image/*', 'value'=>set_value('imagebox4')]);?>
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
    <?php include('logosmall.php');?>
    <?php include('_footer.php');?>
  </body>
</html>

<script type="text/javascript">
  $(function(){
    CKEDITOR.replace('inputSpecification');
  });
</script>