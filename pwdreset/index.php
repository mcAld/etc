<html>
	<head>
		<title>VPO Ventures</title>
		<style type="text/css">
			.register-form{
				width: 500px;
				margin: 0 auto;
				text-align: center;
				padding: 10px;
				color: #fff;
				background : #c4c4c4;
				border-radius: 10px;
				-webkit-border-radius:10px;
				-moz-border-radius:10px;
			}
			.register-form form input{padding: 5px;}
			.register-form .btn{
				background: #726E6E;
				padding: 7px;
				border-radius: 5px;
				text-decoration: none;
				width: 50px;
				display: inline-block;
				color: #FFF;
			}
			.register-form .register{
				border: 0;
				width: 60px;
				padding: 8px;
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
	</head>
	<body>
		<div class="register-form">
			<h1>Password Reset</h1>
			<form action="pwd_reset.php" method="POST">
				<p><label>Email : </label>
				<input id="username" type="text" name="email" data-validation="email" placeholder="Email" /></p>
				<p><label>New Password&nbsp;&nbsp; : </label>
				<input id="password" type="password" name="pass_confirmation" data-validation="strength" data-validation-strength="2" placeholder="password" /></p>
				<p><label>Confirm Password&nbsp;&nbsp; : </label>
				<input id="confirmpassword" type="password" name="pass" data-validation="confirmation" placeholder="Confirm Password" /></p>
				<input class="btn register" type="submit" name="submit" value="Reset" />
			</form>
		</div>
	</body>
	<script type="text/javascript">
		$.validate({
		    modules : 'security',
		});
	</script>
</html>