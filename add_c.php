<?php

include 'db_connect.php';

if(isset($_POST['submit'])){

$coursename = mysqli_real_escape_string($connection, $_POST['course_name']);
$startdate = mysqli_real_escape_string($connection, $_POST['start_date']);
$duedate = mysqli_real_escape_string($connection, $_POST['due_date']);
$coursedesc = mysqli_real_escape_string($connection, $_POST['course_desc']);

$insert_data = "INSERT INTO `course_list`(`course_name`, `course_description`, `course_startdate`, `course_duedate`) VALUES ('$coursename','$coursedesc','$startdate','$duedate')";

if(mysqli_query($connection, $insert_data)){
    echo "Data Inserted Successfully";
}else{
    echo "Data Insertion Failed";
}
}
// Close connection
mysqli_close($connection)
?>
