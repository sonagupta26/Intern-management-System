<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("intern", $con);


$query="SELECT studid, studname,nameofproj FROM project ";
$result=mysql_query($query,$con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 

"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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

	  </div><!--close menubar-->
<div id="header">  
        <h1>Internship<span> Completion</span></h1>
<h2>CERTIFICATE</h2>
</div><!--close header-->		
      <div id="content">
        <div class="clear"></div>
        <div class="content_item">
          
 <p>I hereby certify that the report entitled</p> 
<strong><?php
$record=mysql_fetch_array($result);
echo $record['nameofproj'];
?></strong>
 presented by  <strong><?php
echo $record['studname'];
?></strong>
<p> is in partial fulfilment of reward of the certificate of training ,submitted to </p><strong>"The Computer Services ONGC" ,(s/w) GEOPIC Dehradun, </strong> <p>is an authentic record of their own work carried out under my supervision.</p>
<p> I wish them all the best in their academic endeavour . </p>
 <p>Name:</p> 
 <p> Designation: </p>
</div><!--close content_item-->
	    
         <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">
	
       </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
