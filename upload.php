<?php
require('phpmailer/src/SMTP.php');
require('phpmailer/src/PHPMailer.php');
// Check if data was posted
echo "Worked 1";
if($_SERVER["REQUEST_METHOD"]=="POST")
{   echo "Worked 2";   
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'From:shubhamsharma.mj@gmail.com' . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $error=""; 
    echo "Worked 3";
    //Prepare mail using the data
    $body="Applicant Name : <b>".$fname." ".$lname."</b><br><br>";
    $body.="Email ID : <b>".$email."</b><br><br>";
    $body.="Mobile No. : <b>".$mobile."</b><br><br>";
    $body.="<i>Please find below the attached resume of the applicant.</i>";
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    
    // Enter email id which you want to use for sending mails below  :
    $mail->Username = "sukritimails@gmail.com";
    
    // Password for above email :
    $mail->Password = "sukriti29";
    echo "Worked 4";
    // Change these settings if your mail server is other than Gmail
    $mail->Host     = "smtp.gmail.com";
    $mail->Mailer   = "smtp";
    $mail->IsSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port     = 465;

    echo "Worked 5";
    // Email message construction :

    $mail->SetFrom("sukritimails@gmail.com", "Sukriti Ngo");
    $mail->AddReplyTo("sukritimails@gmail.com", "Sukriti Ngo");
    $mail->AddAddress("shubhamsharma81096@gmail.com");
    $mail->Subject = "Job Application - ".$fname." ".$lname;
    $mail->WordWrap   = 80;
    $mail->MsgHTML($body);
    $mail->IsHTML(true);
    echo "Worked 6";
    //Uploading file
    $target_dir = "resume/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION));
    echo "Worked 7";
    // Check if file already exists
    if (file_exists($target_file)) {
        $error.="File already exists.<br>";
        $uploadOk = 0;
        echo "Worked 8";
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2097152) {
        $error.="Your file is too large.<br>";
        $uploadOk = 0;
        echo "Worked 9";
    }
    // Allow certain file formats
    if($imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf") {
        $error.="Only DOC,DOCX & PDF files are allowed.<br>";
        $uploadOk = 0;
        echo "Worked 10";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error.="Your file was not uploaded.<br>";
        echo $error;
        echo "Worked Error uploading file";
    // if everything is ok, try to upload file
    } else {
        echo "Worked 10..5";
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $error.="The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $mail->AddAttachment($target_file,strtoupper($fname." ".$lname)." Resume");
            $x=$mail->Send();
            echo "Worked 11";
            //Sending mail
            if($x) 
            {   // Do -- if mail was sent 
                 echo "Mail sent";
                 echo "Worked Mail sent";
                // Delete file after sending it
                 unlink($target_file);
            }
            else 
            {   // If mail was not sent
                echo "Mail not sent";
                echo "Worked 12";
            }
            echo "Worked 1334";
        } else {
            $error.="There was an error uploading your file.";
            echo "Worked 13";
        }
    }
}
else
{
    echo "Worked 14";
}
?>