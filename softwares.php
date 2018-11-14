<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"/>
	<script src="bootstrap4/js/bootstrap.min.js"></script>
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
			 <div class="col-sm-3 bg-warning">
				 
			 </div>
		 </div>
	</div>
	
	<div class="footer-about"></div>
	
	<div class="myFooter"></div>
	
	<script>
		$(document).ready(function(){
			$('#nav_bar').load('navbar.html');
            $('#windows').addClass('active');
			$('.footer-about').load('about.html');
			$('.myFooter').load('footer.html');
		});
	</script>
	
</body>

</html>