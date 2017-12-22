<?php
include '../../connect-mysql.php';
session_start();


if (isset($_POST["txtFirstname"])) {
    require_once "phpmailer/class.phpmailer.php";
    $Username = trim($_POST['txtUsername']);
    $Password = trim($_POST['txtPassword']);
    $RePassword = trim($_POST['txtRepassword']);
    $FirstName = trim($_POST['txtFirstname']);
    $LastName = trim($_POST['txtLastname']);
    $DOB = trim($_POST['txtDOB']);
    $CID = trim($_POST['txtCID']);
    $Email = trim($_POST['txtEmail']);
    $Telephone = trim($_POST['txtTel']);


    $Picture = trim($_POST['pic']);
    $Type = "Employee";

    if($Password != $RePassword)
    {
        echo "<script type='text/javascript'>alert('Password not Match!')</script>";
        echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
        exit();
    }

    $sql = "SELECT * FROM employee WHERE email = '$Email'";
    $objQuery = mysqli_query($objCon,$sql);
    $result = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    $sql = "SELECT * FROM employee WHERE username = '$Username'";
    $objQuery = mysqli_query($objCon,$sql);
    $result2 = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    try {
        if($result2){
            $msg = "Username already used";
            $msgType = "warning";
            echo "<script type='text/javascript'>alert('$msg')</script>";
            echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";
        }else{

        if ($result) {

            $msg = "Email already exist by ". $result["type"] ;
            $msgType = "warning";

            echo "<script type='text/javascript'>alert('$msg')</script>";
            echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";

            //echo $msg;
        } else {
            $Password =  md5($Password);
            $sql = "INSERT INTO employee (`username`, `password`, `firstname`, `lastname`, `citizen_id`, `email`, `position`, `dob`, `tel`, `citizen_pic`) VALUES 
            ('$Username','$Password','$FirstName','$LastName','$CID','$Email','$Type','$DOB','$Telephone','$Picture')";
            $objQuery = mysqli_query($objCon,$sql);


            echo "<script type='text/javascript'>alert('You Register Successful!')</script>";
            echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
            $sql = "SELECT * FROM employee WHERE email = '$Email'";
            $objQuery = mysqli_query($objCon,$sql);
            $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);



            mysqli_close($objCon);

            if ($objResult["email"]==$Email) {



                $lastID = $objResult["id"];
                $message = '<html><head>
                <title>Email Verification</title>
                <link href="/css/bootstrap.min.css" rel="stylesheet">
                </head>
                <body>
                <div class="row col-md-12" style="margin-left: 10px; margin-top: 10px">
                <div class="card" style="justify-content: center;width: 100%;padding: 50px;text-align: center;">';

                $time = time();

                $message .= '<img src="../pic/navbarconfirmemail.JPG" style="width: 100%;"><br>';
                $message .= '<h3>Email Confirmation </h3>';
                $message .= '<h1>Hey ' . $objResult["firstname"] ." ". $objResult["lastname"].' ,</h1>';
                $message .= '<p>you\'re almost ready to start enjoying E-cup</p>';
                $message .= '<p>Please click on the link below to verify your email address</p>';
                $message .= '<p>and complete your registration.</p><br>';
                $message .= '<p><a href="'.SITE_URL.'activate.php?id=' . base64_encode($lastID) . '&time=' .base64_encode($time).'">
                                <button type="button" 
                                style="background-color:#fec02d; color: white;border: none;padding: 15px 32px;
                                font-size: 16px; margin: 4px 2px;  cursor: pointer;"> CLICK TO ACTIVATE YOUR ACCOUNT</button>
                                </a><br><br>';
                $message .= '<small>Email send by <span style="color: #fec02d"><b>E-cup Developer</b></span></small>';

                $message .= "</div>
                             </div>
                             </body>
                             </html>";

                // php mailer code starts
                $mail = new PHPMailer(true);
                $mail->IsSMTP(); // telling the class to use SMTP

                $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
                $mail->SMTPAuth = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                $mail->Port = 465;                   // set the SMTP port for the GMAIL server

                $mail->Username = 'ecup.spp@gmail.com';
                $mail->Password = 'spp123456';

                $mail->SetFrom('ecup.spp@gmail.com', 'ecup');
                $mail->AddAddress($Email);

                $mail->Subject = trim("Email Verifcation");
                $mail->MsgHTML($message);

                try {
                    $mail->send();
                    $msg = "An email has been sent for verfication.";
                    $msgType = "success";
                } catch (Exception $ex) {
                    $msg = $ex->getMessage();
                    $msgType = "warning";
                }
            } else {
                $msg = "Failed to create User";
                $msgType = "warning";
            }
        }
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}
 ?>



