<html>
	<head>
		<title>Database Management and Transaction System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('assets/css/dmts-custom-local.css') ?>" rel="stylesheet" media="screen">
	</head>
<body>
	<div id ="main_container">
		<div id ="header_container">
			<div id ="tesda_logo_container" class ="container">
				<img id ="tesda_logo"  src="<?php echo base_url('assets/img/logo2.png') ?>">
				<h1>TESDA</h1>
				<small>DATABASE MANAGEMENT AND TRANSACTION SYSTEM</small>
			</div>
			<div style ="border:1px solid #383D36;border-style:outset; border-radius:3px; padding:10px;float:right; margin-top:-90px; margin-right:30px; width:165px;height:100px;text-align:center">
				 <span>
				 	<strong style ="color:#8EC497;"> USE CHROME </strong> <img style ="height:40px;position:absolute; top:10px;left:95%;"src="<?php echo base_url('assets/img/chrome.png')?>">
				 	<br><small style ="color:#CCC4C4;"> &nbsp;for better results.</small>
				 	<br><a href="https://www.google.com/chrome?brand=CHMO#eula" target ="_blank"><button class ="btn btn-primary" id ="tooltip" data-placement ="bottom" data-original-title ="Download Google Chrome now. " data-toggle ="tooltip" style =" margin-top:5px;border-radius:0px;font-size:10pt;height:30px;">Download <span class ="glyphicon glyphicon-download"></span></button></a>
				 </span>
				
			</div>
		</div>
		<div id = "staff_content_container">
			<div class ="container">
				<div class ="row">
					<div class ="col-lg-4 col-lg-offset-4" id ="staff_online_login_page">
						<br><br>
						<div id ="staff_login">
							<h3 id ="staff_tag">
								<strong>TESDA Staff</strong>
							</h3>
							<form class="form-signin">
								<p class="text-muted text-center" id="err_msg_container" >Enter your username and password</p>
		            <input id="uname" type="text" placeholder="Username" class="input-lg form-control">
		            <input id="pword"type="password" placeholder="Password" class="input-lg form-control">
		            <button id="sign_btn" class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
			        </form>
				    </div>
					</div>
				</div>
			</div>
		 </div>
	</div>
	<div id="footer-custom">
      	<div class="container">
       		<div class ="row">
       			<div class ="col-md-2">
					<p class="text-muted credit">
		       			<strong>DMTS &copy 2014</strong>
		       		</p>
       			</div>
	   			<div class ="col-md-2 pull-right">
	   				<a class ="dmts_nav_active" href ="<?php echo base_url('index.php/')?>">STAFF</a>&nbsp;&nbsp; / &nbsp;&nbsp;
	   				<a href ="<?php echo base_url('assets/User Guide.docx') ?>" target ="_blank">USER GUIDE</a> 
	   			</div>
       		</div>
     	</div>
    </div>
</body>
<!-- Scripts -->
	<script type="text/javascript" src = "<?php echo base_url('assets/lib/jquery.min.js') ?>"></script>
	<script type="text/javascript" src = "<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src = "<?php echo base_url('assets/js/home.js') ?>"></script>
</html>