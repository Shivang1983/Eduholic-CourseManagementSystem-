<?php
    session_start();
?>

<?php

include 'db_connect.php';

if(isset($_POST['login'])){


    $useremail = $_POST['email_id'];
    $userpass = $_POST['user_pass'];


    $verify_email = "SELECT * FROM users WHERE email='$useremail' and statuss='active'";
    $v_email = mysqli_query($connection, $verify_email);

    $emailcount = mysqli_num_rows($v_email);

    if($emailcount){
       
            $email_ver = mysqli_fetch_assoc($v_email);
            $storepass = $email_ver['mainpassword'];

            $_SESSION['name'] = $email_ver['name'];

            $pass_decode = password_verify($userpass, $storepass);
            
            if($pass_decode){
                header("Location: add_course.php");
            } else{
                echo "Failed login";
            }
      
    } else{
       echo "Invalid email";
    }
}

?>