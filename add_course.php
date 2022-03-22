<?php
session_start();
if(!isset($_SESSION['name'])){
    header("location:login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/text-styles.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="https://cdn.tiny.cloud/1/cw9obsltwt9zq1lei6jegq32cib1nze8m6947x7hwvto6n73/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Document</title>
</head>
<body>
    <?php include'navbar.php' ?>
    <div class="banner"></div>
  <div class="about">
    <div class="content">
		<h1 style="margin-bottom:30px">Add Course</h1>
    <div class="main_container_c">
        <!-- <h1 id="text_style_1">Add New Course</h1> -->
        <div class="form_style_1">
            <form action="add_c.php" method="post">
                <label for="course_name">Course Name</label> 
                <input type="text" name="course_name" id="course_name" placeholder="Enter Your Course Name"> <br><br>
                <label for="start_date">Starting Date</label>
                <input type="date" name="start_date" id="start_date"><br><br>
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date"><br><br>
                <label for="course_desc">Course Description</label><br><br>
                <textarea name="course_desc"></textarea>
                <input type="submit" name="submit" id="login_btn_2" value="Submit">
            </form>
        </div>
    </div>
</div>
</div>
</div>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('course_desc');
    </script>
</body>
</html>