<?php
require('f.php');
// Start the session
session_start();
?>

<html>
<head>
<!--	linking scripts and other files-->
	
	<link rel="stylesheet" type="text/css" href="admin-page.css"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	
<!--	bootstrap link start-->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<script src="javascript.js"></script>
	
<!--	bootstrap link end-->
	
<!--	end linking scripts-->
	
	<title>Control Panel</title>
	
	<style>
		body{
			margin: 0;
			padding: 0;
			background: #43cea2;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #185a9d, #43cea2);
			background: linear-gradient(to right, #185a9d, #43cea2);
/*			background: linear-gradient(#0D4353, #03282B);*/
			font-family: sans-serif;
			}
		
		#mHeading{
			text-align: center;
			font-size: 4vw;
			color: white;
			margin-left: 50px;
			margin-right: 50px;
			margin-top: 30px;
		}
	</style>
	
</head>
<body>
	
	<h1 id="mHeading"></h1>
	
<!--	login panel start-->
	<div class="login-box">
		<img src="http://asz-test.epizy.com//pics/users.jpg" alt="logo" class="avatar">
        <h1>Login Here</h1>
		<form action="" method="POST" id="login-form">
			<p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>
			<p style="padding-bottom: 10px;" id="form-output"></p>
		</form>
	</div>
<!--	Login panel end-->
	
     
<!--	body elements start-->
	
	<div id="mySidenav" style="display: none">
		<a href="#" id="side-menu-item-1">Card +</a>
		<a href="#" id="side-menu-item-2">Edit Card !</a>
		<a href="#" id="side-menu-item-3">Del Card !</a>
		<a href="#" id="side-menu-item-4">Category +</a>
		<a href="?logout=true" id="side-menu-item-5">Logout</a>
	</div>
	
<!--	add card start-->
	
	<style>
		.text-white{
			font-size: 2vw;
		}
	</style>
	
	<div style="width: 80%; max-width: 500px; margin-top: 5%; display: none;" class="container" id="addCard">
		
		<form method="post" class="add-card-input">
			<div class="form-group">
				<label for="catSelecter" class="text-white">Select Category</label>
				<select class="form-control" name="cCat" required>
					<?php echo selectOption(); ?>
				</select>
			</div>
			
			<div class="form-group">
				<label for="soft-name" class="text-white">Software Name</label>
				<input class="form-control add-card-input" id="soft-name" type="text" placeholder="Enter Software Name" name="cName" required>
			</div>
			<div class="form-group">
				<label for="c-img-link" class="text-white">Card Image Link</label>
				<input class="form-control add-card-input" id="c-img-link" type="url" placeholder="Enter Image URL" name="cImgUrl" required>
			</div>
			<div class="form-group">
				<label for="download-link" class="text-white">Download Link</label>
				<input class="form-control add-card-input" id="download-link" type="url" placeholder="Enter Download Link" name="cDownloadLink" required>
			</div>
			<input type="submit" name="submit" value="Add Card" class="btn btn-danger btn-lg">
		</form>
		
	</div>

<!--	add card end-->
	
<!--	delete card start-->
	
	<div style="width: 80%; max-width: 500px; margin-top: 5%; display: none;" class="container" id="delCard">
		
		<form method="post">
			<div class="form-group">
				<label for="selectCat" class="text-white">Select Category</label>
				<select class="form-control" name="cDelCat" id="selectCat" required>
					<?php echo selectOption(); ?>
				</select>
			</div>
			
			<div class="form-group">
				<label for="selectName" class="text-white">Select Name</label>
				<select class="form-control" name="cDelName" id="selectName" required>
<!--						option will be created from jquery with php-->
				</select>
			</div>
			
			<input type="submit" name="submit" value="Delete Card" class="btn btn-danger btn-lg">
		</form>
		
	</div>
	
