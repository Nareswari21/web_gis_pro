<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang = "en">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selamat Datang!</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
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
<style type = "text/css">
    .body {
		color: #fff;
		background: #4c535d;
		font-family: 'Roboto', sans-serif;
    }
	.table-wrapper {
        background: #fff;
        padding: 20px;
        margin: 30px 0;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		font-size: 15px;
        padding-bottom: 10px;
        margin: 0 0 10px;
		min-height: 45px;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
	.table-title select {
		border-color: #ddd;
		border-width: 0 0 1px 0;
		padding: 3px 10px 3px 5px;
		margin: 0 5px;
	}
	.table-title .show-entries {
		margin-top: 7px;
	}
	.search-box {
        position: relative;
        float: right;
    }
	.search-box .input-group {
		min-width: 200px;
		position: absolute;
		right: 0;
	}
	.search-box .input-group-addon, .search-box input {
		border-color: #ddd;
		border-radius: 0;
	}
	.search-box .input-group-addon {
		border: none;
		border: none;
		background: transparent;
		position: absolute;
		z-index: 9;
	}
    .search-box input {
        height: 34px;
        padding-left: 28px;		
		box-shadow: none !important;
		border-width: 0 0 1px 0;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
		position: relative;
		top: 2px;
		left: -10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
		padding: 0 10px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    .box {
        width: 10px;
        height: 50px;
        padding-left: 750px;
    
}
  .user{
    padding      : 5px;
    margin-bottom: 5px;
  }
  #mapid { height: 560px; }

</style>
  
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	// Animate select box length
	var searchInput = $(".search-box input");
	var inputGroup = $(".search-box .input-group");
	var boxWidth = inputGroup.width();
	searchInput.focus(function(){
		inputGroup.animate({
			width: "300"
		});
	}).blur(function(){
		inputGroup.animate({
			width: boxWidth
		});
	});
});
</script>
</head>
<body>


    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">GIS - PRO</h3>
                    <li>
                        <a href="<?=base_url()?>home"> <i class="menu-icon fa fa-map-o"></i> PETA </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>crud"> <i class="menu-icon fa fa-fort-awesome"></i>Bangunan </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>bidang"> <i class="menu-icon fa fa-puzzle-piece"></i>Bidang </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>dokumentasi"> <i class="menu-icon fa fa-laptop"></i>Dokumentasi </a>
                    </li>
                    <?php if($this->session->userdata('level') == 1) { ?>
                    <h3 class="menu-title">PENGATURAN</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="<?=base_url()?>assets/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>HALAMAN</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?=base_url()?>home/register">Registrasi</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?=base_url()?>manajemen/index">Manajemen</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
  <!--Normale contenuto di pagina-->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="<?=base_url()?>assets/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?=base_url()?>assets/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?php echo site_url('auth/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header>
    <div class="container">
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">					
					</div>
					<div class="col-sm-4">
						<h2 class="text-center">DATA BANGUNAN PETA</h2>
					</div>
                    <div class="col-sm-4">
                        <div class="search-box">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
								<input type="text" class="form-control" placeholder="Search&hellip;">
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($this->session->userdata('level') <= 2) { ?>
            <button class="btn btn-primary btn-md" onclick="location.href='<?php echo base_url();?>index.php/crud/tambah'">TAMBAH DATA</button>
            <?php } ?>
            <a class="btn btn-danger" href="<?php echo base_url('index.php/crud/print') ?>"> <i class="fa fa-print"></i> EXPORT</a>
            <!-- <a class="btn btn-warning" href="<?php echo base_url('index.php/crud/excel') ?>"> <i class="fa fa-print"></i> Export EXCEL </a>   -->
            <div class="form-group">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Bangunan <i class="fa fa-sort"></i></th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <?php if($this->session->userdata('level') <= 2) { ?>
                        <th>Aksi</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    
                        
                        <?php 
                        $no=1;
                        foreach($datas as $b){ ?>
                        
                            <tr>
                        <td><?php echo $b->bangunan_id; ?></td>
                        <td><?php echo $b->bangunan_nama; ?></td>
                        <td><?php echo $b->bangunan_lat; ?></td>
                        <td><?php echo $b->bangunan_long; ?></td>
                        <?php if($this->session->userdata('level') <= 2) { ?>
                        <td>
                            <?php $a= '\'index.php/crud/hapus/' ?>
							
                            <a href='<?=base_url().'index.php/crud/edit/' . $b->bangunan_id?>'   class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href='<?=base_url().'index.php/crud/hapus/' . $b->bangunan_id?>' class='delete' title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            <?php } ?>
                        </td>
                        <?php } ?>
                            </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>   

    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/assets/js/main.js"></script>


</body>
</html>