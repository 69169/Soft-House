<?php

require('connect-wamp.php');
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
//echo "Connected successfully<br/>";

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
    	return "Data Added Successfully";
	} else {
    	return "Error: " . $sql . "<br>" . $conn->error;
	}

//	$conn->close();
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
		
		//making heading of category
		echo('<br><h1 style="width: 100%; color: #fff; border-bottom: double #fff; font-size: 45px; border-bottom-width: thick;">'.$mCategories.'</h1>');
      
      	for($i = 0; $i < $result->num_rows/4; $i++){
		  
		  	$row_1 = $result->fetch_assoc();
			$s_Name_1 = $row_1["$table1Col2"];
			$s_link_1 = $row_1["$table1Col3"];
			$s_img_link_1 = $row_1["$table1Col4"];
		  
		  	$row_2 = $result->fetch_assoc();
			$s_Name_2 = $row_2["$table1Col2"];
			$s_link_2 = $row_2["$table1Col3"];
			$s_img_link_2 = $row_2["$table1Col4"];
		  
		  	$row_3 = $result->fetch_assoc();
			$s_Name_3 = $row_3["$table1Col2"];
			$s_link_3 = $row_3["$table1Col3"];
			$s_img_link_3 = $row_3["$table1Col4"];
		  
		  	$row_4 = $result->fetch_assoc();
			$s_Name_4 = $row_4["$table1Col2"];
			$s_link_4 = $row_4["$table1Col3"];
			$s_img_link_4 = $row_4["$table1Col4"];
		  
		  if (empty($s_Name_2)) {
			  
			  echo ('
			  	<br>
				<div class="card-deck">
				  
					<div class="card">
						<img class="card-img-top" src="'.$s_img_link_1.'" alt="Card image" style="width:100%">
						<div class="card-body">
							  <h4 class="card-title">'.$s_Name_1.'</h4>
							  <a href="'.$s_link_1.'" class="btn btn-primary">Download</a>
						</div>
					</div>

					<div class="card" style="visibility:hidden;"></div>

					<div class="card" style="visibility:hidden;"></div>

					<div class="card" style="visibility:hidden;"></div>
			
				</div>
			');
			  
		  }elseif(empty($s_Name_3)){
			  
			  echo ('
			  <br>
			  <div class="card-deck">
				  
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_1.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_1.'</h4>
						  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						  <a href="'.$s_link_1.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_2.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_2.'</h4>
						  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						  <a href="'.$s_link_2.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
				<div class="card" style="visibility:hidden;"></div>
				
				<div class="card" style="visibility:hidden;"></div>
			
			</div>
			');
			  
		  }elseif(empty($s_Name_4)){
			  
			  echo ('
			  <br>
			  <div class="card-deck">
				  
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_1.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_1.'</h4>
						  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						  <a href="'.$s_link_1.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_2.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_2.'</h4>
						  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						  <a href="'.$s_link_2.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_3.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_3.'</h4>
						  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
						  <a href="'.$s_link_3.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
			</div>
			');
			  
		  }else{
			  echo ('
			  <br>
			  <div class="card-deck">
				  
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_1.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_1.'</h4>
						  <p class="card-text">Some example text</p>
						  <a href="'.$s_link_1.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_2.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_2.'</h4>
						  <p class="card-text">Some example text</p>
						  <a href="'.$s_link_2.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_3.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_3.'</h4>
						  <p class="card-text">Some example text</p>
						  <a href="'.$s_link_3.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
				
				<div class="card">
					<img class="card-img-top" src="'.$s_img_link_4.'" alt="Card image" style="width:100%">
					<div class="card-body">
						  <h4 class="card-title" style="white-space: nowrap;">'.$s_Name_4.'</h4>
						  <p class="card-text">Some example text</p>
						  <a href="'.$s_link_4.'" class="btn btn-primary">Download</a>
					</div>
  				</div>
			</div>
			');
		  }
		  
		}

	} else {
		//echo "<br>No Data Found<br>";
	}
}

function selectOption(){
	$str = "";
	global $conn;
  	global $t2Name;
  	global $db;
	global $table2Col2;
	
	$sql_select_cat = "SELECT * FROM `$t2Name` WHERE 1";
	$result = $conn->query($sql_select_cat);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$str .= '<option>'.$row["$table2Col2"].'</option>';
		}
	} else {
		$str = "<option>No Data Found!</option>";
	}
	return $str;
}

function checkDupName($cName){
	global $t1Name;
	global $table1Col2;
	global $conn;
	
	$check_duplicate = 'SELECT * FROM  `'.$t1Name.'` WHERE  `'.$table1Col2.'` =  "'.$cName.'"';
	
	$data = $conn->query($check_duplicate);
	
	if($data->num_rows > 0){
		return true;
	}else{
		return false;
	}
}

?>