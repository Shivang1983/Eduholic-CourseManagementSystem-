<?php
include 'db_connect.php';
$fetch = "SELECT * FROM `course_list`";
$data_fetched = mysqli_query($connection, $fetch);

$result = mysqli_num_rows($data_fetched);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
	<?php include'navbar.php'?>
	<div class="banner"></div>
  <div class="about">
    <div class="content">
		<h1>Course List</h1>
	<div class="main_container_3">
	<table>
	<thead>
	<tr>
		<th>Course Name</th>
		<th>Start Date</th>
		<th>Due Date</th>
	</tr>
	</thead>
	<tbody>
		<?php
		while($fetch_data = mysqli_fetch_array($data_fetched)){
			
			?>
		
	<tr>
		<td><?php echo $fetch_data['course_name'] ?></td>
		<td><?php echo $fetch_data['course_startdate'] ?></td>
		<td><?php echo $fetch_data['course_duedate'] ?></td>
	</tr>
	<?php
		}
		?>
	</tbody>
</table>
	</div>
  </div>
	

</body>
</html>