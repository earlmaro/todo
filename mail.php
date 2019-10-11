<?php

require 'session.php';

if (isset($_POST['id'])) {
   
    $id = $_POST['id'];

    $getmail = "SELECT email FROM users,todos WHERE users.username = todos.username and todos.STATUS = 1 ";

    if(isset($_POST['id'])){
        while($row = mysqli_fetch_array($getmail)){
            var_dump($_POST['email-' . $row['id']]);
            if($_POST['email-' . $row['id']]){
                //Send
            }else{
                echo "error"
            }
        }
    }








   
//     mysqli_query($con , $getmail);
//     if($getmail)  {
//         $response = array(
//             'status' => 'success'
//         );
//     }else{
//         $response = array(
//             'status' => 'error'
//         );   
//     }
// } 

                        // forEach ($_POST['id'])
                        // {
                        //     if(isset($id)){
                        //         $message = "Yes";
                        //         mail($getmail, $subject, $message);
                        //     } else{
                        //         // $message = "No";
                        //         // mail($to, $subject, $message);
                        //     }
                        // };
                       
                        // if($_POST['id']){
                        //     foreach($email as $mail){
                        //     mail($mail, $subject, $msg);
                        //     }
                        // }



?>

                    <?php
                        // $result = mysqli_query($db, 'SELECT id, student_email FROM users');
                       
                    ?>



