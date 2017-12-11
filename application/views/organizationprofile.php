<!DOCTYPE html>

<html>
<head>
	<title>Organization Profile</title>
	<?php include('bundle.php');?>
</head>
<body>
	
	<div class="container topmargin slideup" style="padding-bottom: 5%;">
		<div class="shadow" style="width: 300px; height: 270px; margin: 0 auto;">
			<img style="width: 100%;height: 100%;" src=" <?= base_url().$org_info[0]['filepath'] ?> ">
		</div>
		<h2 style="text-align: center;">
			<?= $org_info[0]['name'] ?>
		</h2>
		<h2 style="text-align: center;">
			<?= $org_info[0]['rate'] ?>
		</h2>
		<br>
		<div class="w3-bar w3-black shadow" style="">

			<button class="w3-bar-item w3-button" id="Productbtn" onclick="openTab('ProductOrg')">Products</button>
			<button class="w3-bar-item w3-button" id="Contactbtn"onclick="openTab('contactOrg')">Contact Info</button>
			<button class="w3-bar-item w3-button" id="Aboutbtn" onclick="openTab('aboutOrg')">About</button>
			<button class="w3-bar-item w3-button" id="Rulesbtn" onclick="openTab('rulesOrg')">Rules</button>
			<?php
			if($this->session->userdata('userid') == $org_info[0]['ownerid']){
				echo '<button class="w3-bar-item w3-button" id="Albumbtn" onclick="';
				echo "openTab('albumOrg')";
				echo '">Album</button>';
			}
			?>
			
		</div>
		<div id="ProductOrg" class="w3-container searchTable" style="display:none">
			<div class="formmarpad shadow searchtable" id="brandtable" style="padding: 2%;">
				<?php if(isset($productlist)){
					$count = 1;
					echo '
					<table id="productOrgTable" class="table table-hover">
					<thead>
					<tr>
					<th>SL</th>
					<th>Image</th>
					<th>Info</th>
					<th>Price</th>
					<th>Specification</th>
					<th>Rating</th>';
					if($this->session->userdata('userid') == $org_info[0]['ownerid'] || $current_user_info[0]['type'] == 'admin'){
						echo '<th>Options</th>';
					};

					echo '
					</tr>
					</thead>
					<tbody>';
					foreach ($productlist as $key) {

						echo '
						<tr>
						<td>' . $count++; echo "</td>
						<td> <img style='width:100px;height:100px' src='" . base_url(). $key['filepath'] . "'></td>
						<td>"."Name : <a href='".base_url()."Product/index/".$key['id'] ."'>". $key['name']."</a><br> Category : ".$key['category']."<br> Brand : ". $key['brand'] . "<br> Date Added : ". $key['dateadded'] ."</td>
						<td>" . $key['price']. ' per '. $key['unit'] . "</td>
						<td><a data-toggle='modal' data-target='#modalspec".$count."'>Click Here for Specification</a></td>
						<td>" . $key['rate'];
						echo '
						<div class="modal fade" id="modalspec'.$count.'" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Specification</h4>
						</div>
						<div class="modal-body">
						<p>'. $key['specification'] .'</p>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						</div>

						</div>
						</div>
						';
						echo "</td>";

						if($this->session->userdata('userid') == $org_info[0]['ownerid']){
							echo "<td>";
							echo "<a class='btn btn-danger' href='".base_url()."Product/showEditProduct/".$key['id']."'>EDIT</a> &nbsp";
							echo "<a class='btn btn-primary' href='".base_url()."Product/delete/".$key['id']."'>Delete</a>";
							echo "</td>";
						}
						else if($current_user_info[0]['type']== 'admin'){
							echo "<td>";
							echo "<a class='btn btn-primary' href='".base_url()."Product/delete/".$key['id']."'>Delete</a>";
							echo "</td>";
						}
						echo "</tr>";
					}
					echo "</tbody>
					</table> ";



				}
				else
					echo '<p>No Organisation available for the profile!</p>';
				?>

			</div>
		</div>
		<div id="contactOrg" class="w3-container searchTable">
			<div class="shadow formmarpad" id="producttable" style="">
				<?php if(isset($org_info[0]['nid'])){
					echo '<h3>NID : '.$org_info[0]['nid'].'</h3>';
				} ?>
				<h3>PHONE : <?= $org_info[0]['phone'] ?></h3>
				<h3>EMAIL : <?= $org_info[0]['email'] ?></h3>
				<h3>PHONE : <?= $org_info[0]['website'] ?></h3>
				<h3>ADDRESS : <i> <?= $org_info[0]['street'].', '.$org_info[0]['city'].', '.$org_info[0]['thana'].', '.$org_info[0]['district'].', '.$org_info[0]['division'] ?> </i></h3>
				
			</div>
		</div>

		<div id="aboutOrg" class="w3-container searchTable" style="display:none">
			<div class="shadow formmarpad searchtable" id="organizationtable">
				<?php if(isset($org_info[0]['about']))
				echo '<p>'.$org_info[0]['about'].'</p>';
				else
					echo '<p>No details available for the organisation!</p>';
				?>

			</div> 
		</div>
		<div id="rulesOrg" class="w3-container searchTable" style="display:none">
			<div class="shadow formmarpad searchtable" id="albumntable">
				<?php if(isset($org_info[0]['rules']))
				echo '<p>'.$org_info[0]['rules'].'</p>';
				else
					echo '<p>No Rules & Regulations available for the organisation!</p>';
				?>
			</div>
		</div>
		<div id="albumOrg" class="w3-container searchTable" style="display:none">
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
				$('#productOrgTable').DataTable();
				activeSearch();
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