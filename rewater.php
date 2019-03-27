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
    <link rel="stylesheet" href="./css/position.css">
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

var MAX_WIDTH = 350;

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
<body>
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
    <button id="nav-toggle"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="color: white">
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
                <a class="nav-link" href="ecolat.php">ECOMITRA</a>
            </li> 
            <li class="nav-item">
                    <a class="nav-link active" href="rewater.php">REWATER</a>
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
        <section class="Banner" style="">
            <div class="imageBanner img-responsive">
                    <img src="./assets/ngo/rewater_bg.png">
            </div>
            <p id ="bannerTextRewater" style=""> Regenerating Water. Rejuvenating <ic>Lives.</ic></p>
        </section>

        <div class="container-fluid slide1" style="padding-left: 0px;padding-right: 0px;">
            <div class="text-center"><p class="heading content rewater_h"style="padding-top:8px;padding-bottom:10px">WHY RECYCLE WATER ?</p></div>
            <div id="jssor_1" class="jss_r" style="position:relative;margin:0 auto;top:0px;left:0px;width:1380px;height:240px;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/ngo/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1380px;height:240px;overflow:hidden;">
                                
                    
                    <div>
                        <img data-u="image" src="assets/ngo/group-26@3x.jpg" style="padding-right: 20px"/>
                    </div>
                    <div>
                        <img data-u="image" src="assets/ngo/group-26-copy-3@2x.jpg" style="padding-right: 20px"/>
                    </div>
          <div>
                        <img data-u="image" src="assets/ngo/group-29@3x.jpg" style="padding-right: 20px"/>
                    </div>
                    
                    <div>
                        <img data-u="image" src="assets/ngo/group-26-copy-2@3x.jpg" style="padding-right: 20px"/>
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
   <!-- Challenge section -->
    <div class="container ">
        <div class="col-md-12 major-challenge sec2 rewater_sec2 mb-40 mt-40" >    
            <div class="container " >                        
                <div class="row">
                        <div class=" combination" >                                    
                                <p class="normal   p-text" style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                                   ‘Water crisis’ has become a house-hold term these days with more and more cities on the brink of a water doomsday. There are only two ways to make clean water available: one is to conserve it, and the other is  to reuse it. The latter is where we step in.
                                </p>
                                                    
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!--end  -->
    <!-- ecolat start -->
<div class="container-fluid mb-100" style="margin-top:12%;" >
        <div class="col-md-12">
                <p class="heading content"><span class="el_h1">REWATER </span> <span class="el_h2">REGENRATING WATER</span>
                <hr class="el_hr"/>
                <br><br></p>
        </div>
        <div class="col-md-12 solution" style="width: 100%;height:auto;">
            <div class="col-md-7 left el_align">
                    <div class="row el_align1">
                            <section class="col-md-1 left el_align2" >
                                <img src="assets/home/rectangle-14-copy-7_one.svg"/> 
                                 
                             </section>
                             <section class="col-md-11 left m-0 el_align3 rewater_el1" >
                                    <p class="p-text " style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;">
                                        <ib>Prefabricated waste treatment unit:</ib> simple and quick underground installation.
                                    </p> 
                             </section>
                </div>
                <div class="row el_align1">
                        <section class="col-md-1 left el_align2">
                                <img src="assets/home/rectangle-14-copy-14.svg"/> 
                                 
                             </section>
                             <section class="col-md-11 left m-0 el_align3  rewater_el2">
                                     <p class="p-text "style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;" ><ib>Fully automated:</ib>
                                         self-functioning unit that requires no manual intervention.                                  
                                    </p>            
                            </section>
                </div>
                <div class="row el_align1">
                        <section class="col-md-1 left el_align2">
                                <img src="assets/home/rectangle-14-copy-7_two.svg"/> 
                                 
                             </section>
                             <section class="col-md-11 left m-0 el_align3">
                                     <p class=" p-text "style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;" ><ib>Uses hybrid technology:</ib> 
                                         produces minimum amount of foul gases.
                                        <br></p> 
                             </section>
                </div>
                
                <div class="row el_align1">
                        <section class="col-md-1 left el_align2">
                                <img src="assets/home/rectangle-14-copy-4.svg"/> 
                                 
                             </section>
                             <section class="col-md-11 left m-0 el_align3">
                                     <p class=" p-text mb-20"style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;" ><ib>Recycles black water:</ib> 
                                         safe for non-potable use such as washing, flushing, cooling, horticulture, etc.
                                        <br></p> 
                             </section>
                </div>
                <div class="row el_align1">
                        <section class="col-md-1 left el_align2">
                                <img src="assets/home/rectangle-14-copy-4_one.svg"/> 
                                 
                             </section>
                             <section class="col-md-11 left m-0 el_align3">
                                     <p class=" p-text "style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;" ><ib>Runs on solar energy:</ib>  
                                         no grid connection needed.<br></p> 
                             </section>
                </div>
                <div class="row el_align1">
                    <section class="col-md-1 left el_align2">
                            <img src="assets/home/rectangle-14-copy-4_one.svg"/> 
                             
                    </section>
                    <section class="col-md-11 left m-0 el_align3">
                                 <p class=" p-text " style="padding-top: 5px"><ib>Zero operational costs.</ib>  
                                     <br></p> 
                    </section>
                </div>
                
                        
                           
            </div>
      <div class="col-md-5 left">
      <div onclick="my_func()" class="rv_container">
      <video id="player" class="rewater_video" poster="rewater/10.JPG" >
          <source src="rewater_vid.mp4" type="video/mp4">
      </video>
        <img id="play_btn" class="r_play_btn" src="assets/home/play.png">
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
                            <div data-u="slides" style="">
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
    
