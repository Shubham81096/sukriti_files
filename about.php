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

<head>
            <title>
                SUKRITI
            </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <link rel="icon" type="image/ico" href="assets/home/title-logo.PNG" />
            <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat|Prompt|Varela+Round' rel='stylesheet'>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <link  rel="stylesheet" href="./css/style.css"/>

            <link  rel="stylesheet" href="./css/responsive_about.css"/>
            <link rel="stylesheet" href="./css/slider.css"/>
            <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
            
            
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
            <button id="nav-toggle" style="border:none" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="color: white">
                    <span class="navbar-toggler-icon"></span>
                  </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="">
        <ul class="navbar-nav">

            <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="about.php">ABOUT</a>
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



      <!-- <section class="Banner_about">
            
        </section>    -->
<div class="amnd" style="display:block;position: relative;">
        <section class="Banner" style="height: 92.5vh;" >
            <div class="imageBanner bannerAbout">
                <img src="./assets/ngo/ps-img-6676@3x.png">
            </div>
                <p id ="bannerTextAbout" style=""> Spreading a million <ic>smiles</ic></p>
        
        </section>
        <div class="container text-center about_top"style="padding-bottom: 10%;padding-left: 4%;padding-right: 4%;margin-top:0%">
                <div class="row" >
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center"> 
                            <p class="heading content about_h our_v" style="margin-bottom:2%;">OUR VISION</p>
                            <hr class="about_hr">
                            <p class="p-text p-text_about">
                                Sukriti is a Sanskrit word that translates to ‘good creations’. Staying true to our name, we want to spread a million smiles by providing sustainable engineering solutions for some of the major issues faced by our society.</p>
                        </div>
                     </div>
        </div>
<section class="content" style="background:red">

        <div class="container-fluid story"  >
               
                        <div class="col-md-6 col-sm-6 col-xs-12 ecolats-right left about2_small" >
                            <img id="check"src="./assets/home/group-17.svg" >

                            <div id="ileft" class="col-md-12">

                                
                                
                                        <div class="col-md-12">
                                            <img src="./assets/home/about_img.png" id='parent8'alt="">
                                            
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="./assets/home/group-9.png" id='parent7'alt="">
                                        </div>
                                        <div class="col-md-12">
                                            <img src="./assets/home/DSC_0264.png" id="parent6" alt="">
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <img src="./assets/home/IMG_0782.png" id="parent4" alt="">
                                        </div>
                                        <div class="col-md-12">
                                            <img src="./assets/home/dscn-1014-copy-3_3x_another.png" id="parent5" alt="">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <img src="./assets/home/group-11@2x.png" id="child5" alt="">
                                        </div>
                                
                                
                            </div>
                        </div>
                    
                            <div class="col-md-6 col-sm-6 col-xs-12 right about_small" style="padding-left: 10px;
                            padding-right: 10px;">
                                    <div class="col-md-12 about_text_wrapper">
                                        <p class="heading content about_h our_s">OUR STORY</p>
                                        <hr class="about_hr">
                                        <p class="p-text story_text" style="font-family: Avenir_book;
    line-height: 28px;
    font-weight: normal;">
                                
                                                India has shown strong economic growth in the past few decades, with accelerated growth across agriculture, industry, and services. However, this growth has come at a cost – a deteriorating environment and an increasing scarcity of resources. The 2018 Environmental Performance Index, which ranked 180 countries on environmental health and ecosystem vitality, saw India at 177th position. Over the past decade, the number of deaths due to particulate matter pollution have risen to 1.6 million. Poor sanitation facilities cost India $54 billion every year. And 80% of untreated sewage in India flows directly to its rivers. Yet, amidst all this, India also presents a massive opportunity in disguise. India’s rural-to-urban transition is turning out to be one of the fastest in human history, and how this transition takes place could change the course of humanity’s future. It follows then, that one of the greatest challenges facing India is decoupling economic growth from environmental degradation. And the key to solving this challenge lies in smart engineering solutions.
                                                
                                        </p>
                                        <p class="p-text text_divide" style="font-family: Avenir_book;
    line-height: 28px;
    font-weight: normal;">
                                                When we graduated from IIT Roorkee, we realized that post-graduation, a lot of students ended up working in non-engineering sectors. To be honest, we could have been tempted to do the same. But when we saw the magnitude of the challenge before us, and the need the country has for ambitious engineers who want to ‘change the world’ in every sense of the phrase, we knew what we wanted. We wanted to bring together a team of highly passionate engineers who would work on solving some of the most daunting developmental challenges in the country. Thus, Sukriti was born.

                                        </p>
                                        
                                        <p class="p-text" style="font-family: Avenir_book;
    line-height: 28px;
    font-weight: normal;">
                                                We started our work in the Water, Sanitation, and Hygiene (WASH) sector by developing eco-toilets to transform India’s sanitation scenario. Now, we are venturing into treatment of water in the country’s lakes and rivers.
                                        </p>
                                    </div>
                            </div>
                           </div>     
       </div>
