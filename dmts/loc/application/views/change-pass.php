<html>
<head>
	<title>Database Management and Transaction System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Bootstrap Core Css  -->
 	<link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<!-- Custom Css -->
 	<link href="../assets/css/dmts-custom-local.css" rel="stylesheet" media="screen">
</head>
<body>
	<div id ="main_container">
		<div id ="header_container">
			<div id ="tesda_logo_container" class ="container ">
				<img id ="tesda_logo"  src="../assets/img/logo2.png">
				<h1>TESDA</h1>
				<small>DATABASE MANAGEMENT AND TRANSACTION SYSTEM</small>
				<div class ="nav navbar-right" >
					<div id ="staff_settings">
						<span class ="glyphicon glyphicon-globe btn btn-success"></span> 
						<a href="change-pass.php">
							<span class ="glyphicon glyphicon-lock btn btn-primary"></span> 
						</a>
						<a href ="../index.php">
							<span class ="glyphicon glyphicon-off btn btn-danger"></span> 
						</a>
					</div>
					<div id ="staff_holder">
						<img id ="user_logo"  src="../assets/img/user.png"> -
						<strong>Welcome </strong>
						 STAFF
					</div>
				 </div>
			</div>
		</div>
		<div id = "staff_content_container">
			<div class ="container">
				<div class ="row">
					<div class ="col-lg-4 col-lg-offset-4" id ="change_pass_container">
						<br><br>
						<div id ="change_pass">
							<h5 id ="change_pass_tag">
								<strong>Password Change</strong>
							</h5> <br>
				          	<form action="" class="form-signin">
					            <p class="text-muted text-center">
					              Enter your new password
					            </p>
					            <input type="password" id ="new_pass" placeholder="New Password" class="input-lg form-control">
					            <input type="password" id = "confirm_pass"placeholder="Confirm New Password" class="input-lg form-control">
					            <button class="btn btn-lg btn-warning btn-block" type="submit">Save</button><br>
					            <a href = "staff.php" style ="text-align:center">
					            	<span class ="glyphicon glyphicon-circle-arrow-left"></span> 
					            	- Back to Dashboard
					            </a>
				         	</form>
				        </div>
					</div>
				</div>
			</div>
		 </div>
	</div>
	<div id="footer">
      	<div class="container">
       		<div class ="row">
       			<div class ="col-md-2">
					<p class="text-muted credit">
		       			<strong>DMTS &copy 2014</strong>
		       		</p>
       			</div>
       			<div class ="col-md-6">
       				<a href ="../index.php">HOME</a> &nbsp;&nbsp; / &nbsp;&nbsp;
       				<a href ="./about.php">ABOUT</a> &nbsp;&nbsp; / &nbsp;&nbsp;
       				<a href ="./contact.php">CONTACT</a> &nbsp;&nbsp; / &nbsp;&nbsp;
       				<a href ="">NEWS & UPDATES</a> &nbsp;&nbsp; / &nbsp;&nbsp;
       				<a  class ="dmts_nav_active"href ="./staff.php">STAFF</a>
       			</div>
       		</div>
     	</div>
    </div>
</body>
<!-- Scripts -->
	<script type="text/javascript" src = "../assets/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src = "../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src = "../assets/js/holder.js"></script>
</html>