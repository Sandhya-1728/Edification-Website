<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];


include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}


?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<h1>Welcome <?php echo $fname." ".$lname; ?></h1>
		</div>
		<div class="dropdown navbar-right" id="right">
  			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  			<span class="caret"></span></button>
  			<ul class="dropdown-menu">
  			<li><a href="account.php">Account</a></li>
    		<li><a href="logout.php">Logout</a></li>
  			</ul>
		</div>
	</div>
</nav>