</section>
<div class="advisors" style="margin-bottom: 2%;">
        <div class="row">
            <div class="col-md-12 text-center pt-10 advisor_align" style="padding-top:10%;padding-left: 14%;padding-right:13%;padding-bottom: 5%">
                <p class="heading content advisor_txt about_h" style="    margin-bottom: 2%;">OUR ADVISORS</p>
                <hr class="about_hr">
                <p class="advisor_p_txt p-text pl-30 pr-30" style="font-family: Avenir_book;
    line-height: 1.6;
    font-weight: normal;">
                    For a startup to become a Unicorn, it needs lot of right ingredients. More than anything else, it needs group of experts, carrying multitude of experience, willing to work as tirelessly as the team itself. We are lucky to have ours!
                </p>
            </div>   
        </div>
<div class="row" style="    padding-left: 2%;padding-right: 2%;">
                
                
                <div class="col-md-4 p-10 text-center"  >
                        <div class="pb-20 "  >
                                <div class="teamImageWrapper">
                                    <div class="teamMemberImage">
                                        <img src="assets/home/advisor-2-copy-2@3x.png"/>
                                    </div>
                                </div>

                                <div class="teamMembersInfo ">
                                    <p class="investorName">
                                        Dr. Pramod Agarwal
                                    </p>
                                    <p class="teamMembersDesignation">
                                        Prof Department of Electrical Engineering,<br>IIT Roorkee
                                    </p>
                                    
                                </div>

                        </div>
                </div>
                
                <div class="col-md-4 p-10 text-center"  >
                        <div class="pb-20 "  >
                                <div class="teamImageWrapper">
                                    <div class="teamMemberImage">
                                        <img src="assets/home/advisor-1.jpg"/>
                                    </div>
                                </div>

                                <div class="teamMembersInfo ">
                                    <p class="investorName">
                                        Dr. Pradeep Kumar
                                    </p>
                                    <p class="teamMembersDesignation">
                                        Prof Department of Environment Engineering,<br>IIT Roorkee
                                    </p>
                                </div>

                        </div>
                </div>
                <div class="col-md-4 p-10 text-center"  >
                        <div class="pb-20 "  >
                                <div class="teamImageWrapper">
                                    <div class="teamMemberImage">
                                        <img src="assets/home/advisor-2-copy-2@3x(1).png"/>
                                    </div>
                                </div>

                                <div class="teamMembersInfo ">
                                    <p class="investorName">
                                        Dr. Devendra Saroj
                                    </p>
                                    <p class="teamMembersDesignation">
                                        Senior Lecturer,<br>University of Surrey, UK
                                    </p>
                                </div>

                        </div>
                </div> 
                <div class="col-md-4 p-10 text-center"  >
                        <div class="pb-20 "  >
                                <div class="teamImageWrapper">
                                    <div class="teamMemberImage">
                                        <img src="assets/home/advisor-2@3x.png"/>
                                    </div>
                                </div>

                                <div class="teamMembersInfo ">
                                    <p class="investorName">
                                        Ms. Ariella Bernstein
                                    </p>
                                    <p class="teamMembersDesignation">
                                        Chief of Staff at Jerusalem Foundation
                                    </p>
                                </div>

                        </div>
                </div>
                
                <div class="col-md-4 p-10 text-center"  >
                        <div class="pb-20 "  >
                                <div class="teamImageWrapper">
                                    <div class="teamMemberImage">
                                        <img src="assets/home/advisor-2-copy-3@3x(1).png"/>
                                    </div>
                                </div>

                                <div class="teamMembersInfo ">
                                    <p class="investorName">
                                        Mr. Nadav Avidan
                                    </p>
                                    <p class="teamMembersDesignation">
                                        Most prominent Branding, Story Telling<br>and PR voices in Israel
                                    </p>
                                </div>

                        </div>
                </div>
                
                <div class="col-md-4 p-10 text-center"  >
                        <div class="pb-20 "  >
                                <div class="teamImageWrapper">
                                    <div class="teamMemberImage">
                                        <img src="assets/home/advisor-2-copy-3@3x.png"/>
                                    </div>
                                </div>

                                <div class="teamMembersInfo ">
                                    <p class="investorName">
                                        Mr. Nishith Acharya
                                    </p>
                                    <p class="teamMembersDesignation">
                                        Ex Director Innovation and Entrepreneurship,<br>US Department of Commerce
                                    </p>

                                </div>

                        </div>
                </div>
                
                    
        </div>
</div>
</div>
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
                            <form id="contactForm" action="about.php" method="post">
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
<script>
          document.querySelector( "#nav-toggle" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
  })
$("document").ready(function(){
  $(".tab-slider--body").hide();
  $(".tab-slider--body:first").show();
});
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
      
      
