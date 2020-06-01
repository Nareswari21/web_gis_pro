<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/css_login.css">
<body>
<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="<?php echo $action ?>" method="post">
                    <input name="username" type="text" placeholder="username" required autofocus>
                    <input name="password" type="password" placeholder="password" required>
                    <button type="submit" name="login" class="btn btn-info btn-block login" >Login</button>
                </form>
               <div class="text-center" style="margin-top: 15px">
                 Belum punya akun? <a href="<?php echo base_url() ?>auth/register">Silahkan Register</a>
               </div>
            </div>
        </div>
        
</div>
</body>
</html>