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
				<table id="table1" class="table table-hover">
					<thead>
						<tr>
							<th>SL</th>
							<th>Image</th>
							<th>Info</th>
							<th>Price</th>
							<th>Specification</th>
							<th>Rating</th>

						</tr>
					</thead>
					<tbody>
						<?php for ($i=1; $i <40 ; $i+1){?>
							<tr>
								<td><?=$i++;$i;?></td>
								<td>Pigeon</td>
								<td>Webdeveloper</td>
								<td>2</td>
								<td>pigeon@gmail.com</td>
								<td>
									<a data-toggle="modal" data-target="#desModal">Show</a>
									<div class="modal fade" id="desModal" role="dialog">
										<div class="modal-dialog">

											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title text-center">Description</h4>
												</div>
												<div class="modal-body">
													<p>It's ok</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>

										</div>
									</div>

								</td>


							</tr>

							<?php }?>
						</tbody>
					</table>
				</div>
			</div>

			<div id="Organization" class="w3-container searchTable" style="display:none">
				<div class="shadow formmarpad searchtable" id="organizationtable">
					<?php echo heading('Search Result of Organization', 1); ?>
					<table id="table2" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Logo</th>
								<th>Name</th>
								<th>Address</th>
								<th>Contact</th>
								<th>Rating</th>

							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
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
					<table id="table4" class="table table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Image</th>
								<th>Name</th>
								<th>Address</th>
								<th>Contact</th>

							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
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