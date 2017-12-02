<!DOCTYPE html>

<html>
<head>
	<title>User Profile</title>
	<?php include('bundle.php');?>
</head>
<body>
	<div class="container topmargin">
		<?php echo heading('User profile page is in under construction.', 1);
		echo '<pre>';
		print_r($user_info);
		print_r($current_user_info);
		echo $user_info[0]['firstname']; ?>
	</div>
	<?php include('logosmall.php');?>
	<?php include('_footer.php');?>
</body>
</html>