<div class="logosmall shadow" style="padding-top: 1%; margin-bottom: -5%;" >
	<nav class="navbar navbar-reverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src=<?php echo ("'".$host."assets/files/icons/car.ico'");?> style="" height='45px' width='45px'>
			</div>
			<div class="navbar-header" style="margin-left:1%;">
				<a class="navbar-brand biglink"  href=<?php echo("'".$host."'")?> style="font-size: 25px;">
					Vehicle Accessories
				</a>
			</div>
			<input type="hidden" id="activelink" value=<?php if(isset($activelink)){
				echo('"'.$activelink.'"');
			}?>> 
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a id="homelink" href=<?php echo("'".$host."Home'");?> class="logolink activelink">Home<span class="sr-only">(current)</span></a></li> 
					<li><a id="aboutlink" href=<?php echo("'".$host."Home/aboutus'");?> class="logolink">About Us</a></li>
				</ul>
				<form action=<?php echo($host."Search")?> class="navbar-form navbar-left" method="post" role="search">
					<div class="form-group">
						<input type="text" id="searchAll" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<?php 
					if(isset($current_user_info))
					{
						echo("<li class='dropdown'>
							<a id='actionlink' href='#' class='dropdown-toggle  logolink' data-toggle='dropdown' role='button' aria-expanded='true'>Actions <span class='caret'></span></a>
							<ul class='dropdown-menu Open' role='menu'>
							<li><a href='".$host."User/showEditUser'>Edit Info</a></li>
							<li><a href='".$host."User/showChangePassword'>Change Password</a></li>
							<li class='divider'></li>
							<li><a href='".$host."User/index'>Add Organizaiton</a></li>
							<li class='divider'></li>
							<li><a data-toggle='modal' data-target='#deactivateModal' >Account Deactivate</a></li>
							</ul>
							</li>
							<li><a id='messagelink' data-toggle='modal' data-target='#messageModal' class='logolink'><div class=''>
							<span class='glyphicon glyphicon-globe'></span>
							<span class='badge' id='totalmessage'></span>
							</div></a></li>

							<li style=><a id='profilelink' href='".$host."User/index/".$current_user_info[0]['username']."'class='logolink'>".$current_user_info[0]['title'].". ".$current_user_info[0]['firstname']."</a></li>
							<li style=''><img src='".$host.$current_user_info[0]['filepath']."'style='height:50px; width:58px; border-left: 4px solid #3b3b3b;  border-right: 4px solid #3b3b3b; background-color:white;'/></li>
							<li style=''><a href='".$host."User/logout'class='logolink' >Log Out</a></li>");
					}
					else{ 
						echo ("<li><a id='registerlink' href='".$host."Home/showRegistration' class='logolink'>Register</a></li>
							<li><a id='loginlink' href='".$host."Home/showlogin' class=logolink>Log In</a></li>");
						}?>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="messageModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="deactivateModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 style="color:red;">Confirm</h3>
				</div>
				<div class="modal-body">
					Do you really want to do this?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
	</script>