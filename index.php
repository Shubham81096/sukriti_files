<?php
require('phpmailer/src/SMTP.php');
require('phpmailer/src/PHPMailer.php');
// Check if data was posted
$success=0;
if($_SERVER["REQUEST_METHOD"]=="POST")
{      
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $message=$_POST["msg"];
    //Prepare mail using the data
    $body="<b>Customer Name</b> : ".$fname." ".$lname."<br><br>";
    $body.="<b>Email ID : </b>".$email."<br><br>";
    $body.="<b>Query : </b><pre>".$message."</pre>";
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    
    // Enter email id which you want to use for sending mails below  :
    $mail->Username = "sukritimails@gmail.com";
    
    // Password for above email :
    $mail->Password = "sukriti29";
    
    // Change these settings if your mail server is other than Gmail
    $mail->Host     = "smtp.gmail.com";
    $mail->Mailer   = "smtp";
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port     = 465;

    // Email message construction :

    $mail->SetFrom("sukritimails@gmail.com", "Sukriti Ngo");
    
    // Where to send the mail :
    $mail->AddAddress("contact@sukriti.ngo");
    
    // Message construction :
    $mail->Subject = "Customer Query - ".$fname." ".$lname;
    $mail->WordWrap   = 80;
    $mail->MsgHTML($body); // The message
    $mail->isHTML(true);
    if($mail->Send()) 
    {   // Do -- if mail was sent 
         $success=1;
        // Delete file after sending it
         
    }
    else 
    {   // If mail was not sent
        $success=0;
    }
	 
}

