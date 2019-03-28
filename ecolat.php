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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
     <title>
                SUKRITI
     </title>
     <link rel="icon" type="image/ico" href="assets/home/title-logo.PNG" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>

    <link  rel="stylesheet" href="./css/style.css"/>
    <link  rel="stylesheet" href="./css/responsive.css"/>
    <link rel="stylesheet" href="./css/slider.css"/>
    <link rel="stylesheet" href="./css/position.css"/>

    <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>

<style>

    </style>
     <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 600,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 3
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1380;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
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

jssor_2_slider_init = function() {

var jssor_2_SlideshowTransitions = [
  {$Duration:800,$Opacity:2}
];

var jssor_2_options = {
  $AutoPlay: 1,
  $SlideshowOptions: {
    $Class: $JssorSlideshowRunner$,
    $Transitions: jssor_2_SlideshowTransitions,
    $TransitionsOrder: 1
  },
  $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$
  },
  $BulletNavigatorOptions: {
    $Class: $JssorBulletNavigator$
  }
};

var jssor_1_slider = new $JssorSlider$("jssor_2", jssor_2_options);

/*#region responsive code begin*/

var MAX_WIDTH = 400;

function ScaleSlider() {
    var containerElement = jssor_1_slider.$Elmt.parentNode;
    var containerWidth = containerElement.clientWidth;

    if (containerWidth) {

        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

        jssor_1_slider.$ScaleWidth(expectedWidth);
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
jssor_3_slider_init = function() {

var jssor_3_options = {
  $AutoPlay: 1,
  $AutoPlaySteps: 1,
  $SlideDuration: 160,
  $SlideWidth: 240,
  $SlideSpacing: 3,
  $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$,
    $Steps: 5
  },
  $BulletNavigatorOptions: {
    $Class: $JssorBulletNavigator$
  }
};

var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);

/*#region responsive code begin*/

var MAX_WIDTH = 1340;

function ScaleSlider() {
    var containerElement = jssor_3_slider.$Elmt.parentNode;
    var containerWidth = containerElement.clientWidth;

    if (containerWidth) {

        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

        jssor_3_slider.$ScaleWidth(expectedWidth);
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

$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});
        
    </script>
</head>
<body >
    <?php
    if($success==1 ){
	//echo '<p align="center" class="phpresponse">Your feedback was sent successfully</p>';
	echo '<div class="phpresponse alert alert-success"><strong>Success!</strong> Your message was sent successfully.</div>';
}
else
{ if($success==0 && $_SERVER["REQUEST_METHOD"]=="POST"){
	echo '<div class="phpresponse alert alert-danger">
    <strong>Error!</strong> Couldn\'t send your message. Try gain later.
  </div>';
  }	
}   ?>
        <nav class="navbar navbar-expand-md avinash " >
                <a class="navbar-brand logo" href="index.php" >
                        <img class=""src="./assets/home/group-3.svg" style=""/>
                    </a>
            <button id="nav-toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="color: white">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ecolat.php">ECOMITRA</a>
                    </li> 
                    <li class="nav-item">
                            <a class="nav-link" href="rewater.php">REWATER</a>
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
<div class="amnd" style="display:block;position: relative;">   
<section class="Banner" style="height:92.5vh;">
    <div class="imageBanner img-responsive bannerEcolat">
        <img src="./assets/ngo/ps-img-6674.png">
    </div>
    <p id ="bannerTextEcolat" style=""> Smart. Simple. <ic>Sustainable.</ic></p>
</section>

<!-- slider 1 section -->
<div class="container-fluid slide1" style="padding-left: 0px;padding-right: 0px;">
        <div class="text-center"><p class="heading content elat_h"style="padding-top:8px;padding-bottom:10px">WHY SANITATION ?</p></div>
        <div id="jssor_1" style="">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/ngo/spin.svg" />
            </div>
            <div data-u="slides" style="">
                            
                <div>
                    <img data-u="image" src="assets/ngo/group3.jpg" style="padding-right: 20px;"/>
                </div>
                <div>
                    <img data-u="image" src="assets/ngo/group4.jpg" style="padding-right: 20px"/>
                </div>
                <div>
                    <img data-u="image" src="assets/ngo/group2.jpg" style="padding-right: 20px"/>
                </div>
                <div>
                    <img data-u="image" src="assets/ngo/group1.jpg" style="padding-right: 20px"/>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:-25px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5000"></circle>                        
                    </svg>
                </div>
            </div>
            
        </div>                        
    </div>
<!-- end -->
<!-- explanation -->
<div class="container-fluid">
        <div class="col-md-12 text-center ">
                <p class="p-text el_head" style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;"><br/><br>Today, public toilets in India suffer from three major challenges:<br><br></p>
        </div>
        <div class="col-md-12 major-challenge elats_sec1">
                
                    <div class="row " style="width: 100%">
                        <div class="head-challenge" >
                                <div class="col-md-3 col-sm-3 col-xs-12 left sec1_sub1" >
                                        
                                            <div class="col-md-5 col-sm-5 col-xs-12 left sec1_1">
                                                <img class="image small-icon small-icon_1"src="./assets/home/rectangle-14-copy-5@3x.png">
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12 left">
                                                <p class="heading-text cmaint">Constant maintenance</p>
                                            </div>
                                        
                                    </div>
                                <div class="col-md-5 col-sm-5 col-xs-12 left sec1_sub1" style="">
                                            
                                                    <div class="col-md-3 col-sm-3 col-xs-12 left sec1_2">
                                                        <img class="image  small-icon pl-0 pr-0" src="./assets/home/rectangle-14-copy-3@3x.png">
                                                    </div>
                                                    <div class="col-md-9 col-sm-9 col-xs-12 left" style="padding-right: 0;padding-left: 0">
                                                        <p class="heading-text">Uninterrupted water supply to meet high water requirements</p>
                                                    </div>
                                            
                                    </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 left sec1_sub1" >
                                            
                                                    <div class="col-md-3 col-sm-3 col-xs-12 left sec1_3">
                                                        <img class="image small-icon"src="./assets/home/rectangle-14-copy-6@3x.png" >
                                                    </div>
                                                    <div class="col-md-9 col-sm-9 col-xs-12 left" style="padding-right: 0;padding-left: 0">
                                                        <p class="heading-text ">Inadequate waste
                                                                disposal mechanisms</p>
                                                    </div>
                                                
                                    </div>
                        </div>
                    
                </div>
    
            </div>
    
            <div class="col-md-12 major-challenge sec2 mb-40 " >
                    <div class="container " >                        
                            <div class="row">
                                    <div class=" combination" >                                    
                                            <p class="normal   p-text elat_1" style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                                                    A combination of these three factors forces the general public, especially women to use open spaces for urination and defecation. This not only compromises their dignity and safety, but also their health, causing various diseases, chronic illness, malnutrition, and on a much larger scale; the loss of human resource!
                                            </p>
                                                                
                                    </div>
            
                            </div>
                        </div>
                    
                </div>
    </div>
<!-- end -->
<!-- ecolat start -->
<div class="container-fluid mb-100 el_style" style="margin-top:12%;" >
        <div class="col-md-12">
            <p class="heading content"><span class="el_h1">ECOMITRA </span> <span class="el_h2"><span id="colon">:</span> A SMART SOLUTION</span>
            <hr class="el_hr"/>
            <br><br></p>
        </div>
        <div class="col-md-12 solution" style="width: 100%;height:auto;">
            <div class="col-md-7 left el_align">
                    <div class="row el_align1 el_1">
                                <section class="col-md-1 left el_align2" >
                                    <img style="    margin-top: 12%;"src="assets/home/rectangle-14-copy-6.svg"/> 
                                     
                                 </section>
                                 <section class="col-md-11 left m-0 el_align3" >
                                        <p class="p-text " style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                                            <ib style="font-family: Avenir_heavy">Smart hygiene maintenance: </ib>
                                            eliminates manual cleaning with auto flushing and floor cleaning. It also decides the optimum water required.
                                        </p> 
                                 </section>
                    </div>
                    <div class="row el_align1 el_2">
                            <section class="col-md-1 left el_align2">
                                    <img style="    margin-top: 12%;" src="assets/home/rectangle-14-copy-6_one.svg"/> 
                                     
                                 </section>
                                 <section class="col-md-11 left m-0 el_align3">
                                         <p class="p-text " style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;" >
                                             <ib style="font-family: Avenir_heavy">Smart entry management:</ib>
                                             stops user entry in case of empty water tanks or chokes, a patented sensorless tech. <br></p>
                                 </section>
                    </div>
                    <div class="row el_align1">
                            <section class="col-md-1 left el_align2">
                                    <img style="    margin-top: 12%;" src="assets/home/rectangle-14-copy-4.svg"/> 
                                     
                                 </section>
                                 <section class="col-md-11 left m-0 el_align3">
                                         <p class=" p-text " style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                                             <ib style="font-family: Avenir_heavy">On-site waste water treatment:</ib> 
                                             saves 80% water by recycling it for flushing, floor cleaning, etc. A patented model, it is maintenance free with zero operational costs.<br></p> 
                                 </section>
                    </div>
                    <div class="row el_align1">
                            <section class="col-md-1 left el_align2">
                                    <img style="    margin-top: 2%;" src="assets/home/rectangle-14-copy-7.svg"/> 
                                     
                                 </section>
                                 <section class="col-md-11 left m-0 el_align3">
                                         <p class=" p-text " style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                                             <ib style="font-family: Avenir_heavy">Smart health monitoring:</ib> conveys maintenance schedule to central monitoring station based on the toilet’s health.<br></p> 
                                 </section>
                    </div>
                    <div class="row el_align1">
                            <section class="col-md-1 left el_align2">
                                    <img src="assets/home/rectangle-14-copy-4_one.svg"/> 
                                     
                                 </section>
                                 <section class="col-md-11 left m-0 el_align3">
                                         <p class=" p-text mb-30" style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                                             <ib style="font-family: Avenir_heavy">Runs on solar energy:</ib> no grid connection needed.<br></p> 
                                 </section>
                    </div>
                    <div class="row el_align1">
                            <section class="col-md-1 left el_align2">
                                    <img src="assets/home/rectangle-14-copy-7_one.svg"/> 
                                     
                                 </section>
                                 <section class="col-md-11 left m-0 el_align3" style="padding-right: 0% !important;">
                                         <p class=" p-text " style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                                             <ib style="font-family: Avenir_heavy">Robust Structure:</ib> Our toilet is a strong and robust RCC superstructure. The use of metallic fixtures and sturdy fittings ensure their use over a long period of time and reduce the probability and need of replacement.<br></p> 
                                 </section>
                    </div>
                    
                        
                           
            </div>
            <div class="col-md-5 left">
            <div onclick="my_func()" class="ev_container">
            <video id="player" class="elat_video" poster="elats/video_img.JPG" >
                  <source src="elat_vid.mp4" type="video/mp4">
            </video>
                <img id="play_btn" class="e_play_btn" src="assets/home/play.png">
            </div>
            </div>
            <script>
            function my_func(){
                if(document.getElementById('player').paused){
                    document.getElementById('player').play()
                    $('#play_btn').hide();
                }
                else{
                    document.getElementById('player').pause()
                    $('#play_btn').show();
                }
            };
            </script>
       <!--     <div class="col-md-5 left slide2" style="">
                    <div class="col-md-12 slide" style="">
                        <div id="jssor_2" style="">
                            <!-- Loading Screen
                            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left: 10px;width:100%;height:100%;border-radius:50%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                            </div>
                            <div id="test" data-u="slides" style="">
                                <div class="slideimage">
                                    <img data-u="image" src="assets/home/boys-1-copy@3x.jpg" />
                                </div>
                                <div class="slideimage">
                                    <img data-u="image" src="assets/home/group-7@3x.jpg" />
                                </div class="slideimage">
                                <!-- <div>
                                    <img data-u="slideimage" src="assets/home/group-7-copy-4@3x.png" />
                                </div> 
                                <div class="slideimage">
                                    <img data-u="image" src="assets/home/dscn-1014@3x.png" />
                                </div>
                                <div class="slideimage">
                                    <img data-u="image" src="assets/home/dscn-1014-copy-3@3x.png" />
                                </div>
                                
                                
                                
                            </div>
                            <!-- Bullet Navigator 
                            <div data-u="navigator" class="jssorb051" style="" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                    <div data-u="prototype" class="i" style="">
                                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left: 3px;width:100%;height:100%;">
                                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                        </svg>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    
            </div>
        </div>-->
    </div>
    </div>
    <!-- slider_3 starts -->
<div class=" slide3" style="background-color: #00bfa5;width: 100%;">

    <div id="jssor_3" >
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:240;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/ngo/spin.svg" />
            </div>
            <div data-u="slides" style="">
                <div class="s3">
                    <img data-u="image" src="./assets/home/15.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_7486.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8108.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/DSC_0098.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/DSC_0284.png" />
                </div>
                 <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8088.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/DSC_0324.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/DSC_02572.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_0754.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8109.png" />
                </div>
				<div class="s3">
                    <img data-u="image" src="./assets/home/IMG_0818.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_0859.png" />
                </div>                
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_1091.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_1160.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8125.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8171.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/DSC_0305.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8195.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8219.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_08751.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8249.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_08831.png" />
                </div>
                <div class="s3">
                    <img data-u="image" src="./assets/home/IMG_8233.png" />
                </div>
               
            </div>
            <!-- Bullet Navigator -->
            
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora073" style="width:56px;height:56px;top:40px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <img src="./assets/home/oval-4-copy-4.svg" alt="">
            </div>
            <div data-u="arrowright" class="jssora073" style="width:56px;height:56px;top:40px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <img src="./assets/home/oval-4.svg" alt="">
            </div>
        </div> 
</div> 
<!-- end -->
<!-- impact starts -->
<div class=" res" style="background-color: #00bfa5;">             

    
        <div class="container-fluid pl-0 pr-0"style="background-color: antiquewhite;">        
                        <div class="col-md-4 left  pt-0 heading-text " id="block-text1" >
                            
                                <p class="block-text" style="   
    color: #fffffff2;">EcoMitra saves 0.5 million litres of water per toilet every year</p>
                        </div>
                        <div class="col-md-4 left pt-0 heading-text pl-0 " id="block-text2" >
                                
                                <p class="block-text" style="   
    color: #fffffff2;">Prevents soil and water degradation caused by dumping of untreated waste</p>
                        </div>
                        <div class="col-md-4 left pt-0 heading-text pl-0 pr-0 " id="block-text4" >
                                
                                <p class="block-text" style="   
    color: #fffffff2;">Solar panels save 1,000 units of electricity per Ecomitra every year</p>
                        </div>
            
        </div>
    
    </div>
    <div class="container-fluid  " style="    padding-top: 8%;
    padding-bottom: 2%;">
        
            <div class="row">
                    <div class=" impact">
                            <p class="heading content text-center about_h">IMPACT</p>
                            <hr class="about_hr">
                            <p class="p-text" style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;padding-top: 3%;text-align:center;">
                                    In the first five years, we are looking at directly impacting<b> 5 million Indians </b>who have to use unhygienic public toilets at their workplaces or while commuting. We are also looking at impacting students in government schools and institutions which do not have a single, well-maintained toilet within their premises; girls and women who have to change their diets out of the fear of safety while defecating in open, or who suffer from diseases due to unavailability of proper sanitary care; and the thousands of people who use unhygienic, poorly-maintained public toilets every day throughout the country.
                            </p>
                    </div>
            </div>
        
    </div>
<!--footer section  -->
<!-- <div class="row map_sec">
<iframe src="https://www.google.com/maps/d/embed?mid=1ECUKCNq6JiaqAQAJWQO8oCQduK2-JXI1" width="640" height="480" class="map_dim"></iframe>
<p class="map_text">EcoMitra built so far</p>
</div> -->
<img id="foot-img" src="assets/home/123.JPG"/ style="    width: 100%;">
<img id="foot-img2" class="footer_img_ecomitra"src="assets/home/123.PNG"/ style="    width: 100%;">
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
                            <form id="contactForm" action="ecolat.php" method="post">
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
<!-- end -->
    <script type="text/javascript">jssor_1_slider_init();</script>

    <script type="text/javascript">jssor_2_slider_init();</script>
    <script type="text/javascript">jssor_3_slider_init();</script>
    <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script>
        
$(document).ready(function() {
	setTimeout(function() {
    	$(".phpresponse").hide();
    }, 5000);
    // $("div.s3").parent('div').css("width", "400px");
    // $("img").parent('div').css("width", "400px");
    function checkWidth() {
        var windowSize = $(window).width();

        if (window.screen.width  <= 480) {
            $("#test").children().css({"color": "red", "width":"400px","height":"400px"});
            console.log("screen width is less than 480");
        }
        else if (window.screen.width  <= 719) {
            console.log("screen width is less than 720 but greater than or equal to 480");
        }
        else if (window.screen.width  <= 959) {
            console.log("screen width is less than 960 but greater than or equal to 720");
        }
        else if (window.screen.width > 960) {
            console.log("screen width is greater than or equal to 960");
        }
    }

    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
});

document.querySelector( "#nav-toggle" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
  })
$('ul.nav').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $('#'+$href).offset();
    $('body').animate({ scrollTop: $anchor.top });
    return false;
});
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
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
    <!-- #endregion Jssor Slider End -->
</body>
</html>
