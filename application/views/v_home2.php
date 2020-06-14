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
  #map { height: 520px; }

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
                        <a href="<?=base_url()?>home2"> <i class="menu-icon fa fa-map-o"></i> PETA 2</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>crud"> <i class="menu-icon fa fa-fort-awesome"></i>Bangunan </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>bidang"> <i class="menu-icon fa fa-puzzle-piece"></i>Bidang </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>bidang2"> <i class="menu-icon fa fa-puzzle-piece"></i>Bidang 2</a>
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
                                <div id="map"></div>
                                <div id="result"></div>
                                
                                <button id='convert'>Get Geojson</button>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
    <script type="text/javascript">
var map = L.map('map').setView([-7.054829,110.436433], 15);

var base_url = "<?=base_url()?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  maxZoom: 100
}).addTo(map);



var myFeatureGroup = L.featureGroup().addTo(map).on("click", groupClick);
var bangunanMarker;


$.getJSON(base_url+"index.php/home/bangunan_json", function(data){
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
$.getJSON("<?=base_url()?>index.php/home2/getPolygon", function(result){
    $.each(result, function(i, field){
      var coordinates =  JSON.parse(result[i].coordinates)
          for(var x=0; x<coordinates.length; x++){
              coordinates[x] = [coordinates[x][1], coordinates[x][0]]
          }

          // create popup contents
          var customPopup = "<center><h3><b>Landmark Information</b></h3></center>"+'<h7>Name: </h7>'+result[i].name_polygon+"<br/>"+"<img src='<?=base_url()?>assets/uploads/"+result[i].photo+"' alt='map photo' width='350px'/><br><h7>Detail : </h7>"+result[i].information+"<br/><?php if($this->session->userdata('level') == 1) { ?><a href='<?=base_url()?>index.php/home2/deletePolygon/"+result[i].id_polygon+"'>Delete <?php } ?></a>&nbsp;&nbsp;&nbsp;</a>" ;

          // specify popup options 
          var customOptions =
              {
              'maxWidth': '500',
              'maxHeight': '1000',
              'className' : 'custom'
              }

          var polygon = L.polygon(coordinates).bindPopup(customPopup,customOptions).addTo(map);
    });
});

    //Add function to Polygon or Marker
    // Initialise the FeatureGroup to store editable layers
    var editableLayers = new L.FeatureGroup();
    map.addLayer(editableLayers);

    var drawPluginOptions = {
    position: 'topright',
    draw: {
        polygon: {
        allowIntersection: false, // Restricts shapes to simple polygons
        drawError: {
            color: '#e1e100', // Color the shape will turn when intersects
            message: '<strong>Oh snap!<strong> you can\'t draw that!' // Message that will show when intersect
        },
        shapeOptions: {
            color: '#97009c'
        }
        },
        // disable toolbar item by setting it to false
        polyline: false,
        circle: false, // Turns off this drawing tool
        circlemarker: false,
        rectangle: false,
        marker: true,
        },
    edit: {
        featureGroup: editableLayers, //REQUIRED!!
        remove: false
    }
    };
    <?php if($this->session->userdata('level') == 1) { ?>
    // Initialise the draw control and pass it the FeatureGroup of editable layers
    var drawControl = new L.Control.Draw(drawPluginOptions);
    map.addControl(drawControl);

    var editableLayers = new L.FeatureGroup();
    map.addLayer(editableLayers);
    //editableLayers.on('click', addMarker);

    var polygon = null;
    //Function to send coordinates to Database
    map.on('draw:created', function(e) {

    var type = e.layerType,
        layer = e.layer;
    
    polygon = layer.toGeoJSON()
    var coordMarkerLat = JSON.stringify(polygon.geometry.coordinates[1]);
    var coordMarkerLong = JSON.stringify(polygon.geometry.coordinates[0]);
    var coordPolygon = JSON.stringify(polygon.geometry.coordinates[0]);    
    
    if(type === 'marker'){
        var addPopup =  `<h3>Add Landmark</h3>`+coordMarkerLat+", "+coordMarkerLong+
        `<form action="<?=base_url()?>index.php/map/addMarker" method="POST" enctype="multipart/form-data"> 
            <label for="landmark_nama">Name:</label><br>
                <input type="text" id="l_name" name="l_name" required><br> 
            <label for="landmark_latitude">Latitude:</label><br>
                <input type="text" id="l_lat" name="l_lat" required><br>
            <label for="landmark_longitude">Longitude:</label><br>
                <input type="text" id="l_long" name="l_long" required><br>
            <label for="landmark_info">Detail Information:</label><br>
                <input type="text" id="l_info" name="l_info" required><br>
            <label for="landmark_foto">Photo:</label><br>
                <input type="file" id="l_foto" name="l_foto" required><br><br>
                <input type="submit" value="Submit">
        </form>`;  
            
        var customOptions =
            {
            'maxWidth': '500',
            'className' : 'custom'
            };
        layer.bindPopup(addPopup,customOptions);    
    }
    else if(type === 'polygon'){
    var addPopup =  `<h3>Add Landmark</h3>`+coordPolygon+`
      <form action="<?=base_url()?>index.php/home2/addPolygon" method="POST" enctype="multipart/form-data"> 
          <label for="landmark_nama">Name:</label><br>
              <input type="text" id="l_name" name="l_name" required><br>
          <label for="landmark_coordinates">Coordinates:</label><br>    
              <input type="text" id="l_coord" name="coordinates" required><br> 
          <label for="landmark_info">Detail Information:</label><br>
              <input type="text" id="l_info" name="l_info" required><br>
          <label for="landmark_foto">Photo:</label><br>
              <input type="file" id="l_foto" name="l_foto" required><br><br>
          <input type="submit" value="Submit">
      </form>`;
  
    var customOptions =
        {
        'maxWidth': '500',
        'className' : 'custom'
        };

        layer.bindPopup(addPopup,customOptions);
    }

    editableLayers.addLayer(layer);
    });

    <?php } ?>

</script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>
