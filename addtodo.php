<?php

// require 'db.php';
require 'session.php';

if (isset($_POST['todo'])) {
   
    $todo = $_POST['todo'];

    $sql = "INSERT INTO todos (TITLE, STATUS, USERNAME) VALUES ('$todo', false, '$username')";
   
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



