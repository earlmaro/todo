<?php

require 'session.php';

if (isset($_POST['id'])) {
   
    $id = $_POST['id'];

    $sql = "UPDATE todos SET STATUS = NOT STATUS WHERE ID = '$id'";
   
    mysqli_query($con , $sql);
    if($sql)  {
        $response = array(
            'status' => 'success'
        );
    }else{
        $response = array(
            'status' => 'error'
        );   
    }
} 



?>


<!-- To display table records -->