<!-- end -->

<!-- slider_3 starts -->
<div class=" slide4" style="background-color: #00bfa5;width: 100%;">

        <div id="jssor_3" >
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:240;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/ngo/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1340px;height:240px;overflow:hidden;">
                    
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
    <div id="res3"class=" res" style="background-color: #00bfa5;">             
            <div class="container-fluid">
                <div class="text-center re_ensure" style="
                font-family: ProximaNovaSoft-Bold;
                font-size: 24px;
                font-weight: bold;
                font-style: normal;
                font-stretch: normal;
                line-height: 1.33;
                letter-spacing: normal;
                text-align: center;
                color: #ffffff;
                    padding-bottom: 20px;">
                    REWATER ENSURES:
                </div>
                <div class="row">        
                                <div class="container-fluid rewater_ensu" style="">
    
                                    <div class="col-md-3 left  pt-0 heading-text p-0" id="block-text11" >
                                    
                                        <p class="block-text">BOD < 10mg/l</p>
                                    </div>
                                    <div class="col-md-3 left pt-0 heading-text p-0" id="block-text22">
                                            
                                            <p class="block-text">COD < 100mg/l</p>
                                    </div>
                                    <div class="col-md-3 left pt-0 heading-text p-0" id="block-text33">
                                            
                                            <p class="block-text">TSS < 20mg/l</p>
                                    </div>
                                    <div class="col-md-3 left pt-0 heading-text p-0" id="block-text44">
                                            
                                        <p class="block-text">Coliforms < 10MPN</p>
                                    </div>
                                </div>
                    
                </div>
            </div>
        </div>
    
<!-- end -->
<!-- story section  -->

<div class="container-fluid  pb-100 rewater_a" style="margin-top:8%;">
        
        <div class="container-fluid impact reju">
                <div class=" text-center pb-20">
                        <p class="heading content text-uppercase rewater_h" style="text-align: center">
                            Rejuvenation of water bodies</p>
                            <hr class="about_hr">
                </div>
                <div class="row">
                        
                        <p class="p-text" style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;">
We are working to clean polluted rivers and lakes, and to make them conducive to aquatic flora and fauna. 
This will not only help the ecosystem, but also help tourism and livelihood of the people
                            supported by these water bodies. We aim for long term and permanent
                            solutions with this effective methodology:
                        </p>

                </div>
        </div>
        <div class="container mt-30 rewater_baseline">
            <div class="row">
                
                        <div class="col-md-4 left">
                            <p class="p-text rewater1" style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;">
                                <ab style="font-family: Avenir_heavy">Baseline survey:</ab>
                                &nbsp;<span class="rewater2">finding parameters to define
                                the actual problems.</span>
                            </p>
                        </div>
                        <div class="col-md-4 left">
                            <p class="p-text rewater1" style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;">
                                <ab style="font-family: Avenir_heavy">Custom proposal:</ab>&nbsp;<span class="rewater2">solutions are designed based on each survey.</span>
                            </p>
                        </div>
                        <div class="col-md-4 left">
                            <p class="p-text rewater1" style="font-family: Avenir_book;
line-height: 1.6;
font-weight: normal;">
                                <ab style="font-family: Avenir_heavy">Sustainable:</ab>&nbsp;<span class="rewater2"> automated , energy efficient, and low cost solutions.</span>
                            </p>
                        </div>
                
            </div>
        </div>
</div>


