<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Complaint</title>  
 
    <!-- Site Icons -->
 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">


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
                        
                        <li><a href="glogout.php">Signout </a></li>                
     
                    </ul>  
                </div>
            </div>
        </nav>
    </header>
	
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Grievance Portal</h2>
					
				</div>
			</div>
		</div>
	</div>  
	
	<div class="about-box">
		<div class="container">
            
            			
			<div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <!-- complaint image below. \./ ._. -->
                        <video id="video" width="540" height="480" autoplay></video>
                            <!-- <button id="snap">Snap Photo</button> -->
                            <a id="download" download="image.png"><button type="button" onClick="download()">Download</button></a>
                            <button id="snap">Snap Photo</button>
                            <canvas id="canvas" width="540" height="480"></canvas>
                            <script>
                                var video = document.getElementById('video');

                            // Get access to the camera!
                                if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                                    // Not adding `{ audio: true }` since we only want video now
                                    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
                                        //video.src = window.URL.createObjectURL(stream);
                                        video.srcObject = stream;
                                        video.play();
                                    });
                                }  
                                var canvas = document.getElementById('canvas');
                                var context = canvas.getContext('2d');
                                var video = document.getElementById('video');

                                // Trigger photo take
                                document.getElementById("snap").addEventListener("click", function() {
                                    context.drawImage(video, 0, 0, 640, 480);

                                });

                                function convertCanvasToImage(canvas) {
                                var image = new Image();
                                var imagesrc = canvas.toDataURL("image/png");
                                move_uploaded_file($image,'upload/'.$image);
                                console.log($imagesrc);
                                return image;
                                }

                                function download(){
                                    var download = document.getElementById("download");
                                    var image = document.getElementById("canvas").toDataURL("image/png")
                                                .replace("image/png", "image/octet-stream");
                                                download.setAttribute("href", image);

                                }
                            </script>

                    </div>
                </div>
				<div class="col-md-6">
					<div class="message-box right-ab">
                       
<u><h2>Tell About It</h2></u>
                    <h3 style="color:#F00"></h3>
<textarea name="textarea" cols="50" rows="9" id="textarea"></textarea><br>
<br>
                  
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" value="SEND" id="submit" onclick="location.reload()" href="complaint_inbox.html" class="btn btn-light btn-radius btn-brd grd1 btn-block">Sent</button>                                                         
                            </div>
                            
                        </div>
				</div>
			</div>
			
		</div>
	</div>

              

                

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>