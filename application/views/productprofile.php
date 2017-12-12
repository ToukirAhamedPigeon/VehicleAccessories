<!DOCTYPE html>

<html>
<head>
	<title>Product Profile</title>
	<?php include('bundle.php');?>
</head>
<body>
	
	<div class="container topmargin slideup" style="padding-bottom: 5%;">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div id="productSec1" class="" style="">
			<!-- SLider -->
			<?php 
				$countImage = count($imagelist);
			  ?>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; margin: 0 auto;">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<?php 
						
						for($i = 1 ; $i < $countImage; $i++){
							echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
						}
			  		?>

				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item active">
						<img src=" <?= base_url(). $imagelist[0]['filepath'] ?> " alt="Los Angeles" style="width:100%;height:100%">
						
					</div>
					<?php 
						
						for($i = 1 ; $i < $countImage; $i++){
							echo '<div class="item">';
							echo '<img src="'.base_url().$imagelist[$i]['filepath'] .'" alt="There should have been an image" style="width:100%;height:100%">';
							echo '</div>';
						}
			  		?>

				</div>

				
			</div>






			<!-- Slider -->
		</div>
				</div>	
				<div class="col-md-4">
					<div id="productSec2" style="padding-top: 40%">
			<h3 style="text-align: center;">
			<?= $productinfo[0]['name'] ?>
		</h3>
		<h4 style="text-align: center;">
			
			Category : <?= $productinfo[0]['category'] ?>
		</h4>
		<h4 style="text-align: center;">
			Brand :  <?= $productinfo[0]['brand'] ?>
		</h4>
		<h4 style="text-align: center;">
			
			Date Added : <?= $productinfo[0]['dateadded'] ?>
		</h4>
		<h4 style="text-align: center;">
			Organization : <a href=" <?= base_url().'Organization/index/'.$organizationinfo[0]['name'] ?>"><?= $organizationinfo[0]['name'] ?> </a>
		</h4>
		<h4 style="text-align: center;">
			<?= $productinfo[0]['rate'] ?>
		</h4>
		</div>
				</div>	
			</div>
		</div>
		
		
		
		<br>
		<div class="w3-bar w3-black shadow" style="">

			<button class="w3-bar-item w3-button" id="Specbtn" onclick="openTab('SpecPro')">Specification</button>
			<?php
				if($organizationinfo[0]['ownerid'] == $productinfo[0]['organizationid']){
					echo '<button class="w3-bar-item w3-button" id="Albumbtn" onclick="';
					echo "openTab('AlbumPro')";
					echo '">Album</button>';
				}
			?>
			
		</div>
		<div id="SpecPro" class="w3-container searchTable" style="display:none">
				<div class="shadow formmarpad searchtable" id="organizationtable">
					<?php if(isset($productinfo[0]['specification']))
						echo '<p>'.$productinfo[0]['specification'].'</p>';
					else
						echo '<p>No Specification available for the Product!</p>';
				 ?>
					
				</div>
			</div>
			
			<div id="AlbumPro" class="w3-container searchTable" style="display:none">
				<div class="shadow formmarpad searchtable" id="albumntable">
					<a data-toggle="modal" data-target="#addImage" class="btn btn-success" style="margin-bottom: 5px">Add Images</a>
					
					<div class="modal fade" id="addImage" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Add Image</h4>
								</div>
								<div class="modal-body">
									
									<div class="errrow">
										<div class="col-lg-2"></div>
										<div class="col-lg-10"><p class="white" id="profileErr" >*</p></div>
										

										
										<form method="post" action="<?=base_url().'Product/insertFile'?>">
											<div class="col-lg-10" style="margin-top: 8%">
												<?php echo img(['alt'=>'','class'=>'imagebox','width'=>'200','height'=>'200','id'=>'Imagebox1'])?>
												<?php echo form_upload(['name'=>'imagebox1','id'=>'file1','class'=>'form-control inputFile', 'accept'=>'image/*']);?>
												<input type="hidden" name="fileholder" value="<?= $productinfo[0]['id'] ?> ">
												<button style="margin-top: 2%" type="submit" class="btn btn-primary" id="modal-btn-si">Yes</button>
											</form>
											
										</div>
									</div>
								</div>
								<div class="modal-footer">
									
									
								</div>
							</div>

						</div>
					</div>


					<?php if(isset($imagelist)){
						$count = 1;
							echo '
					<table id="galleryTable" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>';
							foreach ($imagelist as $key) {
								echo '
							<tr>
								<td>'. $count++ .'</td>
								<td>';

								echo '<img style="width:150px;height:150px" src="' . base_url(). $key['filepath'] . '">';

								echo '</td>
								<td><a class="btn btn-danger" data-toggle="modal" data-target="#delPro'.$count.'">Delete</a></td>

							</tr>
							';
							echo '
															 <div class="modal fade" id="delPro'.$count.'" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Delete Image</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure want to delete this image?</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
												<a href="'.base_url().'Product/deleteFile/'.$productinfo[0]['id'].'/'.$key['fileid'].'"><button type="button" class="btn btn-primary" id="modal-btn-si">Yes</button></a>
											</div>
										</div>

									</div>
								</div>
															 ';
						}
						echo '</tbody></table>'; }

					?>
				</div>
			</div>

			
		</div>



		<?php include('logosmall.php');?> 
		<?php include('_footer.php');?>
		<script type="text/javascript">
			$(function(){
			$('#galleryTable').DataTable();
		});
			
			function openTab(tableName) {
			var i;
			var x = document.getElementsByClassName("searchTable");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			document.getElementById(tableName).style.display = "block"; 
			$("#searching").val(tableName);
		}
		</script>
	</body>
	</html>