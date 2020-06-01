<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

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

    <link rel="stylesheet" href="<?=base_url()?>assets/assets/css/style.css">
    <link rel  = "stylesheet" href = "<?=base_url()?>assets/leaflet/leaflet.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<style type = "text/css">
  #mapid { height: 520px; }

</style>
</head>

<body>


    <!-- Left Panel -->

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
                    <h3 class="menu-title">Pengaturan</h3><!-- /.menu-title -->
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
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

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

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
                    <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Peta</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Peta</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Leaflet Map --- Klik kanan untuk tambah marker</a></h6>
                                
                            </div>
                            <div class="gmap_unix card-body">
                                <div id="mapid"></div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="assets/assets/js/main.js"></script> -->
    <script src="<?=base_url()?>assets/leaflet/leaflet.js"></script>
    <script type="text/javascript">
  var map      = L.map('mapid').setView([-7.054829,110.436433], 15);
  var base_url = "<?=base_url()?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
var myFeatureGroup = L.featureGroup().addTo(map).on("click", groupClick);
var bangunanMarker;


$.getJSON(base_url+"home/bangunan_json", function(data){
    $.each(data, function(i, field){
      
      var v_lat         = parseFloat(data[i].bangunan_lat);
      var v_long        = parseFloat(data[i].bangunan_long);
      var icon_bangunan = L.icon({
                          iconUrl : base_url+'assets/images2/marker.png',
                          iconSize: [30,30]
      });
    bangunanMarker = L.marker([v_long, v_lat],{icon: icon_bangunan})
                     .addTo(myFeatureGroup)
                     .bindPopup(data[i].bangunan_nama);
    bangunanMarker.id = data[i].bangunan_id;
    
  
    });
  });


  //TAMBAH MARKER
  
  map.on("contextmenu", function (event) {
    var info_bangunan = "Koordinat: " + event.latlng.toString()
        info_bangunan += "<form action=\"<?=base_url()?>crud/tambah_aksi\" method=\"POST\"> <label for=\"bangunan_nama\">Bangunan Nama:</label><br><input type=\"text\" id=\"bangunan_nama\" name=\"bangunan_nama\"><br>\ <label for=\"bangunan_latitude\">Bangunan Latitude:</label><br><input type=\"text\" id=\"bangunan_lat\" name=\"bangunan_lat\"><br><label for=\"bangunan_longitude\">Bangunan Longitude:</label><br><input type=\"text\" id=\"bangunan_long\" name=\"bangunan_long\"><br><br><input type=\"submit\" value=\"Submit\">";
    //var info_bangunan  = "Koordinat: " + event.latlng.toString() + "<b><br>Bangunan Nama :<b><br> <input type=\"text\" id=\"bangunan_nama\" name=\"bangunan_nama\"> <b><br>Latitude :<b><br> <input type=\"text\" id=\"bangunan_lat\" name=\"bangunan_lat\"><b><br>Longitude:<b><br> <input type=\"text\" id=\"bangunan_long\" name=\"bangunan_long\"><button type=\"button\" id=\"bangunan_insert\">Masukan</button></form>"; 
  L.marker(event.latlng).addTo(map)
   //console.log("Coordinates: " + event.latlng.toString())
   .bindPopup(info_bangunan,{
                    closeButton: true,
                    offset     : L.point(0, -20)});

  /* map.on('click', function(e) {
    alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
}); */


});

function groupClick(event){
  console.log("Clicked on marker"+event.layer.id);
  //alert("Clicked on marker"+event.layer.id);
}

$.getJSON(base_url+"assets/geojson/.geojson", function(data){
  geoLayer = L.geoJson(data, {
            style: function(feature){

                var kategori = (feature.properties.kategori);
              if(kategori==1){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#008cff"

              };
              }else if (kategori==2){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#e88243"
              };
              }else if (kategori==3){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#4ef542"
              };
              }else if (kategori==4){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#f5f542"
              };
              }
              else if (kategori==5){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#42f5da"
              };
              }
              else if (kategori==5){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#8442f5"
              };
              }
              else if (kategori==6){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#f542e0"
              };
              }else if (kategori==7){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#f5424e"
              };
              }
              else if (kategori==8){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#81948c"
              };
              }else if (kategori==9){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#141f1a"
              };
              }else if (kategori==9){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#ffffff"
              };
              }else if (kategori==10){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#909647"
              };
              }
              else{
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#c47e0c"
              };
              }
            },
  
            onEachFeature: function(feature, layer){
              var kode = feature.properties.kode;
              
              $.getJSON(base_url+"home/foto/"+kode, function(data){
                  
                var info_bidang  = "<h5 style='text-align:center'>INFO BIDANG</h5>";
                    info_bidang += "<a href='<?=base_url()?>home/detail/"+kode+"'><img src='<?=base_url()?>assets/uploads/"+data+"' alt='maptime logo gif' height'180px' width='230px'/></a>";
                    info_bidang += "<div style='width:100%;text-align:center;margin-top:10px;'><a href='<?=base_url()?>home/detail/"+kode+"'> DETAIL<br></a></div";
                  layer.bindPopup(info_bidang,{
                    maxWidth   : 260,
                    closeButton: true,
                    offset     : L.point(0, -20)
                  });
                  layer.on('click', function(){
                    layer.openPopup();
                  });
              });
              

            }

  }).addTo(map);

});
</script>

</body>

</html>
