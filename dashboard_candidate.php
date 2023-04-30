<?php


session_start();


if(empty($_SESSION['id_user'])) {
  header("Location: dashboard_candidate.php");
  exit();
}

require_once("db.php");
?>
<!doctype html>
<html lang="en">

<head>
	<title>Candidate Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="dashboard.css">
	<link rel="stylesheet" href="assets/css/main.css">
	
	<link rel="stylesheet" href="assets/css/demo.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<div id="wrapper">
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard_candidate.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="page-profile.php" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
                        <li><a href="edit-profile.php" class=""><i class="lnr lnr-pencil"></i>Edit Profile</span></a></li>
                        <li><a href="applied-jobs.php" class=""><i class="lnr lnr-calendar-full"></i></span>Applied Jobs</span></a></li>
						<li><a href="jobs.php" class=""><i class="lnr lnr-briefcase"></i> <span>Available Jobs</span></a></li>
                        
                        <li><a href="logout.php"><i class="lnr lnr-arrow-right-circle"></i> Logout</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="main">
			<div class="card">
				<img src="https://akm-img-a-in.tosshub.com/businesstoday/images/story/202301/workplace_1-sixteen_nine.jpg?size=948:533" alt="picture" width=500px>
				<h2 ><strong>"Welcome Back, Check your Mails and new messages</strong></h2>
				<h3>Update your Profile and get better results</h3>
				
			</div> 
			
		
		</div>
        
		</div>
	</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2023 <a href="#" target="_blank">Job-Portal</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	
</body>

</html>
