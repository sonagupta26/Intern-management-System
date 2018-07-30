<?php
session_start();
include("modal.php");
include("conection.php");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
	    <h2>Enter The Student's information</h2>
      </div><!--close header-->		
      <div id="content">
        <div class="clear"></div>
        <div class="content_item">
          
          <form action=enresult.php method="post" class="form">
              <p class ="textfield">
              <lable for "author" 
                    <strong> Student ID* </strong>
              </lable>
              <input type="text" name="subid" size="22" tabindex="1">
                  <p class ="textfield">
              <lable for "author"
                    <strong> Maxmarks* </strong>
              </lable>
              <input type="text" name="maxmarks" size="22" tabindex="1">
                  <p class ="textfield">
              <lable for "author"
                    <strong> Scored* </strong>
              </lable>
              <input type="text" name="scored" size="22" tabindex="1">
                  <p class ="textfield">
              <lable for "author">
                    <strong>Attendance*</strong>
              <lable>
              <input type="text" name="atten" size="22" tabindex="1">
            <p class ="textfield">
              <lable for "author">
                    <strong>Result*</strong>
              <lable>
              <input type="text" name="result" size="22" tabindex="1">
           <p>
              <input name="submit" id="submit" tabindex="5" type="submit" />
              <input name="comment_post_ID" value="1" type="hidden"/>
   </p>
</form>
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
$firstn=mysql_real_escape_string($_post["subid"]);
$lastn=mysql_real_escape_string($_post["maxmarks"]);
$passw=mysql_real_escape_string($_post["scored"]);
$atten=mysql_real_escape_string($_post["atten"]);
$cid=mysql_real_escape_string($_post["result"]);
}
$query="INSERT INTO examination(subid,maxmarks,scored,result) VALUES('$firstn','$lastn','$passw','$cid')";
$result=mysql_query($query,$con);
$query2="INSERT INTO attendence(subid,atten) VALUES('$firstn','$atten')";
$result2=mysql_query($query2,$con);
?>

</div><!--close content_item-->		
       <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">  
			
	  </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>