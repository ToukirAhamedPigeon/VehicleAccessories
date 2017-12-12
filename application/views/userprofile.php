<!DOCTYPE html>

<html>
<head>
	<title>User Profile</title>
	<?php include('bundle.php');?>
</head>
<body>
	
	<div class="container topmargin slideup" style="padding-bottom: 5%;">
		<div class="shadow" style="width: 300px; height: 270px; margin: 0 auto;">
			<img style="width: 100%;height: 100%;" src=" <?= base_url().$user_info[0]['filepath'] ?> ">
		</div>
		<h2 style="text-align: center;">
			<?= $user_info[0]['firstname'] ?>
		</h2>
		<br>
		<div class="w3-bar w3-black shadow" style="">
			<button class="w3-bar-item w3-button" id="Productbtn" onclick="openTab('contactInfoUser')">Contact Info</button>
			<button class="w3-bar-item w3-button" id="Organizationbtn" onclick="openTab('aboutUser')">About</button>
			<button class="w3-bar-item w3-button" id="Brandbtn" onclick="openTab('organisationUser')">Organization</button>
		</div>

		<div id="contactInfoUser" class="w3-container searchTable">
			<div class="shadow formmarpad" id="producttable" style="">
				<?php if(isset($user_info[0]['nid'])){
					echo '<h3>NID : '.$user_info[0]['nid'].'</h3>';
				} ?>
				<h3>EMAIL : <?= $user_info[0]['email'] ?></h3>
				<h3>PHONE : <?= $user_info[0]['phone'] ?></h3>
				<h3>ADDRESS : <i> <?= $user_info[0]['street'].', '.$user_info[0]['city'].', '.$user_info[0]['thana'].', '.$user_info[0]['district'].', '.$user_info[0]['division'] ?> </i></h3>
				
				</div>
			</div>

			<div id="aboutUser" class="w3-container searchTable" style="display:none">
				<div class="shadow formmarpad searchtable" id="organizationtable">
					<?php if(isset($user_info[0]['about']))
						echo '<p>'.$user_info[0]['about'].'</p>';
					else
						echo '<p>No details available for the profile!</p>';
				 ?>
					
				</div> 
			</div>

			<div id="organisationUser" class="w3-container searchTable" style="display:none">
				<div class="formmarpad shadow searchtable" id="brandtable" style="padding: 2%;">
					<?php if(isset($orglist)){
						$count = 1;
							echo '
							<table id="tableOrg" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Logo</th>
								<th>Name</th>
								<th>Address</th>
								<th>Contact</th>
								<th>Rating</th>';
								if($this->session->userdata('userid') == $user_info[0]['id'] || $current_user_info[0]['type'] == 'admin'){
									echo '<th>Options</th>';
								}; echo '
							</tr>
						</thead>
						<tbody>';
						foreach ($orglist as $key) {
								
								echo '
							<tr>
								<td>' . $count++; echo "</td>
								<td> <img style='width:47px;height:44px' src='" . base_url(). $key['filepath'] . "'></td>
								<td><a href='".base_url()."Organization/index/".$key['name']."'>" . $key['name'] . "</a></td>
								<td>" . $key['street']. ", ". $key['thana']. ",  ". $key['city'].", ". $key['district'].", ".", ". $key['division'] . "</td>
								<td>" . $key['phone'] ."</td>
								<td>" . $key['rate'] ."</td>";
								
								if($this->session->userdata('userid') == $user_info[0]['id']){
									echo "<td>";
									echo "<a class='btn btn-danger' href='".base_url()."Organization/showEditOrganization/".$key['name']."'>EDIT</a> &nbsp";
									if($key['status'] == 'active'){
										echo "<a class='btn btn-primary' data-toggle='modal' data-target='#deactivOrg".$count."'>Deactivate</a>";
									echo '
															 <div class="modal fade" id="deactivOrg'.$count.'" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Deactivate The Organization</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure want to deactivate this organization?</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
												<a href="'.base_url().'Organization/deactivate/'.$key['id'].'"><button type="button" class="btn btn-primary" id="modal-btn-si">Yes</button></a>
											</div>
										</div>

									</div>
								</div>
															 ';
								echo "</td>";
									}
									else if ($key['status'] == 'deactivate'){
										echo "<a href='".base_url().'Organization/activate/'.$key['id']."'' class='btn btn-success' >Activate</a>";
									
								echo "</td>";
									}
									
							}
								else if($current_user_info[0]['type'] == 'admin'){
									echo "<td>";
									
									if($key['status'] != 'unban'){
									 	echo "<a class='btn btn-danger' data-toggle='modal' data-target='#banOrg".$count."'>Ban</a> &nbsp";
									 	echo '
															 <div class="modal fade" id="banOrg'.$count.'" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Ban The Organization</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure want to Ban this organisation?</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
												<a href=“'.base_url().'Product/delete/'.$key['id'].'”><button type="button" class="btn btn-primary" id="modal-btn-si">Yes</button></a>
											</div>
										</div>

									</div>
								</div>
															 ';
									}
									else if($key['status'] == 'unban')
										echo "<a class='btn btn-danger' href=''>Unban </a> &nbsp";
									
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
		</div>


		<?php include('logosmall.php');?> 
		<?php include('_footer.php');?>
		<script type="text/javascript">
			$(function(){
			$('#tableOrg').DataTable();
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