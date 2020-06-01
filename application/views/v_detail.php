<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DETAIL</title>
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
 

<style type="text/css">
 
  #mapid { height: 380px; }
  .slider-holder
        {
            width: 800px;
            height: 380px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
       
        .image-holder
        {
            width: 2400px;
            background-color: white;
            height: 380px;
            clear: both;
            position: relative;
           
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
       
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
       
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
       
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
       
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
       
        .button-holder
        {
            position: relative;
            top: -20px;
        }
       
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
        }

</style>
</head>
<body class="bg-dark">
        <div class="container">
            <center><h1> <font color="white"> DETAIL </font> </h1></center>
        </div>
<div style="width: 50%; float:left">
<div id="mapid"></div>
</div>

<div style="width: 50%; float:right">
<div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-holder">
            <?php foreach ($dok as $r) {?>
                <img src="<?=base_url()?>assets/dokumentasi/<?=$r->dokumentasi_gambar?>" class="slider-image" />
            <?php }?>

        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div>
</div>
<div>
<ul>
<center>
<h5> 
    <font color="white">
    <?php foreach ($bidang as $r){?>
        
    <li>
            Nama Bidang : <?=$r->bidang_nama?>
    </li>
    <li>
            Keterangan : <?=$r->bidang_keterangan?>
    </li>
    <a class="btn btn-warning" href="<?php echo base_url('index.php/home/index') ?>"> <i class="fa fa-maps"></i> KEMBALI KE PETA</a>
    <?php }?>
    </font> 
</h5>
</center>
</ul>
</div>
</div>
</div>
</div>


    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="<?=base_url()?>assets/assets/js/main.js"></script> -->
    <script src="<?=base_url()?>assets/leaflet/leaflet.js"></script>

    <script type="text/javascript">
  	var map = L.map('mapid').setView([-7.0686339,110.4397131], 13);
    var base_url="<?=base_url()?>";
    var v_kode="<?=$kode?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

$.getJSON(base_url+"assets/geojson/.geojson", function(data){
  geoLayer = L.geoJson(data, {
            style: function(feature){

              var kode = feature.properties.kode
                    if(kode==v_kode){
                        return{
                            fillOpacity: 0.5,
                            fillColor: "#008cff",
                            weight: 5,
                            opacity: 1,
                            color:"#e88243"
                        };
                    }else{
                        return{
                            fillOpacity: 0.0,
                            weight: 5,
                            opacity: 1,
                            color:"#e88243"
                        };

                    }
            },
            onEachFeature: function(feature, layer){
              var kode = feature.properties.kode;
              var latt = parseFloat(feature.properties.latitude);
              var longg = parseFloat(feature.properties.longitude);

            if(kode==v_kode){
                map.flyTo([longg,latt], 15, {
                    animate: true,
                    duration: 2
                });
                var center = getCentroid(feature.geometry.coordinates[0]);
                L.marker([center[1],center[0]]).addTo(map);
            }
            }

  }).addTo(map);

});
            var getCentroid = function (coord)
            {
                var center = coord.reduce(function (x,y){
                    return [x[0] + y[0]/coord.length, x[1] + y[1]/coord.length]
                }, [0,0])
                return center;
            }
    </script>

</body>
</html>