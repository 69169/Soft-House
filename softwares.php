<html>
<head>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"/>
	<script src="bootstrap4/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" type="text/css" href="c-style.css"/>

	
	
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
<title>Softwares - Download</title>
</head>

<body>
	
	<nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top">
	  <a class="navbar-brand" href="index.html">
		  <img src="New folder image/ASZ_Logo.jpg" width="30px" height="30px" alt="ASZ LOGO"/>
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
		  <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
			<li class="nav-item active"> <a class="nav-link" href="softwares.html#window">Windows - Softwares</a></li>
          <li class="nav-item"> <a class="nav-link" href="softwares.html#android">Top Android Apps</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="#">Contact Us</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="#about">About Us</a> </li>
		</ul>
	  </div>
	</nav>
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
			$('.footer-about').load('about.html');
			$('.myFooter').load('footer.html');
		});
	</script>
	
</body>

</html>