?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>SUKRITI
          </title>
          <link rel="icon" type="image/ico" href="assets/home/title-logo.PNG" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <link  rel="stylesheet" href="./css/style.css"/>
            <link  rel="stylesheet" href="./css/responsive.css"/>
            <link rel="stylesheet" type="text/css" href="./fonts/fonts.min.css" />
            <link rel="stylesheet" href="./css/slider.css"/>
            <link rel="stylesheet" href="./css/position.css"/>
            <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jssor_5_slider_init = function() {
        
                    var jssor_5_SlideoTransitions = [
                      [{b:-1,d:1,o:-0.7}],
                      [{b:900,d:2000,x:-379,e:{x:7}}],
                      [{b:900,d:2000,x:-379,e:{x:7}}],
                      [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
                    ];
        
                    var jssor_5_options = {
                        // $AutoPlay: 1,
                      $SlideDuration: 800,
                      $SlideEasing: $Jease$.$OutQuint,
                      $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_5_SlideoTransitions
                      },
                      $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                      },
                      $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                      }
                    };
        
                    var jssor_5_slider = new $JssorSlider$("jssor_5", jssor_5_options);
        
                    /*#region responsive code begin*/
        
                    var MAX_WIDTH = 3000;
        
                    function ScaleSlider() {
                        var containerElement = jssor_5_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;
        
                        if (containerWidth) {
        
                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
        
                            jssor_5_slider.$ScaleWidth(expectedWidth);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
        
                    ScaleSlider();
        
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
            </script> 
</head>

<body>
    <?php
    if($success==1){
	//echo '<p align="center" class="phpresponse">Your feedback was sent successfully</p>';
	echo '<div class="phpresponse alert alert-success"><strong>Success!</strong> Your message was sent successfully.</div>';
}
else
{ 
    if($success==0 && $_SERVER["REQUEST_METHOD"]=="POST"){
	echo '<div class="phpresponse alert alert-danger">
    <strong>Error!</strong> Couldn\'t send your message. Try gain later.
  </div>';
  }	
}   ?>
    <nav class="navbar navbar-expand-md avinash " >
        <a class="navbar-brand logo" href="index.php" >
                <img class=""src="./assets/home/group-3.svg" style=""/>
            </a>
            <button id="nav-toggle" style="border:none" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="color: white">
                    <span class="navbar-toggler-icon"></span>
                  </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ecolat.php">ECOMITRA</a>
            </li> 
            <li class="nav-item">
                    <a class="nav-link " href="rewater.php">REWATER</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link " href="career.php">CAREERS</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="#contact">CONTACT US</a>
            </li> 
                
        </ul>
    </div>  
</nav>

<!-- end -->
<div class="amnd" style="display:block;position: relative;">
<section class="Banner" >
        <div class="imageBanner">
            <img src="./assets/ngo/ps-img-667.jpg">
    
        </div>
        <p id ="bannerText" style=""> Sustainable creations for <ic>you</ic></p>
    
    </section>
    <section class="container" style="margin-top: -3px; margin-bottom: 3%;">
            <div class="col-md-12 text-center">
                    <p class="p-text below_banner_txt">SUKRITI is working to solve<br>
        two major developmental challenges of our society<br></p>
            </div>
        </section>
        <section class="content">
            <div class="container">
                            
                                            <div class="col-md-6 col-sm-6 col-xs-6 left vision-content major-challenge" >
                                                    <div class="col-md-12 col-sm-12 col-xs-12 small_disp">
                                                        <div class="col-sm-4 col-sm-4 col-xs-4 left" style="padding-left: 0px;padding-right: 0px">
                                                            <img class="image small-icon right"src="./assets/home/rectangle-14@3x.png">
                                                        </div>
                                                        <div class="col-sm-8 col-sm-8 col-xs-8 left">
                                                            <p class="heading-text index_1" style="font-weight: 900">Freedom from unhygienic sanitation</p>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            <div class="col-md-6 col-sm-6 col-xs-6 left vision-content major-challenge" >
                                                        <div class="col-md-12 col-sm-12 col-xs-12 small_disp2">
                                                                <div class="col-sm-4 col-sm-4 col-xs-4 left">
                                                                    <img class="image small-icon right"src="./assets/home/rectangle-14-copy-3@3x.png" >
                                                                </div>
                                                                <div class="col-sm-8 col-sm-8 col-xs-8 left" style="padding-right: 0;padding-left: 0">
                                                                    <p class="heading-text left index_1" style="font-weight: 900">Rejuvenation<br>
        of water bodies</p>
                                                                </div>
                                                            </div>
                                                </div>
                            
        
            </div>
        </section>
        <section class="content Ecolet" style="margin-top:16%">
            <div class="container mt-40" style="padding-left: 0px;padding-right: 0px" >
                <div class="row" >
                    <div class="col-md-12 col-sm-12 col-xs-12 main-content" style="padding-left: 0px;padding-right: 0px">
                        <div class="col-md-6 col-sm-6 col-xs-6 left ecolats-left mt-30 pl-0 pr-0" style="height: 100%;">
                            <p class="heading content"><tc style="font-family: Avenir_medium">SMART PUBLIC TOILETS</tc><br><br><ice>ECOMITRA</ice><p>
                                <hr  style="float:left;height:6px;width:160px;border-radius: 3px;background-color:#00bfa5;border:none"/><br>
                            <p  class="elats_left" style="font-size: 15px;font-family: Avenir_medium;    margin-top: 2%;    line-height: 1.5;">
                                <br>Public toilets in India today face three major issues: a need for constant maintenance, provision of an uninterrupted water supply, and a lack of waste disposal mechanisms. With EcoMitra we’ve solved these and more:<br><br>
                            </p>
                            <p class="p-text">
                                <img class="left small_icon"src="./assets/home/rectangle-14-copy-4_4.png" alt="">
                                &nbsp;&nbsp;&nbsp;&nbsp;Automated cleaning and maintenance<br><br>
                            </p>
                            <p class="p-text">
                                <img class="left small_icon"src="./assets/home/rectangle-14-copy-4_3.png" alt="">
                                &nbsp;&nbsp;&nbsp;&nbsp; Treats waste water on-site<br><br>
                            </p>
                            <p class="p-text">
                                <img class="left small_icon"src="./assets/home/noun-water-care-708608.png" alt="">
                                &nbsp;&nbsp;&nbsp;&nbsp;  Consumes 90% less water<br><br>
                            </p>
                            <p class="p-text">
                                <img class="left small_icon"src="./assets/home/rectangle-14-copy-4_6.png" alt="">
                                &nbsp;&nbsp;&nbsp;&nbsp;  Works on renewable energy<br><br>
                            </p> 
                            <p class="p-text">
                                    <a href="ecolat.php"><input type="button" name="learn" value="LEARN MORE" > </a>                                  
                             </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 ecolats-right left" >
                                <!-- <img src="./assets/home/group-14.png" alt=""> -->
                                <div class="col-lg-12 col-sm-12 col-xs-12 bubbles" style="background-size: contain;
                                background-repeat: no-repeat;background-image: url('./assets/home/group-14.png');margin-left: 20px;height:590px;background-position:center;">
                                    
                                        <div class="col-md-12 col-sm-12 col-xs-12 wrapper" id="parent1"style=" background-image: url(./assets/home/15.JPG);background-repeat: no-repeat;background-size: cover;background-position: center;">
                                            <div id="parent1" >
                                              <!--  <p class="child"id="child1">Govt Girls School, Anwal Village</p>-->
                                            </div>
                                        </div>
                                    
                                    
                                        <div class="col-md-12 col-sm-12 col-xs-12 wrapper" id="parent2"style=" background-image: url(./elats/12.png);background-repeat: no-repeat;background-size: cover;background-position: right;">
                                            <div id="parent2" >
                                           <!--     <p class="child"id="child2">Ecolat interiors</p>-->
                                            </div>
                                        </div> 
                                     
                                    
                                        <div class="col-md-12 col-sm-12 col-xs-12 wrapper" id="parent3"style=" background-image: url(./assets/home/IMG_1087.JPG);background-repeat: no-repeat;background-size: cover;background-position: center;">
                                            <div id="parent3" >
                                           <!--     <p class="child"id="child3">Hans Foundation, Khora</p>-->
                                            </div>
                                        </div> 
                                </div>
                                    
        
                                                                                   
                            </div>
                        </div>
                    </div>
                               
                </div>
        </section>
        
        <section class="content Ecolet" style="margin-top: 16%;">
                <div class="container" style="padding-left: 0;padding-right: 0">
                    <div class="row" >
                        <div class="col-md-12 col-sm-12 col-xs-12 main-content" style="padding-left: 0;padding-right: 0">
                
                                <div class="col-md-6 col-sm-6 col-xs-6 ecolats-right left index_elat index_3" >
                                        <div class="col-md-12 col-sm-12 col-xs-12 bubbles" style="background-size: contain;
                                        background-repeat: no-repeat;height:590px;background-position:inherit;background-image: url('./assets/home/group-14@2x-Copy.png');">
                                                <div class="col-md-12 col-sm-12 col-xs-12 " style="width: 100%">
                                                        <div class="wrapper" id="parent9"style=" background-image: url(./rewater/10.JPG);background-repeat: no-repeat;background-size: cover;background-position: center;">
                                                            <div id="parent9" >
                                                           <!--     <p class="child"id="child6">Govt. Girls School, Anwal Village</p>-->
                                                            </div>               
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 " style="width: 100%;">
                                                        <div class=" wrapper" id="parent10"style=" background-image: url(./rewater/15.JPG);background-repeat: no-repeat;background-size:cover;background-position: inherit;">
                                                            <div id="parent10" >
                                                          <!--      <p class="child"id="child7">Ecolat interiors</p>-->
                                                            </div>                                                                    
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 " style="width: 100%">
                                                        <div class=" wrapper" id="parent11"style=" background-image: url(./rewater/2.JPG);background-repeat: no-repeat;background-size: cover;background-position: center;">
                                                            <div id="parent11" >
                                                        <!--        <p class="child"id="child8">Hans Foundation, Khora</p>-->
                                                            </div>                                                                
                                                        </div> 
                                                    </div>
                                        </div>
                                    
                                                                                      
                                </div>
                            
                        <div class="col-md-6 col-sm-6 col-xs-6 right ecolats-left index_4" style="height: 100%;">
                            
                                    <p class="heading content"><tc style="font-family: Avenir_medium;">TREAT & RECYCLE WATER</tc><br><br><ice>REWATER</ice><p>
                                            <hr  style="float:left;height:6px;width:160px;border-radius:3px;background-color:#00bfa5;border:none"/><br><br>
                                    <p  class="elats_right" style="font-size: 15px;font-family: Avenir_medium;
        line-height: 1.5;">We are cleaning sewage streams and water bodies through eco-friendly biological interventions. We are waging a war on Water Crisis and Water Pollution with our innovative waste treatment system:<br><br>
                                    </p>
                                    <p class="p-text" >
                                        <img class="left small_icon"src="./assets/home/rectangle-14-copy-4_3.png" alt="">
                                        &nbsp;&nbsp;&nbsp;&nbsp;Treats waste water to a reusable effluent <span class="left_text_320">level</span><br><br>
                                    </p>
                                    <p class="p-text" >
                                            <img class="left small_icon"src="./assets/home/rectangle-14-copy-4.png" alt="">
                                            &nbsp;&nbsp;&nbsp;&nbsp;  Fully automated, no manual intervention<br><br>
                                    </p>
                                    <p class="p-text" >
                                            <img class="left small_icon"src="./assets/home/rectangle-14-copy-4_5.png" alt="">
                                            &nbsp;&nbsp;&nbsp;&nbsp;   Zero operation and maintenance cost<br><br>
                                    </p>
                                    <p class="p-text" >
                                            <img class="left small_icon"src="./assets/home/rectangle-14-copy-4_6.png" alt="">
                                            &nbsp;&nbsp;&nbsp;&nbsp;   Works on renewable energy<br><br>
                                    </p> 
                                    <p class="p-text" >
                                          <a href="rewater.php">  <input type="button" name="learn" value="LEARN MORE" > </a>                                
                                     </p>
                            </div>
                            
                        </div>
                                    
                    </div>
            </section>
            <div class="achievement-container " style="margin-top: 10%">
                <div class="col-md-12 text-center" >
                        <p class=" heading content text-uppercase pt-40" style="color: #fff">
                                Achievements
                            </p>
                            <p class="p-eco-text" style="">Our innovative & sustainable engineering, and its impactful execution<br> 
        has helped us achieve many feats in a short span.</p>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel owl-theme">
                                
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <div class="col-centered top" >
                                                        <img class="mc" src="./assets/home/mc-copy-2@3x.png">
                                                                
                                                </div>
                                                <div class=" text-center" style="background-color:#fff;overflow: hidden;">
                                                    <p class="heading-text"style="font-size: 16px;font-weight: 900">
                                                        Winner
                                                    </p>
                                                    <p class="p-eco-text1">Mass Challenge,<br>Israel</p>
                                                </div>

                        
                                        </div>
                        
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/awards11.jpg">       
                                            
                        
                                        </div>
                        
                                    </div>
                        
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                        <div class="col-centered top" style="">
                                                
                                            <img  src="./assets/home/ministry-of-science-technology-logo-copy-3@3x.png">       
                                                        
                                                    
                                        </div>
                                        <div class=" text-center" >
                                           <p class=""style="font-size: 16px;font-weight: 900;">Winner</p> 
                                           <p class="p-eco-text1 " >Indian Oil,<br> Startup Fund Grant</p>
                                        </div>    
                        
                                        </div>
                        
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/awards2.jpg">       
                                            
                        
                                        </div>
                        
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <div class="col-centered top" >
                                                    
                                                            <img id="ministry" src="./assets/home/ministry-of-science-technology-logo-copy-2@2x.png"                                   
                                                            >
                                                        
                                            </div>
                                            <div class=" text-center" style="background-color:#fff;">
                                              <p class="heading-text"style="font-size: 16px;font-weight: 900">Most Impactful Startup of India</p> 
                                              <p class="p-eco-text1">Ministry of Science and Technology,<br>
                                                    Government of India</p>
                                            </div>
                        
                                        </div>
                        
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/awards3.png">       

                                            
                        
                                        </div>
                        
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <div class="col-centered top" >
                                                        
                                                <img  src="./assets/home/sbi4.PNG">
                                                            
                                            </div>   
                                            <div class=" text-center" style="background-color:#fff;">
                                                <p class="heading-text"style="font-size: 16px;font-weight: 900">Winner</p>
                                                <p class="p-eco-text1">Best CSR practices,<br>
                                                        State Bank of India</p>
                                            </div>
                        
                                        </div>
                        
                                    </div>

                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/awards1.jpg">       
                        
                                        </div>
                        
                                    </div>  
                                    <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <div id="sulabh-img-container" class="col-centered top" >
                                                        <img id="sulabh-logo" src="./assets/home/sulabh-logo.png">
                                                                
                                                </div>
                                                <div class=" text-center" style="background-color:#fff;overflow: hidden;">
                                                    <p class="heading-text"style="font-size: 16px;font-weight: 900">
                                                        Felicitation for exemplary work in WASH sector
                                                    </p>
                                                    <p class="p-eco-text1">Sulabh International</p>
                                                </div>

                        
                                        </div>
                        
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/Sulabh_Photograph.JPG
">                                   
                        
                                        </div>
                        
                                    </div>
                                    <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <div class="col-centered top" >
                                                        <img id="cic-logo" src="./assets/home/cic-logo.png">
                                                                
                                                </div>
                                                <div class=" text-center" style="background-color:#fff;overflow: hidden;">
                                                    <p class="heading-text"style="font-size: 16px;font-weight: 900">
                                                        Best Startup Pitch 
                                                    </p>
                                                    <p class="p-eco-text1">Cambridge Innovation Centre,<br>  Cambridge Massachusetts</p>
                                                </div>

                        
                                        </div>
                        
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/IMG_1033.jpg">                                   
                        
                                        </div>
                        
                                    </div>              
                                <div class="item carousel-card" >
                                        <div class="card achievement-card " style="">
                                            <div class="col-centered top" >
                                                 <img id="brandeis"  src="./assets/home/mc-copy@2x.png">
                                                                    
                                            </div>
                                            <div class=" text-center" style="background-color:#fff;">
                                                    <p class="heading-text"style="font-size: 16px;font-weight: 900">
                                                      Winner 
                                                    </p>
                                                    <p class="p-eco-text1">
                                                            Students Appreciation Award,
        Brandeis Business School, Massachusetts
                                                    </p>
                                            </div>
                            
                                        </div>
                            
                                    </div>
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/IMG_7354.JPG">       
                                            
                        
                                        </div>
                        
                                    </div>
                               <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <div class="col-centered top" >
                                                    
                                                            <img id="sc" src="./assets/home/sdf2.jpg"                                   
                                                            >
                                                        
                                            </div>
                                            <div class=" text-center" style="background-color:#fff;">
                                              <p class="heading-text"style="font-size: 16px;font-weight: 900">Winner</p> 
                                              <p class="p-eco-text1">Aim Smart City Accelerator,<br>
                                                    powered by Microsoft</p>
                                            </div>
                        
                                        </div>
                        
                                </div>
                      
                                <div class="item carousel-card" >
                                        <div class="card achievement-card" style="">
                                            <img class="achievement-img" src="./assets/home/awards44.JPG">       
                                            
                        
                                        </div>
                        
                                    </div>
                      
                    </div>
                  </div>
            </div>
            <div class="container-fluid text-center resMedia">
                    <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="text-center media"><span style="width: 175px">IN THE MEDIA&nbsp;:</span> 
                       <span class="media_mention">
                            <img id="mdimg1"src="assets/home/group-5.svg">
                                <img id="mdimg2"src="assets/home/group-21.svg">
                                <img id="mdimg3"src="assets/home/ndtv-seeklogo-com.svg">
                             </span>
                            </p>
                    </div>
                </div>
            </div> 
        <!--    <div class="container">
        
                <div id="jssor_5" style="">
                        <!-- Loading Screen 
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                        </div>
                        <div data-u="slides" id=testmoni >
                            
                            <div>
                                
                                <div class="text-center" >
                                        
                                        <div style="position:absolute;top:3%;left:10%;right:20%;height:100%;font-family:Avenir_medium;;font-size:16px;  font-weight: 500;
                                        font-style: normal;
                                        font-stretch: normal;
                                        line-height: normal;
                                        letter-spacing: normal;
                                        text-align: center;
                                        color: rgba(0, 0, 0, 0.87);background-clip:padding-box;">
                                        <img class="expert_img1"src="./assets/home/comma2.png" style="left: -25%;
                                        height: 38px;
                                        width: 50px;
                                        position: relative;
                                        z-index: 2;
                                        opacity:0.3;
                                        top: 50px;">
                                        <img class="expert_img"src="./assets/home/testi.jpg" style="
                                        left: -22%;
                                        height: 80px;
                                        border-radius:50%;
                                        width: 80px;
                                        position: relative;
                                        z-index: 2;
                                        top: 65px;">
                                                <p class="" style="text-align: left;padding-left:40%;
                                                "> 
                                                
                                                <span class="expert_name"style="text-align: left;
                                                font-family: ProximaNovaSoft;
                                                font-size: 20px;
                                                font-weight: bold;
                                                font-style: normal;
                                                font-stretch: normal;
                                                line-height: 1.4;
                                                letter-spacing: normal;
                                                color: rgba(0, 0, 0, 0.87);"> Ariella Bernstein</span><br>
                                                
                                                        <span class="expert_desig" style="font-family: Avenir_medium;  
                                                        font-size: 16px;
                                                        font-weight: 500;
                                                        font-style: normal;
                                                        font-stretch: normal;
                                                        line-height: 1.38;
                                                        letter-spacing: normal;
                                                        color: rgba(0, 0, 0, 0.87);">Chief of Staff at Jerusalem Foundation</span>
                                                </p>
                                                   
                                                <p class="expert_info text-center" style="margin-top:34px; padding-left:8%;">
                                                        “This is a dummy text. Ariella has held senior Federal sector positions 
                                                        in labor law in the United States, and has expertis strategic analysis, public policy, marketing and public affairs.  Ariella has served as as Chief Operating Officer at Herzog Hospital’s Center for Psychological Trauma and International Relations Coordinator for former Member of Knesset Erel Margalit. 
                                                        She has a B.A. from Baruch College, CUNY and a Masters from Cornell University.“
                                                </p>
                                        </div>
                                </div>
                            </div>
                            <div>
                                
                                <div class="text-center">
                                        
                                        <div style="position:absolute;top:3%;left:10%;right:20%;height:100%;font-family:Avenir_medium;;font-size:16px;  font-weight: 500;
                                        font-style: normal;
                                        font-stretch: normal;
                                        line-height: normal;
                                        letter-spacing: normal;
                                        text-align: center;
                                        color: rgba(0, 0, 0, 0.87);background-clip:padding-box;">
                                        <img class="expert_img1"src="./assets/home/comma2.png" style="left: -25%;
                                        height: 38px;
                                        width: 50px;
                                        position: relative;
                                        z-index: 2;
                                        opacity:0.3;
                                        top: 50px;">
                                        <img class="expert_img"src="./assets/home/testi.jpg" style="
                                        left: -22%;
                                        height: 80px;
                                        border-radius:50%;
                                        width: 80px;
                                        position: relative;
                                        z-index: 2;
                                        top: 65px;">
                                                <p class="" style="text-align: left;padding-left:40%;
                                                "> 
                                                
                                                <span class="expert_name"style="text-align: left;
                                                font-family: ProximaNovaSoft;
                                                font-size: 20px;
                                                font-weight: bold;
                                                font-style: normal;
                                                font-stretch: normal;
                                                line-height: 1.4;
                                                letter-spacing: normal;
                                                color: rgba(0, 0, 0, 0.87);"> Ariella Bernstein</span><br>
                                                
                                                        <span class="expert_desig" style="font-family: Avenir_medium;  
                                                        font-size: 16px;
                                                        font-weight: 500;
                                                        font-style: normal;
                                                        font-stretch: normal;
                                                        line-height: 1.38;
                                                        letter-spacing: normal;
                                                        color: rgba(0, 0, 0, 0.87);">Chief of Staff at Jerusalem Foundation</span>
                                                </p>
                                                   
                                                <p class="expert_info text-center" style="margin-top:34px; padding-left:8%;">
                                                        “This is a dummy text. Ariella has held senior Federal sector positions 
                                                        in labor law in the United States, and has expertis strategic analysis, public policy, marketing and public affairs.  Ariella has served as as Chief Operating Officer at Herzog Hospital’s Center for Psychological Trauma and International Relations Coordinator for former Member of Knesset Erel Margalit. 
                                                        She has a B.A. from Baruch College, CUNY and a Masters from Cornell University.“
                                                </p>
                                        </div>
                                </div>
                            </div>
                            <div>
                                
                                <div class="text-center">
                                        
                                        <div style="position:absolute;top:3%;left:10%;right:20%;height:100%;font-family:Avenir_medium;;font-size:16px;  font-weight: 500;
                                        font-style: normal;
                                        font-stretch: normal;
                                        line-height: normal;
                                        letter-spacing: normal;
                                        text-align: center;
                                        color: rgba(0, 0, 0, 0.87);background-clip:padding-box;">
                                        <img class="expert_img1"src="./assets/home/comma2.png" style="left: -25%;
                                        height: 38px;
                                        width: 50px;
                                        position: relative;
                                        z-index: 2;
                                        opacity:0.3;
                                        top: 50px;">
                                        <img class="expert_img"src="./assets/home/testi.jpg" style="
                                        left: -22%;
                                        height: 80px;
                                        border-radius:50%;
                                        width: 80px;
                                        position: relative;
                                        z-index: 2;
                                        top: 65px;">
                                                <p class="" style="text-align: left;padding-left:40%;
                                                "> 
                                                
                                                <span class="expert_name"style="text-align: left;
                                                font-family: ProximaNovaSoft;
                                                font-size: 20px;
                                                font-weight: bold;
                                                font-style: normal;
                                                font-stretch: normal;
                                                line-height: 1.4;
                                                letter-spacing: normal;
                                                color: rgba(0, 0, 0, 0.87);"> Ariella Bernstein</span><br>
                                                
                                                        <span class="expert_desig" style="font-family: Avenir_medium;  
                                                        font-size: 16px;
                                                        font-weight: 500;
                                                        font-style: normal;
                                                        font-stretch: normal;
                                                        line-height: 1.38;
                                                        letter-spacing: normal;
                                                        color: rgba(0, 0, 0, 0.87);">Chief of Staff at Jerusalem Foundation</span>
                                                </p>
                                                   
                                                <p class="expert_info text-center" style="margin-top:34px; padding-left:8%;">
                                                        “This is a dummy text. Ariella has held senior Federal sector positions 
                                                        in labor law in the United States, and has expertis strategic analysis, public policy, marketing and public affairs.  Ariella has served as as Chief Operating Officer at Herzog Hospital’s Center for Psychological Trauma and International Relations Coordinator for former Member of Knesset Erel Margalit. 
                                                        She has a B.A. from Baruch College, CUNY and a Masters from Cornell University.“
                                                </p>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                    </svg>
                                </div>
                            </div>
                        <!-- Arrow Navigator
                        <div id="lb" data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <img src="assets/home/left.svg">
                        </div>
                        <div id="rb" data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <img src="assets/home/right.svg">
                        </div>
                    </div>
        </div>    -->    
        <!-- partners section -->
        <div id="partner-section" class="container-fluid mt-90" style="    margin-bottom: 2%; " >
        <div class="row">
            <div class="col-md-12 text-center "> 
                <p class="heading content partner_sec">OUR PARTNERS</p>
            </div>
            <div class="col-md-12 partner ptb-30" >
                <div class="container-fluid" >
                        <div class="col-md-6 col-sm-6 col-xs-12 left partner-img-wrapper" >
                                <img id="partner1"src="assets/home/iitr@3x.png" >
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 left partner-p-wrapper">
                                <div class="vl1 left mt-10" style="border-left: 4px solid #00bfa5;height: 56px;border-radius: 2px;margin-right: 20px;"></div>
                                <p id="roorkee"class="p-text pt-15 left" style="font-size: 17px;line-height: 1.5;" >
                                    
                                    IIT Roorkee is helping us with the 
        development of technology for our smart toilet.
                                </p>
                        </div>
                </div>
                
            </div>
            <div class="col-md-12 partner ptb-30">
                    <div class="container-fluid">
                            <div class="col-md-5 col-sm-5 col-xs-12 left partner-img-wrapper">
                                    <img id="partner2" src="assets/home/uns@3x.png" >
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 left partner-p-wrapper">
                                    <div class="vl2 left mt-10" style="border-left: 4px solid #00bfa5;height: 56px;border-radius: 2px;margin-right: 20px;"></div>
        
                                    <p id="surrey"class="p-text pt-15 left" style="font-size: 17px;line-height: 1.5;">
                                        University of Surrey, UK is helping us with the 
        development of an efficient waste treatment system.
                                    </p>
                            </div>
                    </div>
                    
            </div>
            <div class="col-md-12 partner ptb-30">
                <div class="container-fluid pl-30 pr-30" >
                        <div class="col-md-4 col-sm-4 col-xs-12 left partner-img-wrapper" style="">
                                <img src="assets/home/ministry-of-science-technology-logo-copy-3_2@3x.png" id="partner3">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12 left io partner-p-wrapper">
                                <div class="vl3 left mt-10" style="border-left: 4px solid #00bfa5;height: 56px;border-radius: 2px;margin-right: 20px;"></div>
        
                                <p id="oil"class="p-text pt-15" style="font-size: 17px;line-height: 1.5;">
                                    Indian Oil is providing us with funding and mentoring 
        for the development of smart toilet technologies.
                                </p>
                            </div>
                </div>
                        
            </div>
        </div>
        </div>
</div>
        <!-- end -->
        <img id="foot-img"src="assets/home/123.JPG"/ style="    width: 100%;">
        <img id="foot-img2"src="assets/home/123.PNG"/ style="    width: 100%;">
        <footer id="contact"style="    margin-top: -34%;">
        <div class="col-md-4 footer-left" >
                      <div class='demopadding micon' >
                              <div class='footer_icon' ><img src="assets/home/linkedin.png"/></div>
                                <div class='footer_icon'><img src="assets/home/fb.png"/></div>
                                <div class='footer_icon'><img src="assets/home/youtube.png"/></div>
                      </div>  
                      <div class="demopadding"  >
                            <p class="contact">
                                011-40196604<br>
                                contact@sukriti.ngo<br><br>
                                Registered Office :<br>
                                190, DDA Office Complex,<br>
                                Jhandewalan Phase 1 ,<br> Delhi 110055, India
        
                            </p>
                      </div>
                      <div class="demopadding ">
                          <img class="bottom-logo"src="./assets/home/group.svg" alt="logo">
                          <img class="bottom-logo-u"src="./assets/home/u.png" alt="logo">
                      </div>      
                  
              </div>
              <div class="col-md-4 footer-left" >
                  
                     <div class="container form_cont">
                            <form id="contactForm" action="index.php" method="post">
                                <div class="form-group">
                                  <div class="form-inline" >
                                <div class="form-group first-group left" style="margin-right: 3%;">
                                  <input type="text" class="form-control contact-first-input" id="fname" name="fname" placeholder="First Name" required data-error="Please enter your name" style="border-radius: 20px;">
                                </div>
                                <div class="form-group first-group right">
                                  <input type="text" class="form-control contact-first-input" id="lname" name="lname" placeholder="Last Name" required data-error="Please enter your Last name" style="border-radius: 20px;">
                                </div>
                              </div>
                                </div>
                                <div class="form-group">
                                  <input type="email" id="email" class="form-control" name="email" placeholder="Email address" required data-error="Please enter your email" style="">
                                </div>
                                <div class="form-group">
                                   <textarea class="form-control msg" rows="5"placeholder="Message..." name="msg" id="message" required ></textarea>
                                 </div>
                                    <button type="submit" id="submit" class="btn submit_butn">CONTACT US</button>
                            </form>
                             </div>  
              </div>
              <div class="col-sm-4 footer-left" >
                      
                      <div class="demopadding"  >
                            <p class="contact contact-right">

                                Corporate Office :<br>
                                1567, Sector 15, Part II<br>
                                
                                Gurugram, Haryana - 122022
                                <br><br>
                                Production Centre :<br>

                                Sukriti Social Foundation<br>
                                Opposite Vinay High School<br>
                                Chandu Sultanpur Road<br>
                                Near Sultanpur National Park<br>
                                Gurugram, Haryana - 122022
                                                                
                                
                            </p>
                      </div>
                            
                  
              </div>
              </footer>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>

<script type="text/javascript">jssor_5_slider_init();</script>
<script  src="js/index.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

<script>
$('ul.nav').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $('#'+$href).offset();
    $('body').animate({ scrollTop: $anchor.top });
    return false;
});
</script>
<script>
      document.querySelector( "#nav-toggle" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
  })
$(document).ready(function(){
  // Add smooth scrolling to all links
  setTimeout(function(){ $(".phpresponse").hide(); }, 5000);
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>