<!--	delete card end-->
	
	
<!--	edit card start-->
	
	<style>
		.res-t-size-heading{
			font-size: 20px;
			color: white;
		}
	</style>
	
	<div style="width: 80%; display: none;" class="container" id="editCard">
		<div class="row" style="height: auto; padding-top: 20px; padding-bottom: 20px;">
			<div class="col-sm-6 bg-danger">
				
				<div style="margin-left: 20px; margin-right: 20px;">
					<label for="selectEditCat" class="res-t-size-heading">Select Category</label>
					<select class="form-control" id="selectEditCat" required>
						<?php echo selectOption(); ?>
					</select>
				</div>
			
				<div style="margin-left: 20px; margin-right: 20px;">
					<label for="selectEditName" class="res-t-size-heading">Select Name</label>
					<select class="form-control" id="selectEditName" required>
<!--						option will be created from jquery with php-->
					</select>
				</div>
				
			</div>
			
			<div class="col-sm-6 bg-warning">
				<div style="margin-left: 20px; margin-right: 20px;">
					<div>
						<label for="selectNewEditCat" class="res-t-size-heading">Select New Category:</label>
						<select class="form-control" id="selectNewEditCat" required>
							<?php echo selectOption(); ?>
						</select>
					</div>
					<div>
						<label for="selectNewSoftName" class="res-t-size-heading">Software New Name:</label>
						<input class="form-control" id="selectNewSoftName" type="text" placeholder="Enter Software Name">
					</div>
					<div>
						<label for="selectNewSoftImgLink" class="res-t-size-heading">New Card Image Link:</label>
						<input class="form-control" id="selectNewSoftImgLink" type="text" placeholder="Enter Image URL">
					</div>
					<div>
						<label for="selectNewSoftDownLink" class="res-t-size-heading">New Download Link:</label>
						<input class="form-control" id="selectNewSoftDownLink" type="text" placeholder="Enter Download Link">
					</div>
				</div>
			</div>
			
		</div>
		<div class="row" style="height: auto; padding-top: 20px; padding-bottom: 20px;">
			<div class="col-sm-6 bg-warning">
				
			</div>
			<div class="col-sm-6 bg-danger">
				
			</div>
		</div>
		<button class="btn btn-block btn-success" style="margin-top: 10px;">Update Card</button>
	</div>
	
<!--	edit card end-->
	
	<div id="tempForEdit" style="display: none"></div>
	
	<script>
		
//		start menu button clicks
		
		$('#side-menu-item-1').click(function(){
			hideAllBodyContent();
			showAddCard();
		});

		function showAddCard(){
			$('#addCard').css("display", "");
			$('#mHeading').text("Add Softwares").css({"border-bottom" : "double white", "border-bottom-width" : "thick"});
		}
		
		$('#side-menu-item-2').click(function(){
			hideAllBodyContent();
			showEditCard();
		});

		function showEditCard(){
			$('#editCard').css("display", "");
			$('#mHeading').text("Edit Softwares").css({"border-bottom" : "double white", "border-bottom-width" : "thick"});
			makeEditList();
		}
		
		$('#side-menu-item-3').click(function(){
			hideAllBodyContent();
			showDelCard();
		});

		function showDelCard(){
			$('#delCard').css("display", "");
			$('#mHeading').text("Delete Softwares").css({"border-bottom" : "double white", "border-bottom-width" : "thick"});
			makeList();
		}
		
//		end menu button clicks
		
		$('#selectCat').on('change', function() {
			makeList();
		});
		
		function makeList(){
			var inputValue = $('#selectCat').val();
           //Ajax for calling php function
			$.post('f.php', { catValForList: inputValue }, function(listOpt){
                //do after submission operation in DOM
				$('#selectName').html(listOpt);
            });
		}
		
		$('#selectEditCat').on('change', function() {
			makeEditList();
		});
		
		function makeEditList(){
			var inputValue = $('#selectEditCat').val();
           //Ajax for calling php function
			$.post('f.php', { catValForList: inputValue }, function(listOpt){
                //do after submission operation in DOM
				$('#selectEditName').html(listOpt);
            });
		}
		
		$('#selectEditName').on('change', function() {
			editSpinnerSelected();
		});
		
		
		function editSpinnerSelected(){
			var selectedValue = $('#selectEditName').val();
			var selectedCat = $('#selectEditCat').val();
           //Ajax for calling php function
			$.post('f.php', { nameForEdit: selectedValue, catForEdit: selectedCat }, function(output){
                //do after submission operation in DOM
				$('#tempForEdit').html(output);
//						working
//				alert($('#sIdForEdit').text());
            });
		}
		
		function hideAllBodyContent(){
			$('#addCard').css("display", "none");
			$('#delCard').css("display", "none");
			$('#editCard').css("display", "none");
		}
		
