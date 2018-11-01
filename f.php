<?php

require('connect.php');
$t1Name = "download-list";
$table1Col2 = "SoftName";
$table1Col3 = "SoftLink";
$table1Col4 = "SoftImgLink";
$table1Col5 = "Category";
$t2Name = "categories";
$table2Col2 = "CatName";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br/>";

//insert data function
function insertData($softName,$softLink,$SoftImgLink,$softCategory) {
	
  	global $conn;
  	global $t1Name;
  	global $table1Col2;
  	global $table1Col3;
  	global $table1Col4;
  	global $table1Col5;
  	global $db;
  
    $sql = "INSERT INTO `$db`.`$t1Name` (`ID`, `$table1Col2`, `$table1Col3`, `$table1Col4`, `$table1Col5`) VALUES (NULL, '$softName', '$softLink', '$SoftImgLink', '$softCategory')";

	if ($conn->query($sql) === TRUE) {
    	echo "Data Added Successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

//insertData("Mozila","mozi.com","mozi.img.com","Browser");

//delete data function
function deleteData($delSoftName){
	
  	global $conn;
  	global $t1Name;
  	global $table1Col2;
  	global $db;
	
	$sql_del = "DELETE FROM '$db'.'$t1Name' WHERE '$table1Col2' = '$delSoftName'";

	if ($conn->query($sql_del) === TRUE) {
		echo "Data Deleted Successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
}

function selectData(){
	
	global $conn;
  	global $t2Name;
  	global $db;
	global $table2Col2;
	
	$sql_select_cat = "SELECT * FROM `$t2Name` WHERE 1";
	$result = $conn->query($sql_select_cat);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			selectDataHelper($row["$table2Col2"]);
		}
	} else {
		echo "No Data Found!";
	}
	$conn->close();
}

//selectData();

function selectDataHelper($mCategories){
  
	global $conn;
  	global $t1Name;
  	global $db;
	global $table1Col2;
	global $table1Col3;
	global $table1Col4;
	global $table1Col5;
	
	$sql_select_cat = "SELECT * FROM `$t1Name` WHERE `$table1Col5` = '$mCategories'";
  
	$result = $conn->query($sql_select_cat);

	if ($result->num_rows > 0) {
      
      //echo "total num of rows $result->num_rows";
      
      for($i = 0; $i < $result->num_rows/2; $i++){
		  
		  	$row = $result->fetch_assoc();
			$s_Name_1 = $row["$table1Col2"];
			$s_link_1 = $row["$table1Col3"];
			$s_img_link_1 = $row["$table1Col4"];
		  
			echo ('
			<div class="card-deck">
				  
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_1.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title">John Doe</h4>
						  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						  <a href="#" class="btn btn-primary">See Profile</a>
					</div>
  				</div>
				
				<div class="card">
					<img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title">John Doe</h4>
						  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						  <a href="#" class="btn btn-primary">See Profile</a>
					</div>
  				</div>
			
			</div>
			');
		  
		
		  	$row = $result->fetch_assoc();
			echo $row["$table1Col2"];
			echo("<br>");
			echo $row["$table1Col3"];
			echo("<br>");
			echo $row["$table1Col4"];
			echo("<br>");
		}

		// output data of each row
		//while($row = $result->fetch_assoc()) {
          
			//echo $row["$table1Col2"];
			//echo("<br>");
			//echo $row["$table1Col3"];
			//echo("<br>");
			//echo $row["$table1Col4"];
			//echo("<br>");
		//}
	} else {
		echo "<br>No Data Found<br>";
	}
}

//SELECT * FROM `download-list` WHERE `Category`  = 'Browser'

?>