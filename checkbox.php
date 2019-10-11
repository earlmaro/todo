
<?php 
include "db.php";



$status = $_GET['status'];

// echo $id;
if($status == 1){

    // Check record exists
	$checkRecord = mysqli_query($con,"SELECT * FROM todos WHERE STATUS ='$status'");
    $totalrows = mysqli_num_rows($checkRecord);
    echo "i see you";

	if($totalrows == 1){
		// Delete record
		$query = "DELETE FROM todos WHERE id= '$id'";
		mysqli_query($con,$query);
		echo 1;
		exit;
	}
}

echo 0;
exit;

// swal({
              //   title: "Good job!",
              //   text: "You have added a todo!",
              //   icon: "success",
              //   button: "Aww yiss!",
              // });
              // var table = $('#table1').DataTable();

              //     table.ajax.reload( function ( json ) {
              //         $('#button').val( json.lastInput );
              //     } );
