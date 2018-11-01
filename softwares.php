<!doctype html>
<html>
<head>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"/>
	<script src="bootstrap4/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" type="text/css" href="c-style.css"/>
<link rel="stylesheet" type="text/css" href="software-social.css"/>
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
			 <div class="col-sm-9 bg-info">
				  <?php require('f.php'); selectData(); ?>
			 </div>
			 <div class="col-sm-3 bg-warning">
				 
			 </div>
		 </div>
	</div>
	<div class="row bg-light bottom-row" id="about">
		<div class="col-sm-3">
			<div style="text-align: center;">
				<h3 style="color: cadetblue">About Us</h3>
				<p>ASZ Info</p>
				<p>Help &amp; Support</p>
				<p>Company News</p>
    		</div>
		</div>
		<div class="col-sm-3">
			<div style="text-align: center;">
				<h3 style="color: cadetblue">Developers</h3>
				<p>ASZ Software Coporation</p>
				<p>Upload &amp;Manage Your Software</p>
				<p>Advertisement Opertunities</p>
    		</div>
		</div>
		<div class="col-sm-3">
			<div style="text-align: center;">
				<h3 style="color: cadetblue">Legal</h3>
				<p>Software Policy</p>
				<p>Legal Information</p>
				<p>Term &amp; Conditons </p>
    		</div>
		</div>
		<div class="col-sm-3">
			<div style="text-align: center;">
				<h3 style="color: cadetblue">Users</h3>
				<div class="icon-bar">
				  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
				  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
				  <a href="#" class="google"><i class="fa fa-google"></i></a> 
				  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
				  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
                </div>
				<p>ASZ Solution</p>
				<p>Discount Codes</p>
				<p>ASZ Businuss</p>
    		</div>
		</div>
	</div>
	
	<div style="width: 100%; height: 100px; background-color: cornflowerblue; vertical-align: middle;" align="center">
		<footer style="line-height: 100px; text-align: center;">
			All Rights Resived by &copy;ASZ Coporation
		</footer>	
	</div>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>

</html>