<!-- work -->
<div class=" mt-50 progres" style="padding-left: 0px;padding-right: 0px;margin-left: 5%;width: 92%;margin-right: 5%;    padding-bottom: 1%;" >
        <div class="row" >
                <div class="col-md-8 left pt-15 r_align1">
                    <p class="p-text r_align2" style="font-family: Avenir_heavy;font-size:22px;">Cleaning the waste stream in Bhowali town, Nainital:</p>
                    <p class="p-text r_align3" style="font-family: Avenir_book;
        line-height: 1.6;
        font-weight: normal;">
                            
                            Bhowali, a small town in Naintal district, does not have a sewer infrastructure. 
                            The result being, sewage is discharged directly into the nearby Shipra river which ultimately 
                            ends up in River Ganga.
                    </p>
                    <p class="p-text r_p_align2" style="font-family: Avenir_book;
        line-height: 1.6;
        font-weight: normal;">
    We are designing a small, innovative waste treatment setup on the junction where the waste stream 
    enters Shipra. Low on maintenance and low on energy consumption, this treatment plant would reduce the 
    biological oxygen demand of waste water to less then 10 mg/L, reducing nitrogen and phosphorus concentrations 
    and eliminating pathogens, thereby making sewage reusable.
                    </p>
                </div>
                <div class="col-md-4 left r_align4" style="background-size: contain;
                background-repeat: no-repeat;background-image: url('./assets/home/group-14_Copy.png');">
                <img class="rewater r_align5" src="./rewater/11.JPG">
    
                </div>
        </div>
        <div class=" mt-70 r_al">
                <div class="row" >
                        <div class="col-md-4 left r_align44" style="background-size: cover;
                        background-repeat: no-repeat;background-image: url('./assets/home/group-14_Copy.png');background-position:bottom;">
                        <img class="rewater r_align5" src="./rewater/23.JPG">
            
                        </div>
                        <div class="col-md-8 left pt-40 r_align11">
                                <p class="p-text r_align22" style="font-family: Avenir_heavy;font-size:22px;">
                                       
                                            Rejuvenation of Tiliyar lake in Rohtak, Haryana:
                                        
                                    </p>
                                    <p class="p-text r_align33" style="font-family: Avenir_book;
        line-height: 1.6;
        font-weight: normal;">
                                        This lake is highly eutrophic meaning it has a lot of algal growth on its surface. 
                                        The algal growth has reduced the aquatic flora and fauna and has also affected 
                                        tourism.
                                        </p>
                                                    <p class="p-text r_p_align r_p_align_mid" style="font-family: Avenir_book;
        line-height: 1.6;
        font-weight: normal;">
                                        Working with Directorate of Coldwater Fisheries Research, Bhimtal we are 
                                        working on the revival of Tilyar lake. Aerators would be installed throughout the 
                                        lake to increase the dissolved oxygen concentrations and algae eating fishes 
                                        would be bred in the water.  All these interventions would decrease algal growth, making water clean and transparent and increasing the aesthetics of the area. 
                                    </p>
            
                        </div>
                </div>
        </div>
        <div class="row mt-70 mb-40 r_al2" >
            <div class="col-md-8 left pt-15 r_align1">
                <p class="p-text r_align2" style="font-family: Avenir_heavy;font-size:22px;">
                        Cleaning of Shyam Kund and Radha Kund in Goverdhan, Mathura</p>
                <p class="p-text r_align3" style="font-family: Avenir_book;
        line-height: 1.6;
        font-weight: normal;">
                        
                        Radha Kund is a famous  pilgrim place near Mathura, considered most supreme of all the religious
            places for Vaishnav Hindus. Millions of devotees travel to Radha Kund and nearby Shyam Kund for holy
            baths.
                        
                </p>
                <p class="p-text r_p_align" style="font-family: Avenir_book;
        line-height: 1.6;
        font-weight: normal;">
                        The stagnant water of the kund is highly contaminated with an enormous BOD, COD and Total Nitrogen
            levels. We are working on cleaning of the kund through a low cost, low energy waste treatment setup, on the
            banks of the kund, that can render the water colorless, odour free and without any pathogens making it hygienic,
            healthy and safe for devotees.
                </p>
            </div>
            <div class="col-md-4 left r_align4" style="background-size: contain;
            background-repeat: no-repeat;background-image: url('./assets/home/group-14.png');">
            <img class="rewater r_align5" src="./rewater/25.JPG">
    
            </div>
        </div>
        
    
     </div> 
</div>
<!-- end -->

<!--footer section  -->
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
                            <form id="contactForm" action="rewater.php" method="post">
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

    <!-- #endregion Jssor Slider End -->
  
  <script>
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
  setTimeout(function() {
    	$(".phpresponse").hide();
    }, 5000);
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
