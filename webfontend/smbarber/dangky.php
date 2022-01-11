<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Login</title>  
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

</head>
<body>

    <div id="wrapper">
		
		
        <form action="submitlogin.php" method="POST" id="form-login">
			<div class = form-heading>
			<img src="images/logos/iconlogo.png" alt="image" height="60%" width="70%">
			</div>
			<div class="form-group">
			<i class="far fa-user"></i>
				<input type="text" class="form-input" placeholder="Tên đăng nhập" name='username'>
			</div>
			<div class="form-group">
				<input type="text" class="form-input" placeholder="Email" name='email'>
			</div>
			<div class="form-group">
			<i class="far fa-key"></i>
				<input type="password" class="form-input" placeholder="Mật khẩu" name='password'>
				<div id="eye">
					<i class="far fa-eye"></i>
					</div>
			</div>
			<div class="form-group">
			<i class="far fa-key"></i>
				<input type="password" class="form-input" placeholder="Nhập lại mật khẩu" name='rpassword'>
				<div id="eye">
					<i class="far fa-eye"></i>
					</div>
			</div>
			<input type="submit" value="Đăng kí" class="form-submit">
		</form>
    </div>


</body>
<script src="http://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>