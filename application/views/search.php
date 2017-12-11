<!DOCTYPE html>

<html>
<head>
	<title>Search</title>
	<?php include('bundle.php');?>
	<style> 
	h1{
		text-align: center;
	} 
</style>
</head>
<body>
	<div class="container topmargin slideup" style="padding-bottom: 5%;">
		<div class="w3-bar w3-black shadow" style="">
			<button class="w3-bar-item w3-button" id="Productbtn"onclick="openTab('Product')">Product</button>
			<button class="w3-bar-item w3-button" id="Organizationbtn" onclick="openTab('Organization')">Organization</button>
			<button class="w3-bar-item w3-button" id="Brandbtn" onclick="openTab('Brand')">Brand</button>
			<button class="w3-bar-item w3-button" id="Userbtn" onclick="openTab('User')">User</button>
		</div>

		<div id="Product" class="w3-container searchTable">
			<div class="shadow formmarpad" id="producttable" style="">
				<?php echo heading('Search Result of Product', 1); ?>
				<?php if(isset($productlist)){
						$count = 1;
							echo '
							<table id="table1" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Image</th>
								<th>Info</th>
								<th>Price</th>
								<th>Specification</th>
								<th>Rating</th>';
								if($this->session->userdata('userid') !== null || $this->session->userdata('usertype')== 'admin'){
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
								if($this->session->userdata('usertype')== 'admin'){
									echo "<td>";
									echo "<a class='btn btn-primary' href='".base_url()."Organization/deactivate/".$key['id']."'>Delete</a>";
								echo "</td>";
								}
							echo "</tr>";
						}
						echo "</tbody>
								</table> ";
						
						

					}
					else
						echo '<p>No Products Available Yet!</p>';
				 ?>
				</div>
			</div>

			<div id="Organization" class="w3-container searchTable" style="display:none">
				<div class="shadow formmarpad searchtable" id="organizationtable">
					<?php echo heading('Search Result of Organization', 1); ?>
					<?php if(isset($orglist)){
						$count = 1;
							echo '
							<table id="table2" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Logo</th>
								<th>Name</th>
								<th>Address</th>
								<th>Contact</th>
								<th>Rating</th>';
								if($this->session->userdata('userid') !== null || $this->session->userdata('usertype')== 'admin'){
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
								
								if($this->session->userdata('usertype')== 'admin'){
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
												<h4 class="modal-title">Specification</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure want to Ban this organisation?</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>
															 ';
									}
									else if($key['status'] == 'unban')
										echo "<a class='btn btn-danger' href=''>Unban </a> &nbsp";
									echo "<a class='btn btn-primary' href='".base_url()."Organization/deactivate/".$key['id']."'>Delete</a>";
								echo "</td>";
								}
							echo "</tr>";
						}
						echo "</tbody>
								</table> ";
						
						

					}
					else
						echo '<p>No Organisations Available Yet!</p>';
				 ?>
				</div> 
			</div>

			<div id="Brand" class="w3-container searchTable" style="display:none">
				<div class="formmarpad shadow searchtable" id="brandtable" style="padding: 2%;">
					<?php echo heading('Search Result of Brand', 1); ?>
					<table id="table3" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Logo</th>
								<th>Name</th>
								<th>Rating</th>

							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>

			<div id="User" class="w3-container searchTable" style="display:none">
				<div class="shadow formmarpad searchtable" id="usertable" style="padding: 2%;">
					<?php echo heading('Search Result of User', 1); ?>
					<?php if(isset($users)){
						$count = 1;
							echo '
							<table id="table4" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Image</th>
								<th>Name</th>
								<th>Address</th>
								<th>Contact</th>';
								if($this->session->userdata('userid') !== null || $$this->session->userdata('usertype')== 'admin'){
									echo '<th>Options</th>';
								}; echo '
							</tr>
						</thead>
						<tbody>';
						foreach ($users as $key) {
								
								echo '
							<tr>
								<td>' . $count++; echo "</td>
								<td> <img style='width:47px;height:44px' src='" . base_url(). $key['filepath'] . "'></td>
								<td><a href='".base_url()."Organization/index/".$key['firstname']."'>" . $key['firstname']. ", ". $key['lastname'] . "</a></td>
								<td>" . $key['street']. ", ". $key['thana']. ",  ". $key['city'].", ". $key['district'].", ".", ". $key['division'] . "</td>
								<td>" . $key['phone'] ."</td>";
								
								if($this->session->userdata('usertype')== 'admin'){
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
												<h4 class="modal-title">Specification</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure want to Ban this organisation?</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>
															 ';
									}
									else if($key['status'] == 'unban')
										echo "<a class='btn btn-danger' href=''>Unban </a> &nbsp";
									echo "<a class='btn btn-primary' href='".base_url()."Organization/deactivate/".$key['id']."'>Delete</a>";
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
	</body>
	</html>

	<script type="text/javascript">
		$(function(){
			$('#table1').DataTable();
			$('#table2').DataTable();
			$('#table3').DataTable();
			$('#table4').DataTable();
			activeSearch();
		});

		function activeSearch()
		{
			var activesearch="<?=$activesearch?>";
			//alert(activesearch);
			if(activesearch!=null)
			{
				$('.searchTable').css('display','none');
				document.getElementById(activesearch).style.display = "block";
			}
			else
			{
				$('.searchTable').css('display','none');
				document.getElementById('Product').style.display = "block";
			}
		}

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