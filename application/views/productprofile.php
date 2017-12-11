<!DOCTYPE html>

<html>
<head>
	<title>Product Profile</title>
	<?php include('bundle.php');?>
</head>
<body>
	
	<div class="container topmargin slideup" style="padding-bottom: 5%;">
		<div class="shadow" style="width: 300px; height: 270px; margin: 0 auto;">
			<img style="width: 100%;height: 100%;" src=" <?= base_url().$productinfo[0]['filepath'] ?> ">
		</div>
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
					<a href="Something" class="btn btn-success" style="margin-bottom: 5px">Add Images</a>

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
								<td><a class="btn btn-danger" href="'. base_url(). 'something' .'">Delete</a></td>
							</tr>
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