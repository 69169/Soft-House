<?php

require('connect.php');
$t1Name = "downloadList";
$table1Col2 = "softName";
$table1Col3 = "softLink";
$table1Col4 = "SoftImgLink";
$table1Col5 = "softCategory";
$t2Name = "categories";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br/>";

//insert data function
function insertData($softName,$softLink,$SoftImgLink,$softCategory) {
    $sql_insert = "INSERT INTO `$t1Name` (`$table1Col2`, `$table1Col3`, `$table1Col4`, `$table1Col5`) VALUES ('$softName', '$softLink', '$SoftImgLink', '$softCategory')";

	if ($conn->query($sql_insert) === TRUE) {
		echo "Inserted Successfully";
	} else {
		echo "Error: " . $sql_insert . "<br>" . $conn->error;
	}

	$conn->close();
}

//delete data function
function deleteData($delSoftName){
	$sql_del = "DELETE FROM $t1Name WHERE $table1Col2 = $delSoftName";

	if ($conn->query($sql_del) === TRUE) {
		echo "Data Deleted Successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
}

function selectData(){
	$sql_select = "SELECT id, firstname, lastname FROM MyGuests";
	$result = $conn->query($sql_select);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
}

?>