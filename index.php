<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Track IT - RE</title>
<?php include('./assests/css.php'); ?>
<?php include('./assests/js.php'); ?>
<?php include('./Lib/location.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	<?php 
		
		$location = get_region_code();
		//$location = "LA";
		$location_url = "./cities/".$location.".jpg";
		
		$search  = $_REQUEST['search'];
		//$search_user = $search.$location;
		
		
		
	?>
	body 
	{ 
		<?php
			
			print "background: url('$location_url') no-repeat center center fixed;";
		?>
		 -webkit-background-size: cover;
		 -moz-background-size: cover;
		 -o-background-size: cover;
		 background-size: cover;
		 overflow: scroll;
	}
	
</style>
</head>

<body>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12" id="bran_name">
				
					<?php include('./Lib/nav_bar.php'); ?>
					
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
					<div class="container-fluid" id="tweets">
						<?php 
							
							
								include('./Lib/get_tweets.php');
								if($search=="")
								{
									getTweetsByLocation($location);
								}
								else
								{
									useSearchDisp($search,$location);
								}
						?>
					</div>
			</div>
		</div>
	</div>
	
</body>
</html>
