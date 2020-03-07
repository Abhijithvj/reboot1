<?php
    session_start();
    if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>    <!-- Basic -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
    </style>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>index
    </title>  
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
   
    

    <script src="https://kit.fontawesome.com/1718e394d4.js" crossorigin="anonymous">
</script>
    <script src="js/modernizer.js"> 
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
                        <li><a href="notification.html">Notifications </a></li> 
                        <li><a href="logout.php">Signout </a></li>                
               
                    </ul>  
                </div>
            </div>
        </nav>
    </header>
	
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Your Land Our Mission...</h2>
				</div>
			</div>
		</div>
    </div>
    
<script>
    selectElement.options[0].selected="selected";

</script>
    
	<div id="support" class="section wb">
        <div class="container">
            
            <div class="row">
                <div class="col-md-6">
                    ഭാഷ മലയാളത്തിലേക്ക് മാറ്റാൻ ക്ലിക്കുചെയ്യുക:
            <a href="./malayalamindex.html"><i class="fas fa-toggle-off fa-2x"></i></a>


                    <div class="contact_form">
                        <div id="message"></div>
                        <form action="/agrosat_new/location_data.php" href="" id="contactform" class="row"  name="contactform" method="POST">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                <label for="cars">Select a District:</label>
                                <select name="select_place" id="select_place" class="selectpicker form-control" data-style="btn-white">
                                    <option selected></option>
                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option  value="Pathanamthitta" >Pathanamthitta</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Palakkad">Palakkad</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Kozhikode">Kozhikode</option>
                                    <option value="Wayanadu">Wayanadu</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Kasaragod">Kasaragod</option>

                                </select>    
                            </div>                      
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Select a Thaluk:</label>
                                <select name="select_Taluk_name" id="select_taluk" class="selectpicker form-control" data-style="btn-white">
                                 <option selected></option>                                   
                                    <option value= "Palakkad">Palakkad</option>
                                    <option value="chittur">chittur</option>
                                    <option value="Alathur">Alathur</option>
                                    <option value="ottapalam">Ottapalam</option>
                                    <option value="Mannarkad">Mannarkad</option>
                                    <option value="Pattambi">Pattambi</option>
                                    
                                 </select>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Select a VillageOffice:</label>
                                <select name="VillagOffice" id="select_taluk" class="selectpicker form-control" data-style="btn-white">
                                    <option selected ></option>
                                    
                                    <option value="Palakkad">Palakkad1</option>
                                    <option value="Palakkad">Palakkad2</option>
                                    <option value="Palakkad">Palakkad3</option> 
                                    <option value="Palakkad">Akathethara</option>
                                    <option value="Palakkad">Malampuzha1</option>
                                    <option value="Palakkad">Malampuzha2</option> 
                                    <option value="Palakkad">Marutharod</option> 
                                    <option value="Palakkad">Pirayiri</option>
                                    <option value="Palakkad">Kannadi1</option>
                                    <option value="Palakkad">Kannadi2</option> 
                                    <option value="Palakkad">Yakkara</option>
                                    <option value="Palakkad">Parli1</option>
                                    <option value="Palakkad">Parli2</option>
                                    <option value="Palakkad">Mankara</option> 
                                    <option value="Palakkad">Keralassery</option> 
                                    <option value="Palakkad">Yakkara</option>
                                    <option value="Palakkad">Kongad 1</option>
                                    <option value="Palakkad">Kongad2</option>
                                    <option value="Palakkad">Mundur 1</option> 
                                    <option value="Palakkad">Mundur 2</option> 
                                    <option value="Palakkad">Mundur 1</option> 
                                    <option value="Palakkad">Puduparriyarram 1</option> 
                                    <option value="Palakkad">Puduparriyarram 2</option>
                                    <option value="Palakkad">Pudusherry East</option> 
                                    <option value="Palakkad">Pudusherry West</option> 
                                    <option value="Palakkad">Pudusherry Central</option>
                                    <option value="Palakkad">Kodumbu</option> 
                                    <option value="Palakkad">POLPULLY</option> 
                                 </select>  
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                <label for="cars">Enter Survey No:</label>
                                <input typre="text" name="survey_no" id="survey_no" class="form-control" data-style="btn-white">
                            </div>   
                           
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" value="Submit" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                                             
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <button type="reset" value="reset" id="reset" class="btn btn-light btn-radius btn-brd grd1 btn-block">Reset</button>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
				<div class="col-md-6">
					<div class="right-box-contact">
                        
                        <div id="map1"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1IYe--f9nlb9GYNIeCk993s91uaVFrzbT" width="640" height="480"></iframe></div> 

					</div>
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
   
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html> 
<?php
    }
    else{
        header('Location:login.php');
    }
?>