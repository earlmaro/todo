<?php 
include "db.php";

$id = $_GET['id'];

// echo $id;
if($id > 0){

    // Check record exists
	$checkRecord = mysqli_query($con,"SELECT * FROM todos WHERE id='$id'");
	$totalrows = mysqli_num_rows($checkRecord);

	if($totalrows > 0){
		// Delete record
		$query = "DELETE FROM todos WHERE id= '$id'";
		mysqli_query($con,$query);
		echo 1;
		exit;
	}
}

echo 0;
exit;


?>