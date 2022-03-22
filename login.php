<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms.css">
    <title>Document</title>
</head>
<body>
    <div class="main_container_a">
        <!-- <div class="logo">
            <img src="img/ed.png" alt="">
        </div> -->
        <div class="form_container_a">
            <h1 class="text_style_a">Log In</h1>
            <form action="login_be.php" method="post">
                <input type="email" name="email_id" id="email_id" placeholder="Enter Your Email Address"><br><br>
                <input type="password" name="user_pass" id="user_pass" placeholder="Enter Your Password"><br><br>
                <input type="submit" name="login" value="Login" id="login_btn">
            </form>
           
            <div class="form_footer_links_a">
                <p><a href="send_reset_link.html">Forgot Password?</a></p>
                <p><a href="new_account.html">Create an Account</a></p>
            </div>
          
        </div>
    </div>
    
</body>
</html>