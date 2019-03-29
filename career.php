<?php

require('phpmailer/src/SMTP.php');
require('phpmailer/src/PHPMailer.php');
// Check if data was posted
$success=0;
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES["fileToUpload"])){
    
    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $applied_for=$_POST["postappliedfor"];
    $error=""; 
    //Prepare mail using the data
    $body="Applicant Name : <b>".$fname." ".$lname."</b><br><br>";
    $body.="Post applied for : <b>".$applied_for."</b><br><br>";
    $body.="Email ID : <b>".$email."</b><br><br>";
    $body.="Mobile No. : <b>".$mobile."</b><br><br>";
    $body.="<i>Please find below the attached resume of the applicant.</i>";
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
    $mail->AddReplyTo("sukritimails@gmail.com", "Sukriti Ngo");
    $mail->AddAddress("contact@sukriti.ngo");
    $mail->Subject = "Job Application - ".$fname." ".$lname;
    $mail->WordWrap   = 80;
    $mail->MsgHTML($body);
    $mail->IsHTML(true);
    //Uploading file
    $target_dir = "resume/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION));
    // Check if file already exists
    if (file_exists($target_file)) {
        $error.="File already exists.\n";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2097152) {
        $error.="Your file is too large.\n";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf") {
        $error.="Only DOC,DOCX & PDF files are allowed.\n";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error.="Your file was not uploaded.\n";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $error.="The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $mail->AddAttachment($target_file,strtoupper($fname." ".$lname)." Resume");
            $x=$mail->Send();
            //Sending mail
            if($x) 
            {   // Do -- if mail was sent 
                 $success=2;
                 
                // Delete file after sending it
                 unlink($target_file);
            }
            else 
            {   // If mail was not sent
                $success=0;
                $error.="There was an error sending your message.\n Try again later";
            }
        } else {
            $error.="There was an error uploading your file.";
        }
    }
}
else{

if($_SERVER["REQUEST_METHOD"]=="POST" && !isset($_FILES["fileToUpload"])){
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
}    

?>
<html>
    <head>
            <title>
                    SUKRITI
                </title>
                <link rel="icon" type="image/ico" href="assets/home/title-logo.PNG" />
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
            <link  rel="stylesheet" href="./css/style.css"/>
            <link  rel="stylesheet" href="./css/responsive.css"/>
            <link rel="stylesheet" href="./css/slider.css"/>
            <link rel="stylesheet" href="./css/position.css">
            
     <!--       <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">-->
                      




</head>
    
    <body>
    	<?php
    if($success==1 ){
	//echo '<p align="center" class="phpresponse">Your message was sent successfully</p>';
	echo '<div class="phpresponse alert alert-success"><strong>Success!</strong> Your message was sent successfully.</div>';
}
else if($success==2){
    echo '<div class="phpresponse alert alert-success"><strong>Success!</strong> Your application was sent successfully.</div>';
}
else
{ if($success==0 && $_SERVER["REQUEST_METHOD"]=="POST"){
	echo '<div class="phpresponse alert alert-danger">
    <strong>Error!</strong> Couldn\'t send your message. Try gain later.<br>'.$error.'
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
                            <a class="nav-link" href="ecolat.php">ECOMITRA</a>
                        </li> 
                        <li class="nav-item">
                                <a class="nav-link " href="rewater.php">REWATER</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link active" href="rewater.php">CAREERS</a>
                        </li> 
                        <li class="nav-item">
                          <a class="nav-link " href="#contact">CONTACT US</a>
                        </li> 
                            
                    </ul>
                </div>  
            </nav>
            <section class="Banner" style="height:92.5vh;">
                    <div class="imageBanner img-responsive bannerCareer">
                        <img src="./assets/ngo/ps-img-6674-copy.jpg">
                    </div>
                    <p id ="bannerTextCareer" style=""> Join our mission to spread <ic>smiles</ic></p>
            </section>
            
            
               <!-- Challenge section -->
                <div class="container career_a1">
                    <div class="col-md-12  mb-40 mt-40 career_a2" >    
                        <div class="container " >                        
                            <div class="row">
                                    <div class=" combination " >                                    
                                            <p class="normal   p-text career_1" style="font-family: Avenir_book;
                line-height: 1.6;
                font-weight: normal;     margin-left:0%;
                padding-right: 0%;">
                At Sukriti, we value social impact above all. We are a team of young, motivated people 
                who share laughs, stories, ideas, and visions. Our culture is a rich blend of both the 
                social enthusiasm of an NGO and the strong work ethic of a modern multinational. If you are 
                as pumped up as we are to bring a social revolution, and to use your know-how to create a lasting impact on 
                real lives, then we welcome you to be a part of our team. 
                                            </p>
                                                                
                                    </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="container-fluid  mt-40 mb-10 "  >
                    <div class="col-md-12">
                        <p class="heading content text-center text-uppercase career_h" style="font-family: ProximaNovaSoft">We’re looking for:
                        <br><br></p>
                    </div>
                </div>

<div class="container">
    <div class="row">
        <i class="fa fa-chevron-left arrow left-arrow"></i>
        <div class="tabs-list-container">
            <!-- <i class="fa fa-chevron-left"></i> -->
            <ul class="tabs-list">
              <li class="tabs-active tabs-li" id="tabs-li-1">
                <p class="tabs-title">Electronics CAD Engineer</p>
              </li>
              <li class="tabs-li" id="tabs-li-2">
                <p class="tabs-title">Chief Architect</p>
              </li>
              <li class="tabs-li" id="tabs-li-3">
                <p class="tabs-title">Embedded Hardware Design Engineer</p>
              </li>
              <li class="tabs-li" id="tabs-li-4">
                <p class="tabs-title">Embedded Firmware Engineer</p>
              </li>
              <li class="tabs-li" id="tabs-li-5">
                <p class="tabs-title">Embedded Design engineer</p>
              </li>
              <li class="tabs-li" id="tabs-li-6">
                <p class="tabs-title">After-Sales Engineer</p>
              </li>
              <li class="tabs-li" id="tabs-li-7">
                <p class="tabs-title">Project Manager</p>
              </li>
              <li class="tabs-li" id="tabs-li-8">
                <p class="tabs-title">Site Supervisor/Engineer</p>
              </li>
              <li class="tabs-li" id="tabs-li-9">
                <p class="tabs-title">Formwork Engineer</p>
              </li>
              
              
            </ul>
            <!-- <i class="fa fa-chevron-right"></i> -->
        </div>
        <i class="fa fa-chevron-right arrow right-arrow"></i>
        <div class="tabs-content-container">
                <div class="show_jobs j1">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Schematic capture in the tool</li>
                                                        <li>CAD layout</li>
                                                        <li>QA/QC/functional testing</li>
                                                        <li>PCB assembling and rework</li>
                                                        <li>Lab inventory management</li>
                                                        <li>Assistance in component procurement</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <ul type="disc">
                                                            <li>Experience in field of schematics design and layout.</li>
                                                            <li>Well versed with component reading and component creation in tool.</li>
                                                            <li>Familiar with usage of various LAB instruments like soldering station, multimeter etc.</li>
                                                            <li>Able to read the schematics.</li>
                                                            <li>Able to work on OrCAD17 or higher or any other tool.</li>
                                                            <li>Experience on MS-Office.</li>
                                                            <li>Familiarity in understanding and executing various test documents.</li>
                                                            <li>Experience in soldering, de-soldering and other PCB rework activities.</li>
                                                            <li>Must be able to read the datasheet of given components and utilise it when needed.</li>
                                                            <li>Candidate must have a knack to use his/her technical knowledge to give it back to society.</li>
                                                            <li>Candidates must be open to work with communities to get feedback on product features so that products are best fit for social upliftment.</li>
                                                            <li>Must have the ability to work closely with different teams to see end-to-end implementation of features/products.</li>
                                                            <li>Candidates must be open to travel to remote locations.</li>
                                                            <li>Analytical reasoning and fact-based brainstorming capabilities will be highly preferred.</li>                                                            
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 1-3 yrs<br>
                                                            Mode of selection: assignment + F2F interviews<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                        <div class="show_jobs j2">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                 <p>The primary job would be to lead the architectural division of the company. Work will be a mix of architectural and graphic designing. You will be
                                                 required to work on planning and designing of public toilet and sewage treatment plants along with various ponds and water bodies rejuvenation project. </p>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <ul type="disc">
                                                            <li>Proficient with software like:</li>
                                                            <ul type="none">
                                                             <li>AutoCAD</li>
                                                             <li>SketchUp</li>
                                                             <li>Lumion (Renders & Walkthrough)</li>
                                                             <li>Photoshop/Illustrator</li>
                                                             <li>After effects</li>
                                                             <li>Adobe Premiere Pro</li>
                                                            </ul>
                                                            <li>Candidate must have a knack to use his/her technical knowledge to give it back to society.</li>
                                                            <li>Candidate must be open to work with communities to get feedback on product features so that products are best fit for social upliftment.</li>
                                                            <li>Must have the ability to work closely with different teams to see end-to-end implementation of features/products.</li>
                                                            <li>Candidate must be open to travel to remote locations.</li>
                                                            <li>Must have a diverse design portfolio that showcases understanding of human-centered design and good design aesthetic</li>
                                                            <li>Must have real curiosity for user experience and crafting products that delight.</li>
                                                            <li>Candidate must have the ability to work closely with different teams to see end-to-end implementation of features/products</li>                                                          
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 1-3 yrs<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                        <div class="show_jobs j3">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Circuit-Designing for the given task</li>
                                                        <li>Detailed hardware testing</li>
                                                        <li>QA/QC testing of HW</li>
                                                        <li>Schematic capture in the tool</li>
                                                        <li>CAD layout</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <ul type="disc">
                                                            <li>Experience in field of embedded system designing. Any experience in sanitation sector would be highly preferred. Freshers with exceptional skillsets could also be considered.</li>
                                                            <li>Strong fundamentals of electronics (Digital and analog) are must.</li>
                                                            <li>Well versed with circuit designing and HW debugging</li>
                                                            <li>Able to read the schematics.</li>
                                                            <li>Analog and Digital Circuit designing: familiarity with micro-controllers, memories, communication interfaces, op-amps, comparators, relays, inductors and capacitors, 
                                                            Handling EMI and Noise issues associated with circuits.</li>
                                                            <li>Familiar with usage of various LAB instruments like CRO, multimeter etc.</li>
                                                            <li>Understanding of Ethernet, wifi-modules will be preferred.</li>
                                                            <li>Understanding of scientific methodologies of experimentation, data-gathering and interpretation and hypothesis.</li>
                                                            <li>Understanding of basic architecture, debugging of sensors.</li>
                                                            <li>Able to read the schematics and debug and design HW.</li>
                                                            <li>Able to work on OrCAD17 or higher or any other tool.</li>
                                                            <li>Experience on MS-Office.</li>
                                                            <li>Candidate must have a knack to use his/her technical knowledge to give it back to society.</li>
                                                            <li>Candidates must be open to work with communities to get feedback on product features so that products are best fit for social upliftment.</li>                                                            
                                                            <li>Candidates must be open to travel to needy communities.</li>
                                                            <li>Open to work in open startup culture and give his/her 100%.</li>
                                                            <li>Analytical reasoning and fact-based brainstorming capabilities will be highly preferred.</li>
                                                            <li>Technical problem-solving skills using a systematic approach.</li>
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 1-4 yrs<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                                        <div class="show_jobs j4">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Circuit-Designing for the given task</li>
                                                        <li>Detailed hardware testing.</li>
                                                        <li>QA/QC testing of HW</li>
                                                        <li>Software testing and development</li>
                                                        <li>Field calibration, supervision and commissioning.</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Technical Skills Needed:</b></p>
                                                    <ul type="disc">
                                                            <li>Experience in field of embedded system designing. Any experience in sanitation sector would be highly preferred. </li>
                                                            <li>Strong fundamentals of electronics (Digital and analog) are must.</li>
                                                            <li>Well versed with circuit designing and HW debugging</li>
                                                            <li>Analog and Digital Circuit designing: familiarity with micro-controllers, memories, communication interfaces, op-amps, comparators, relays, inductors and 
                                                            capacitors, Handling EMI and Noise issues associated with circuits.</li>
                                                            <li>Able to work on OrCAD17 or higher or any other tool.</li>
                                                            <li>Familiar with usage of various LAB instruments like CRO, multimeter etc.</li>
                                                            <li>Experienced in embedded-C coding, memory allocations.</li>
                                                            <li>Experience with any RTOS designing preferably with FreeRTOS at least with Semaphores, SW Timers, synchronisation and event handlings, task handling
                                                            and prioritization.</li>
                                                            <li>Understanding of micro-controller architecture, programming and debugging methodologies, interrupt-handling.</li>
                                                            <li>Experience with any of the IDEs and debuggers for ARM architecture.</li>
                                                            <li>Basic understanding of assembly programing of ARM architecture.</li>
                                                            <li>Understanding of basic peripherals like UART, CAN, I2C, Timers, Counters, PWMs, ADCs, DAC.</li>
                                                            <li>Understanding of Ethernet, wifi-modules will be preferred.</li>
                                                            <li>Understanding of scientific methodologies of experimentation, data-gathering and interpretation and hypothesis.</li> 
                                                            <li>Understanding of basic architecture, debugging of sensors.</li> 
                                                            <li>Experience/knowledge in IoT devices (sensor, gateway, cloud) handling.</li> 
                                                            <li>Able to read the schematics and debug and design HW.</li> 
                                                            <li>Able to work on OrCAD17 or higher.</li> 
                                                            <li>Experience on MS-Office.</li>                                                           
                                                        </ul>
                                                        <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>General Skills Needed:</b></p>
                                                         <ul>
                                                            <li>Candidate must have a knack to use his/her technical knowledge to give it back to society.</li>
                                                            <li>Candidates must be open to work with communities to get feedback on product features so that products are best fit for social upliftment.</li>
                                                            <li>Candidates must be open to travel to needy communities.</li>
                                                            <li>Open to work in open startup culture and give his/her 100%.</li>
                                                            <li>Analytical reasoning and fact-based brainstorming capabilities will be highly preferred.</li>
                                                            <li>Technical problem-solving skills using a systematic approach.</li>
                                                            <li>Ability to communicate ideas and flows through sketches and wireframes.</li>
                                                            <li>Real curiosity for user experience and delight</li> 
                                                            <li>Ability to work closely with different teams to see end-to-end implementation of features/products</li>
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 1-4 yrs<br>
                                                            Mode of selection: assignment + F2F interviews<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                                        
                                        <div class="show_jobs j5">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Circuit-Designing for the given task</li>
                                                        <li>Detailed hardware testing.</li>
                                                        <li>QA/QC testing of HW</li>
                                                        <li>Software testing and development</li>
                                                        <li>Field calibration, supervision and commissioning.</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Technical Skills Needed:</b></p>
                                                    <ul type="disc">
                                                            <li>Experience of 1-4 years in field of embedded system designing. Any experience in sanitation sector would be highly preferred. Freshers with exceptional skillsets could also be considered.</li>
                                                            <li>Strong fundamentals of electronics (Digital and analog) are must.</li>
                                                            <li>Well versed with circuit designing and HW debugging</li>
                                                            <li>Analog and Digital Circuit designing: familiarity with micro-controllers, memories, communication interfaces, op-amps, comparators, relays, inductors and 
                                                            capacitors, Handling EMI and Noise issues associated with circuits.</li>
                                
                                                            <li>Familiar with usage of various LAB instruments like CRO, multimeter etc.</li>
                                                            <li>Experienced in embedded-C coding, memory allocations.</li>
                                                            <li>Experience with any RTOS designing preferably with FreeRTOS at least with Semaphores, SW Timers, synchronisation and event handlings, task handling
                                                            and prioritization.</li>
                                                            <li>Understanding of micro-controller architecture, programming and debugging methodologies, interrupt-handling.</li>
                                                            <li>Experience with any of the IDEs and debuggers for ARM architecture.</li>
                                                            <li>Basic understanding of assembly programing of ARM architecture.</li>
                                                            <li>Understanding of basic peripherals like UART, CAN, I2C, Timers, Counters, PWMs, ADCs, DAC.</li>
                                                            <li>Understanding of Ethernet, wifi-modules will be preferred.</li>
                                                            <li>Understanding of scientific methodologies of experimentation, data-gathering and interpretation and hypothesis.</li> 
                                                            <li>Understanding of basic architecture, debugging of sensors.</li> 
                                                            <li>Experience/knowledge in IoT devices (sensor, gateway, cloud) handling.</li> 
                                                            <li>Able to read the schematics and debug and design HW.</li> 
                                                            <li>Able to work on OrCAD17 or higher.</li> 
                                                            <li>Experience on MS-Office.</li>                                                           
                                                        </ul>
                                                        <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>General Skills Needed:</b></p>
                                                         <ul>
                                                            <li>Candidate must have a knack to use his/her technical knowledge to give it back to society.</li>
                                                            <li>Candidates must be open to work with communities to get feedback on product features so that products are best fit for social upliftment.</li>
                                                            <li>Candidates must be open to travel to remote locations.</li>
                                                            <li>Open to work in open startup culture and give his/her 100%.</li>
                                                            <li>Analytical reasoning and fact-based brainstorming capabilities will be highly preferred.</li>
                                                            <li>Technical problem-solving skills using a systematic approach.</li>
                                                            <li>Ability to communicate ideas and flows through sketches and wireframes.</li>
                                                            <li>Real curiosity for user experience and delight</li> 
                                                            <li>Ability to work closely with different teams to see end-to-end implementation of features/products</li>
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 1-4 yrs<br>
                                                            Mode of selection: assignment + F2F interviews<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                                        <div class="show_jobs j6">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p>Once the product is installed in the field, we intend to monitor the performance of the system on the field. Also, consumers/users might face issues while the system is being field
                        tested. After-sales engineer has an important role to play to successfully handle the grievances reported by consumer and provide resolution on the spot.</p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Analysing the post-sales performance of the system.</li>
                                                        <li>Visiting client site to debug the issue reported by consumer.</li>
                                                        <li>Satisfactorily handling consumer grievances.</li>
                                                        <li>Preparing the detailed report of the visit, issues faced by the client and resolution taken.</li>
                                                        <li>Understanding of the system and its components.</li>
                                                        <li>Testing the system on-field after grievance handling.</li>
                                                        <li>Detailed capturing of data from the systems already installed on-field.</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <ul type="disc">
                                                            <li>Experience in field of embedded system testing. Any experience in sanitation sector would be highly preferred. </li>
                                                            <li>Experience in field of embedded system testing. Any experience in sanitation sector would be highly preferred. </li>
                                                            <li>Well versed with circuit designing and HW debugging</li>
                                                            <li>Understanding of basic architecture, debugging of sensors.</li>
                                                            <li>Experience/knowledge in IoT devices (sensor, gateway, cloud) handling.</li>
                                                            <li>Able to read the schematics and debug and design HW.</li>
                                                            <li>Experience on MS-Office.</li>
                                                        </ul>
                                                        <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>General Skills Needed:</b></p>
                                                         <ul>
                                                            <li>Candidate must have a knack to use his/her technical knowledge to give it back to society.</li>
                                                            <li>Candidates must be open to work with communities to get feedback on product features so that products are best fit for social upliftment.</li>
                                                            <li>Candidates must be open to travel to remote locations.</li>
                                                            <li>Candidates must find associated with the cause and mission of the company.</li>
                                                            <li>Open to work in open startup culture and give his/her 100%.</li>
                                                            <li>Analytical reasoning and fact-based brainstorming capabilities will be highly preferred.</li>
                                                            <li>Technical problem-solving skills using a systematic approach.</li>
                                                            <li>Real curiosity for user experience and delight</li> 
                                                            <li>Ability to work closely with different teams to see end-to-end implementation of features/products</li>
                                                        </ul>
                                                    
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 0-3 yrs<br>
                                                            Mode of selection: assignment + F2F interviews<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                        <div class="show_jobs j7">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Project execution and delivery starting from the site demarcations till handover to the respective clients</li>
                                                        <li>Site survey, Feasibility analysis and valuable inputs while proposal is in drafting phase</li>
                                                        <li>Cost estimation of the projects</li>
                                                        <li>Planning of execution, Co-ordination with architects / consultants, understanding of construction drawings, execution, BBS, monitoring, progress checking, safety, quality control, bill checking and payment</li>
                                                        <li>BOQ for upcoming/ongoing project</li>
                                                        <li>Material availability/ inhouse fabrication/  customised parts and their dispatch to sites timely</li>
                                                        <li>Finalization of layout as per site conditions</li>
                                                        <li>Construction supervision including safety, quality control and schedule management from client / owner side</li>
                                                        <li>Softwares like Auto-Cad, SAP, Lumion/Sketch up etc.</li>
                                                        <li>Vendor management and follow up</li>
                                                        <li>Presentations to government bodies/ communication during project execution</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <ul type="disc">
                                                            <li>B.Tech/B.E in Civil Engineering from prestigious Engineering college</li>

                                                            <li>Good knowledge about Civil Engineering</li>

                                                            <li>Good managerial skills</li>                                                            
                                                            <li>Good communication skills in Hindi and English both</li>              
                                                                                                                     
                                                            <li>Candidates who have done PG-MBA/ Construction Management professional course along with technical degree, would be preferred</li>                                                            
                                                            <li>A person would be preferred if he has worked on aluminium formwork in high rise residential/commercial building</li>                                                                       
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 8 yrs<br>
                                                            Mode of selection: assignment + F2F interviews<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                            <div class="show_jobs j8">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Managing parts of construction projects</li>
                                                        
                                                        <li>Overseeing building work</li>
                                                        
                                                        <li>Undertaking surveys</li>
                                                        
                                                        <li>Setting out sites and organising facilities</li>
                                                        
                                                        <li>Checking technical designs and drawings to ensure that they are followed correctly</li>
                                                        
                                                        <li>Supervising contracted staff</li>
                                                        
                                                        <li>Ensuring projects meet agreed specifications, budgets or timescales</li>
                                                        
                                                        <li>Liaising with clients, subcontractors and other professional staff, especially quantity surveyors and the overall project manager</li>
                                                        
                                                        <li>Providing technical advice and solving problems on site</li>
                                                        
                                                        <li>Preparing site reports and filling in other paperwork</li>
                                                        
                                                        <li>Liaising with quantity surveyors about the ordering and negotiating the price of materials</li>
                                                        
                                                        <li>Ensuring that health and safety and sustainability policies and legislation are adhered to</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <ul type="disc">
                                                        <li>ITI Diploma/B.tech in Civil Engineering</li>
                                                        <li>Field experience in construction</li>
                                                        <li>Proficient with Hindi & English both</li>
                                                        <li>Basic understanding of drawing, cost estimation etc.</li>
                                                        <li>Good negotiation skills</li>
                                                        <li>Comfortable with frequent travelling</li>
                                                        <li>Adaptable to site conditions and locations</li>
                                                           
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 7 yrs<br>
                                                            Mode of selection: assignment + F2F interviews<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
                            <div class="show_jobs j9">
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Job Summary</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Responsibilities and Duties</b></p>
                        <p class="career_p" style="font-family: Avenir_Book;    margin-left: 2%;"><b>Person would be responsible for one or more of the following:</b></p>
                                                    <ol type="number">
                                                        <li>Work with the project team to develop cost effective shoring, reshoring and formwork systems for concrete structures.</li>
                                                        <li>Design formwork systems for walls, columns, pilasters and climbing formwork systems.</li>
                                                        <li>Design shoring and reshoring systems for elevated slabs and beams.</li>
                                                        <li>Manage design process and provide direction to drafting staff.</li>
                                                        <li>Assist Project Engineers with drafting RFI’s when required.</li>
                                                        <li>Manage submittal process.</li>
                                                        <li>Assists in forecasting material needs for formwork, shoring and reshoring.</li>
                                                        <li>Our design system and process requires that the design engineer perform some drafting duties and drawing review in AutoCAD. A general working knowledge of AutoCAD is helpful, but not required; we will provide training.</li>
                                                    </ol>
                                                    
                                                    <p class="career_p" style="font-family: Avenir_Book;margin-top: 3%;    margin-left: 2%;"><b>Required Experience, Skills and Qualifications</b></p>
                                                    <ul type="disc">
                                                            <li>B.Tech/B.E in Civil Engineering from prestigious Engineering college</li>

                                                            <li>Good knowledge about Civil Engineering</li>
                                                         
                    
                                                            <li>A person would be preferred if he has worked on aluminium formwork in high rise residential/commercial building</li>               
                                                        </ul>
                                                    <p class="career_p" style=" margin-left: 2%;"><br>
                                                            Job Type: Full-time<br>
                                                            Experience: 5 yrs(Minimum)<br>
                                                            Mode of selection: assignment + F2F interviews<br>
                                                            Location: Gurgaon<br><br>
                                                             
                                                            Please feel free to reach out in case of more information/any queries.
                                                    </p>
                                        </div>
            </div>
    </div>
</div>
<div class="container">
        <div class="row">
          <div class="col-md-12 apply">
            <p class="p-text">
                    <input type="button" name="learn" value="APPLY NOW" data-toggle="modal" data-target="#myModal" style="margin-left:4%;background-color: #00bfa5;color: #fff;border: none;    margin-top: 2%;    margin-left: 2%;
        margin-bottom: 6%;">                                   
             </p>
             <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header text-center">
                          <h3 style="margin-left:37%;font-family:ProximaNovaSoft;">DETAILS</h3>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form action="career.php" id="application-form" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                                
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">First name</label>
                                            <input type="text" name="fname" class="form-control" id="inputEmail4" placeholder="&#xf007">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">Last Name</label>
                                            <input type="text" name="lname" class="form-control" id="inputPassword4" placeholder="&#xf007">
                                          </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputAddress">Email Id</label>
                                          <input type="email" name="email" class="form-control" id="inputAddress" placeholder="&#xf0e0">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputAddress2">Mobile No.</label>
                                          <input type="text" name="mobile" class="form-control" id="inputAddress2" placeholder="&#xf095">
                                        </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-check">
                                                <label for="fileToUpload" style="margin-left: -3%;">Upload Resume</label>
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                          </div>
                                        </div>
                                        <input id="applied_for" type="hidden" name="postappliedfor"></input>
                                      
                        </div>
                             <div class="modal-footer justify-content-center">
                                 <button type="submit" class="btn btn-default">SUBMIT</button>
                                </div>
                                </form>
                        
                      </div>
                      
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
                            <form id="contactForm" action="career.php" method="post">
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
    
        
                    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
                    <script src="js/anitabs.js" ></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
                    
<script>
$(function(){
    $(".show_jobs").hide();
    $(".j1").show();
    setTimeout(function() {
    	$(".phpresponse").fadeOut("slow");
    }, 3000);
});
$('.tabs-li').click(function(){
    var id=$(this).attr('id');
    $(".show_jobs").hide();
    $("."+"j"+id[id.length-1]).fadeIn("slow");
    $(".tabs-active").removeClass("tabs-active");
    $(this).addClass("tabs-active");
    $(".tabs-list").css("right",$(".tabs-list").css("right")+$(this).css("width"));
});

var showing_at_a_time=$(".tabs-list-container").width()/175;
var totalJobs=$(".tabs-li").length;
var initial_val=showing_at_a_time;
console.log(showing_at_a_time);
$('.left-arrow').click(function(){
    if(initial_val!=showing_at_a_time)
    {   $(this).hide();
        $(".tabs-list").css("left","+=175px");  
        initial_val-=1;
        $(this).fadeIn(1000);
    }
    
});
$('.right-arrow').click(function(){
    if(initial_val!=totalJobs)
    { $(this).hide();
      $(".tabs-list").css("left","-=175px");    
      initial_val+=1;
      $(this).fadeIn(1000);
    }
$('.apply p input').click(function(){
    $('#applied_for').val($(".tabs-active p").html());
});    
});

</script>
</body>    
</html>