//		$(document).ready(function(){
//			
//		});
		
	</script>
	
<!--	body element end-->
</body>
</html>

<?php 

//Login function

if($_SESSION["isLogin"] == true){
	echo('<script> 
			$("#form-output").text("Login Success");
			$(".login-box").css("display", "none");
			$("head").find("link#login-css").remove();
			$("#mySidenav").css("display", "");
			</script>');
}else{
	echo('<script> 
		$(".login-box").css("display", "");
		$("#mySidenav").css("display", "none");
		</script>
		<link rel="stylesheet" type="text/css" href="admin-form.css" id="login-css"/>
		');
}
	
if (isset($_POST['username']) and isset($_POST['password'])) {
	
	$user =  $_POST["username"];
	$password =  $_POST["password"];

	if($user == "ASZSITE" and $password == "asz69169"){
			
		echo('<script> 
		$("#form-output").text("Login Success");
		$(".login-box").css("display", "none");
		$("head").find("link#login-css").remove();
		$("#mySidenav").css("display", "");
		</script>');
			
		$_SESSION["isLogin"] = true;


	}else{
		echo('<script> $("#form-output").text("Invalid Credential"); </script>');
		$_SESSION["isLogin"] = false;
	}
}

//Logout function
if (isset($_GET['logout'])){
	$_SESSION["isLogin"] = false;
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy();
	
	$location="http://asz-test.epizy.com/admin.php";
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	
	echo('<script> 
		$(".login-box").css("display", "");
		$("#mySidenav").css("display", "none");
		</script>
		<link rel="stylesheet" type="text/css" href="admin-form.css"/>
		');
}

//add data to database
if (isset($_POST['cCat']) and isset($_POST['cName']) and isset($_POST['cImgUrl']) and isset($_POST['cDownloadLink'])) {
	
	$cCat =  $_POST["cCat"];
	$cName =  $_POST["cName"];
	$cImgUrl =  $_POST["cImgUrl"];
	$cDownloadLink =  $_POST["cDownloadLink"];
	
	if (checkDupName("$cName") == true) {
		
		$toast = '<strong>Error!</strong> '.$cName.' is Already Available in Database! Plz Select a Unique Name. <a href="#" onClick="showAddCard();" class="alert-link">Try Again...</a>';
		
		mAlert("alert-warning","$toast");
	}else{
	
		$result = insertData("$cName","$cDownloadLink","$cImgUrl","$cCat");
		
		$toast = '<strong>Success!</strong> '.$cName.' is Added Sucessfullay in '.$cCat.' <a href="#" onClick="showAddCard();" class="alert-link">Add More...</a>';
		
		mAlert("alert-success","$toast");
		
	}
}

//delete card from database
if (isset($_POST['cDelCat']) and isset($_POST['cDelName'])) {
	
	$cDelName =  $_POST["cDelName"];
	$result = deleteData("$cDelName");
		
	if($result == "Data Deleted Successfully"){
		$toast = '<strong>Success!</strong> '.$cDelName.' is Deleted Sucessfullay. <a href="#" onClick="showDelCard();" class="alert-link">Delete More...</a>';
		
		mAlert("alert-success","$toast");
	}else{
		$toast = '<strong>Error!</strong> Can Not Delete '.$cDelName.' From Database! '.$result.' <a href="#" onClick="showDelCard();" class="alert-link">Try Again...</a>';
		
		mAlert("alert-danger","$toast");
	}
}

function mAlert($alert_type,$msg){
	$code = '
		<div class="alert '.$alert_type.' alert-dismissible fade show" style="position:absolute; 
		bottom: 1%;
		left: 15%; 
		width: 70%;
		z-index: 99;">
		<button type="button" class="close" data-dismiss="alert">X</button>
		'.$msg.'
		</div>
		';

		echo($code);
}


//SELECT * FROM  `download-list` WHERE  `SoftName` =  "Opera"

//DELETE FROM `download-list` WHERE `SoftName` = 'VLC Media Player'

?>