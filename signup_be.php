<?php
session_start();
?>
<?php

include 'db_connect.php';



    $user_name = mysqli_real_escape_string($connection, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($connection, $_POST['user_email']);
    $user_phone = mysqli_real_escape_string($connection, $_POST['user_phone']);
    $user_university = mysqli_real_escape_string($connection, $_POST['user_university']);
    $user_course = mysqli_real_escape_string($connection, $_POST['user_course']);
    $user_pass = mysqli_real_escape_string($connection, $_POST['user_pass']);
    $user_cnfpass = mysqli_real_escape_string($connection, $_POST['user_cnfpass']);

    $encrypted_pass = password_hash($user_pass, PASSWORD_BCRYPT);
    $encrypted_cnfpass = password_hash($user_cnfpass, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $verify_email = "SELECT * FROM users WHERE email='$user_email'";
    $v_email = mysqli_query($connection, $verify_email);

    $emailcount = mysqli_num_rows($v_email);

    if($emailcount>0){
       
            echo "Email Already Exists";
      
    } else{
        if ($user_pass === $user_cnfpass){
            $insert_query = "INSERT INTO `users`(`name`, `email`, `mobile`, `university`, `course`, `mainpassword`, `cpassword`, `token`, `statuss`) VALUES ('$user_name','$user_email','$user_phone','$user_university','$user_course','$encrypted_pass','$encrypted_cnfpass','$token','inactive')";
         
           
            if(mysqli_query($connection, $insert_query)){

        
                $subject = "Email Activation";
                $body = "Hi, $user_name Activate your account 
                http://localhost/dex/back_end/tuts/email_a.php?token=$token";
                $headers = "From: eduholic";
                
                if (mail($user_email, $subject, $body, $headers)) {
                    $_SESSION['msg'] = "check your mail to activate $user_email";
                    header("Location:login.php");
                    echo "Email successfully sent to $to_email...";
                } else {
                    echo "Email sending failed...";
                }


                echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
      
              
            } else{
                echo "ERROR: Hush! Sorry $insert_query. " ;
                mysqli_error($connection);
            }
              
            
        }else{
           echo "Password Not Matched";
        }
    }

// Close connection
mysqli_close($connection);

?>