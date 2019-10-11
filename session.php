<?php

    
    include 'db.php';
    session_start();

    $username = $_SESSION['signed_in'];

    $query = "SELECT * FROM users where USERNAME = '$username' ";

    $sql = mysqli_query($con, $query);

    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

    $username = $row ['USERNAME'];

    $email = $row ['EMAIL'];

    // $password = $row ['password'];

    if (!isset($_SESSION['signed_in']))
    {
        header ("location:index.php");
    }
    




?>









      