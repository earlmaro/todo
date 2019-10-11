<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$db = "ytgdb";


$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $db);

if (!$con) 
{
    die ("Error in connection" .mysqli_connect_error());
} else 
{
 echo "";
};





if (!$con) { die('Connection Failed: ' . mysqli_error($con)); { mysqli_select_db($con, $db);
}
}




