<?php
session_start();
include("modal.php");
include("conection.php");?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Intern Information System</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
</head>

<body>
  <div id="main">
    <div id="site_content">  
	  <div id="menubar">
           
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current"><a href="index.html">Home</a></li>
          <li><a href="viewstudent.php">Students</a></li>
          
         <li><a href="activ1.php">Registration</a></li>
          <li><a href="admin.php">Admin</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
	  </div><!--close menubar-->	
      <div id="header">  
        <h1>Intern<span> Information System</span></h1>	
	    <h2>Enter your information</h2>
      </div><!--close header-->		
      <div id="content">
        <div class="clear"></div>
        <div class="content_item">
          
          <form action=activ1.php method="post" class="form">
            <p class ="textfield">
              <lable for "author">
                    <small>First Name *</small>
              <lable>
              <input type="text" name="fname" size="22" tabindex="1">
            <p class ="textfield">
              <lable for "author">
                    <small>Last name *</small>
              <lable>
              <input type="text" name="lname" size="22" tabindex="1">
            <p class ="textfield">
              <lable for "author">
                    <small>Password *</small>
              <lable>
              <input type="text" name="cid" size="22" tabindex="1">
            <p class ="textfield">
              <lable for "author">
                    <small>CourseID *</small>
              <lable>
              <input type="text" name="pass" size="22" tabindex="1">
            <p class ="textfield">
              <lable for "author">
                    <small>Email  *</small>
              <lable>
              <input type="text" name="mail" size="22" tabindex="1">
           <p>
              <input name="submit" id="submit" tabindex="5" type="submit" />
              <input name="comment_post_ID" value="1" type="hidden">
   </p>
(* required fields)
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("intern", $con);
if(isset($_POST['submit']))
{
$firstn=mysql_real_escape_string($_post["fname"]);
$lastn=mysql_real_escape_string($_post["lname"]);
$passw=mysql_real_escape_string($_post["pass"]);
$cid=mysql_real_escape_string($_post["id"]);
$mail=mysql_real_escape_string($_post["mail"]);

$query="INSERT INTO user(fname,lname,pass,id,mail) VALUES('$firstn','$lastn','$passw','$cid','mail')";
$result=mysql_query($query,$con);
if($query)
{
student_confirmation($cid,$firstn,$lastn,$mail);
header("Location: activ2.php");
}
}

function student_confirmation($cid,$firstn,$lastn,$mail)
{
$subject = "Email Verification mail";
$headers = "From: email@domain.com \r\n";
$headers .= "Reply-To: email@domain.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message.='<div style="width:550px; background-color:#CC6600; padding:15px; font-weight:bold;">';
$message.='Email Verification mail';
$message.='</div>';
$message.='<div style="font-family: Arial;">Confiramtion mail have been sent to your email id<br/>';
$message.='click on the below link in your verification mail id to verify your account ';
$message.="<a href='http://yourdomain.com/user-confirmation.php?id=$id&email=$email&confirmation_code=$rand'>click</a>";
$message.='</div>';
$message.='</body></html>';

mail($mail,$subject,$message,$headers);
}

?>

</form>

</div><!--close content_item-->	
            </div><!--close sidebar_item--> 
          </div><!--close sidebar-->  
        </div><!--close sidebar_container-->	
       <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">  
			
	  </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
