<html>
<head>
	<title></title>

	<!--Custom CSS-->
	
	<!--Bootstrap CSS-->
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-XYCjB+hFAjSbgf9yKUgbysEjaVLOXhCgATTEBpCqT1R3jvG5LGRAK5ZIyRbH5vpX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!--Script-->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js"   integrity="sha256-mFypf4R+nyQVTrc8dBd0DKddGB5AedThU73sLmLWdc0="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin:10% auto;width:400px;">
		<div class="panel panel-success">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Админка</h3>
		</div>
			<div class="panel-body">
			<form method="POST" class="form-signin" action="login.php">
				<div class="form-group">
					<input type="text" class="form-control" name="uname" placeholder="Логин" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="pwd"placeholder="Пароль" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Войти" style="width:100%;">
				</div>
			</form>
				</div>
			</div>
		</div>
	</body>
</html>