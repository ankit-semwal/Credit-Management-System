<?php include 'dbcon.php'?>
<?php

$user = "select * from users ";

$result=mysqli_query($con,$user);
$row_count=mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html>
<head>
   <title>
		ViewUser
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/users1.css" >
	<style>
	body{
		background-color: #d0f3e7; <!--#d0f3e7-->

	}
	</style>
    </head>

	<body>
	<ul>
	<div class="logo">
		<a href="index.php"><img src="images/img4.jpg" alt="logo"></a>
	</div>
	<li><a class="active" href="transferhistory.php">Transfer History</a></li>
	<li><a href="index.php">Home</a></li>
	</ul>
	<p>RazorCredit</p>
	<div class="login-wrap">
	<div class="login-form">
	<br>
        <h1>User Details</h1>
	<?php
		echo "<table id=\"my_table3\" border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Credit</th>
		<th>Action</th>
		</tr>";

		while($row = mysqli_fetch_assoc($result))
		{
		echo "<tr>";
		echo "<td>" . $row['Id'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['Email'] . "</td>";
		echo "<td>" . $row['Credit'] . "</td>";
		//echo "<td><input class='button1' type='submit' value='View'/></td>";
		echo "<td><a class='text-white' href='viewuser.php?Id= ".$row['Id']." '><button class='button1'>View</button></a></td>";
		echo "</tr>";
		}
		echo "</table>";
	?>
		<br><br>

	</div>
	</div>
	<br><br>
	</body>
</html>
