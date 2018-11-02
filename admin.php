<html>
<head>
<meta charset="utf-8">
	<script src="javascript.js"></script>
<link rel="stylesheet" type="text/css" href="admin-form.css" id="login-css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"/>
<script src="bootstrap4/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Control Panel</title>
	
	<style>
		body{
			margin: 0;
			padding: 0;
			background-image: url(http://asz-test.epizy.com//pics/bg-img.png);
			font-family: sans-serif;
			background-size: 100% auto;
			background-color: #3A0BD8;
			}
	</style>
	
</head>
<body>
	
	
<!--	login panel start-->
	<div class="login-box">
		<img src="http://asz-test.epizy.com//pics/users.jpg" alt="logo" class="avatar">
        <h1>Login Here</h1>
		<form action="">
			<p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>
		</form>
	</div>
<!--	Login panel end-->
     
<!--	body elements start-->
	
	<div id="mySidenav" style="display: none">
		<a href="#" id="side-menu-item-1">Add Card</a>
		<a href="#" id="side-menu-item-2">Edit Card</a>
		<a href="#" id="side-menu-item-3">Delet Card</a>
		<a href="#" id="side-menu-item-4">Hide Card</a>
		<a href="#" id="side-menu-item-5">Logout</a>
	</div>
	
<!--	body element end-->
</body>
</html>