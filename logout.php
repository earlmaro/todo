<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    session_start();

    if(!isset($_SESSION['signed_in'])){
        echo "YOU NEED TO BE SIGNED IN.... <a href='index.php'>Back to Home</a>";
    }
    elseif(session_destroy()){
        header('location:index.php');
    }

    ?>
</body>
</html>