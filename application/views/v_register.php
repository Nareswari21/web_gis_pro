<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    s
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?=base_url()?>assets/apple-icon.png">
    <link rel="shortcut icon" href="<?=base_url()?>assets/favicon.ico">

    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?=base_url()?>assets/assets/css/style.css">
    <link rel  = "stylesheet" href = "<?=base_url()?>assets/leaflet/leaflet.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="home">
                        <h1> <font color="white"> REGISTER </font> </h1>
                    </a>
                </div>
                <div class="login-form">
                    <form  action="<?php echo base_url(). 'manajemen/tambah_aksi'; ?>" method="post">
                        <!-- <div class="form-group">
                            
                            <input type="hidden" class="form-control" name="id" placeholder="User Name">
                        </div> -->
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username" placeholder="User Name" required="required">
                        </div>
                        <div class="form-group">
                             <label>Password</label>
                             <input type="text" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                             <!-- <label>Level</label> -->
                             <input type="hidden" class="form-control" name="level" placeholder="level" required="required" value="3">
                        </div>  
                         <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                    </form>
                    <div class="text-center" style="margin-top: 15px">
                        Sudah punya akun? <a href="<?php echo base_url() ?>auth/login">Silahkan Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/assets/js/main.js"></script>


</body>

</html>