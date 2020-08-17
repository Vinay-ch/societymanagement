<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location:login.php');
}

?>

<html>
</!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="homemenustyles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="menu-bar">
	<ul>
		<li class="active"><a href='#'><i class="fa fa-home"></i>HOME</a></li>
		<li><a href='#'><i class="fa fa-inr"></i>Payments</a>
			<div class="sub-menu-1">
				<ul>
					<li><a href='#'>Pay</a></li>
					<li ><a href='#'>Bills</a></li>
					<li><a href='#'>History</a></li>
				</ul>
			</div>
		</li>
		<li><a href='#'><i class="fa fa-clone"></i>Services</a>
		<div class="sub-menu-1">
				<ul>
					<li><a href='#'>Electrical</a></li>
					<li><a href='#'>Painting</a></li>
					<li><a href='#'>Cleaning</a></li>
					<li><a href='#'>Plumbing</a></li>
				</ul>
			</div>
		</li>
		<li><a href='#'><i class="fa fa-building"></i>Complaint</a>
		<div class="sub-menu-1">
				<ul>
					<li><a href='#'>Raise complaint </a></li>
					<li><a href='#'>Progress</a> </li>
					<li><a href='#'>History</a></li>
				</ul>
			</div>
		</li>
		<li><a href='#'><i class="fa fa-phone"></i>Contact</a>
		<div class="sub-menu-1">
				<ul>
					<li><a href='#'>Call </a></li>
					<li><a href='#'>e-mail</a> </li>
				</ul>
				</li>
		<li><a href='#'><i class="fa fa-user"></i>About Us</a>
		<div class="sub-menu-1">
				<ul>
					<li><a href='#'>Mission</a></li>
					<li><a href='#'>Vision</a></li>
					<li><a href='#'>projects</a></li>
				</ul>
			</div>
		</li>
		<li><a href="logout.php">Logout</a></li>
	</div>
</body>
</html>