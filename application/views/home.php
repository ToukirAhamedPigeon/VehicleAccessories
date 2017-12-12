<!DOCTYPE html>

<html>
<head>
	<title>Home</title>
	<?php include('bundle.php');?>
</head>
<body>
	<div class="container topmargin">
		<h1 style="margin-left: 40%;">Organization Showcase</h1>
		<div class="container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; margin: 0 auto;">
				
				<?php 
				$countImage = count($orglist);
				?>
				
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
							<img src=" <?= base_url(). $orglist[0]['filepath'] ?>" alt="There should have been an image" style="width:100%;">
							<div class="carousel-caption">
								<h3><?= $orglist[0]['name'] ?> </h3>
								
							</div>
						</div>
						<?php 
						
						for($i = 1 ; $i < $countImage; $i++){
							echo '<div class="item">';
							echo '<img src="'.base_url().$orglist[$i]['filepath'] .'" alt="There should have been an image" style="width:100%;height:100%">';
							
							echo '	<div class="carousel-caption">';
							echo '      <h3>'. $orglist[$i]['name'] .'</h3>';

							echo '    </div>';
							echo '</div>';
						}
						?>




					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">

						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">

						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<h1 style="margin-left: 40%;">Product Showcase</h1>
			<div class="container">
				<div id="myCarousel2" class="carousel slide" data-ride="carousel" style="width: 100%; margin: 0 auto;">
					<!-- Indicators -->
					<?php 
					$countImage = count($productlist);
					?>
						<ol class="carousel-indicators">
							<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
							<?php 

							for($i = 1 ; $i < $countImage; $i++){
								echo '<li data-target="#myCarousel2" data-slide-to="'.$i.'"></li>';
							}
							?>

						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">

							<div class="item active">
								<img src=" <?= base_url(). $productlist[0]['filepath'] ?>" alt="There should have been an image" style="width:100%;">
								<div class="carousel-caption">
									<h3><?= $productlist[0]['name'] ?></h3>
									
								</div>
							</div>
							<?php 

							for($i = 1 ; $i < $countImage; $i++){
								echo '<div class="item">';
								echo '<img src="'.base_url().$productlist[$i]['filepath'] .'" alt="There should have been an image" style="width:100%;height:100%">';
								
								echo '	<div class="carousel-caption">';
								echo '      <h3>'. $productlist[$i]['name'] .'</h3>';

								echo '    </div>';
								echo '</div>';
							}
							?>




						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel2" data-slide="prev">

							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel2" data-slide="next">

							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

		<?php include('logosmall.php');?>
		<?php include('_footer.php');?>
	</body>
	</html>