<?php 
            session_start();
            if(isset($_SESSION['admin'])){
            $conn = mysqli_connect('localhost','root','','land_data');
            $sn = '120AA/3';
            echo $sn;
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Location data</title>  
    
    <!-- Site Icons -->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        var sn=0;
    </script>
</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                   
                    <a class="navbar-brand" ><img src="images/logo.jpg" height="120%" alt="logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="complaint_inbox.html">Complaints</a></li>
                            <li><a href="logout.php">Signout </a></li>                
                        </ul>  
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Location Data</h2>
					<!-- Breadcrumbs -->
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="about-box">
		<div class="container">
            <?php 
            $res1 = mysqli_query($conn,"SELECT * FROM land_details AS ld where ld.survey_no = '$sn'");
            $res2 = mysqli_query($conn,"SELECT * FROM landrecord_details AS lrd where lrd.survey_no = '$sn'");
            $row1 = mysqli_fetch_assoc($res1);
            $row2 = mysqli_fetch_assoc($res2);
            if (mysqli_num_rows($res1) > 0) {
            ?>
			
			<ul>
                <li>
                    <b>Survey Number: <?php echo $sn;?></b>

                </li>
                <br>
                <li>
                    <b>Owner's Name:<?php echo $row1['lh_name'];?></b>
                </li>
                <br>
                <li>
                    <b>Location:<?php echo "Latitude:".$row1['latitude_start']."  Longitude:".$row1['longitude_start']; ?></b>
                </li>
              </ul>  
				
            <br>
            <div id="map"></div>
                                        <script>
                                    function initMap() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 19,
                                        mapTypeId: 'satellite',
                                        disableDoubleClickZoom: true,
                                        center: {lat: 10.75944, lng: 76.29348},
                                    });

                                    var p1 = [
                                                {lat: 10.7588912, lng: 76.2926389 },
                                                {lat: 10.7588882, lng: 76.2926567 },
                                                {lat: 10.7588807, lng: 76.2927435 },
                                                {lat: 10.7588698, lng: 76.2928284 },
                                                {lat: 10.7588649, lng: 76.2928534 },
                                                {lat: 10.7588491, lng: 76.2929768 },
                                                {lat: 10.7588652, lng: 76.2929931 },
                                                {lat:10.758935 , lng:  76.2930226},
                                                {lat: 10.7589594, lng: 76.2930268 },
                                                {lat: 10.7589824, lng:  76.293048 },
                                                {lat: 10.7589982, lng: 76.2930735 },
                                                {lat: 10.7590252, lng: 76.2930724 },
                                                {lat: 10.759066 , lng:   76.293066},
                                                {lat: 10.7591254, lng:  76.293059 },
                                                {lat: 10.7591932, lng: 76.2930521 },
                                                {lat: 10.7592011, lng: 76.2929877 },
                                                {lat: 10.7592018, lng: 76.2929383 },
                                                {lat: 10.759209 , lng:  76.2928992},
                                                {lat: 10.7591932, lng: 76.2928187 },
                                                {lat: 10.7591853, lng: 76.2927597 },
                                                {lat: 10.7591623, lng: 76.2927425 },
                                                {lat: 10.759128 , lng:  76.2927398},
                                                {lat: 10.7590911, lng: 76.2927318 },
                                                {lat: 10.7590621, lng: 76.2927184 },
                                                {lat: 10.7590147, lng: 76.2926755 },
                                                {lat: 10.7589963, lng: 76.2926594 },
                                                {lat: 10.7589488, lng: 76.2926406 },
                                                {lat: 10.7588912, lng: 76.2926389 }

                                    ];
                                    var d1 = [
                                                        {lng: 76.2939174,lat: 10.7597308},
                                                        {lng: 76.2939388,lat: 10.7597111},
                                                        {lng: 76.2940005,lat: 10.759719},
                                                        {lng: 76.2940341,lat: 10.7597308},
                                                        {lng: 76.2940582,lat: 10.7597269},
                                                        {lng: 76.2940931,lat: 10.7597269},
                                                        {lng: 76.2941427,lat: 10.7597348},
                                                        {lng: 76.2941494,lat: 10.7597625},
                                                        {lng: 76.2941682,lat: 10.7597835},
                                                        {lng: 76.2941843,lat: 10.7598231},
                                                        {lng: 76.2941896,lat: 10.759856},
                                                        {lng: 76.2941749,lat: 10.7598863},
                                                        {lng: 76.2941615,lat: 10.7599034},
                                                        {lng: 76.2941226,lat: 10.7599206},
                                                        {lng: 76.2940837,lat: 10.7599166},
                                                        {lng: 76.2940528,lat: 10.7599166},
                                                        {lng: 76.2940099,lat: 10.7599232},
                                                        {lng: 76.2939858,lat: 10.7599364},
                                                        {lng: 76.2939496,lat: 10.7599482},
                                                    {lng:  76.293916,lat: 10.7599509},
                                                        {lng: 76.2938678,lat: 10.7599337},
                                                    {lng:  76.293845,lat: 10.7599008},
                                                        {lng: 76.2938463,lat: 10.7598626},
                                                    {lng:  76.293845,lat: 10.7598086},
                                                    {lng:  76.293849,lat: 10.7597783},
                                                    {lng:  76.293861,lat: 10.7597519},
                                                        {lng: 76.2938879,lat: 10.7597414},
                                                        {lng: 76.2939174,lat: 10.7597308}
                                    ];
                                            var p1 = new google.maps.Polygon({
                                                    paths: p1,
                                                    // clickable:false,
                                                });
                                                p1.setMap(map);
                                    google.maps.event.addListener(map, 'click', function (event) {
                                            //alert the index of the polygon
                                            console.log("Lat:",event.latLng.lat(),"Lng:",event.latLng.lng());
                                        });
                                    google.maps.event.addListener(p1 , 'dblclick', isWithinPoly);
                                    function isWithinPoly(event){
                                        var isWithinPolygon = google.maps.geometry.poly.containsLocation(event.latLng, this);
                                        if (isWithinPolygon == true){
                                            var sn="120AA/3";
                                        }
                                        console.log("Lat:",event.latLng.lat(),"Lng:",event.latLng.lng())
                                    }



                                            var d1 = new google.maps.Polygon({
                                            paths: d1,
                                            // clickable:false,
                                            });
                                            d1.setMap(map);        
                                    google.maps.event.addListener(map, 'click', function (event) {
                                            //alert the index of the polygon
                                            console.log("Lat:",event.latLng.lat(),"Lng:",event.latLng.lng());
                                        });
                                    google.maps.event.addListener(d1 , 'dblclick', isWithinPoly);
                                    function isWithinPoly(event){
                                        var isWithinPolygon = google.maps.geometry.poly.containsLocation(event.latLng, this);
                                        if (isWithinPolygon == true){
                                            var sn="130AB/2";
                                        }
                                        console.log("Lat:",event.latLng.lat(),"Lng:",event.latLng.lng())
                                    }
                                    }
                                        </script>
                                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF44D1DKov89K0L9g-n7IBE8wliJwE4To&callback=initMap"
                                        async defer></script>
                 <ul>
                    <br>
                    <li>
                        <b>District:<?php echo $row2['district']; ?></b>
    
                    </li><br>
                    <li>
                        <b>Taluk:<?php echo $row2['taluk']; ?></b>
    
                    </li><br>
                    <li>
                        <b>Village:<?php echo $row2['village']; ?></b>
    
                    </li><br>
                    <li>
                        <b>Block Number:<?php echo $row2['blockno']; ?></b>
    
                    </li><br>
                    <li>
                        <b>Land Type:<?php echo $row2['land_type']; ?></b>
    
                    </li><br>
                    <li>
                        <b>Area(Hectare):<?php echo "0.5"; ?></b>
    
                    </li><br>
                    <li>
                        <b>Change Happened:<?php echo "No changes occured to land type"; ?></b>
    
                    </li><br>
                    <li>
                        <b>Survey Subdivision number:<?php echo $row2['survey_subdiv_no']; ?></b>
    
                    </li><br>
                    <li>
                        <b>Re-Survey Number:<?php echo $row2['resurvey_no']; ?></b>
    
                    </li><br>
                    <li>
                        <b>Fare Value:<?php echo "20,000/cent"; ?></b>
    
                    </li><br>
                    <li>
                        <b>Re-Survey subdivision Number:<?php echo $row2['resurvey_subdiv_no']; ?></b>
    
                    </li><br>
                 </ul>
                <?php
            }
            ?>

             </div>			
		</div>
	</div>

    



    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>
<?php
            }
?>