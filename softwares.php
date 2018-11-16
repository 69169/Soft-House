<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="c-style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>Softwares - Download</title>
	
	<style>
		html{
			scroll-behavior: smooth;
		}
	</style>
</head>

<body>
	
	<div id="nav_bar" class="sticky-top"></div>

	 <div class="container-fluid bg-danger">
		 <div class="row" style="height: auto;">
			 <div class="col-sm-9 bg-info" style="padding: 10px 60px;">
				  <?php require('f.php'); selectData(); ?>
			 </div>
			 <div class="col-sm-3">
				 <!--		  start categories menu-->
				 <table class="table" style="margin-top: 50px">
					 <thead>
						 <th>Softwares Categories</th>
					 </thead>
				  <tbody>
<!--				dynamically list all categories-->
					<?php echoCategories(); ?>
				  </tbody>
				</table>

				<!--		  end categories menu--> 
			 </div>
		 </div>
	</div>
	
	<div id="about_us"></div>
	
	<div id="myFooter"></div>
	
	<script>
		$(document).ready(function(){
			$('#nav_bar').load('navbar.html');
            $('#windows').addClass('active');
			$('#about_us').load('about.html');
			$('#myFooter').load('footer.html');
		});
	</script>
	
</body>

</html>