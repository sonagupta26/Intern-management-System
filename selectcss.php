<html>
<body>
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
	    <h2>Get Students data</h2>
      </div><!--close header-->		
      <div id="content">
        <div class="clear"></div>
        <div class="content_item"><?php
include("conection.php");
?>

<form method="post" action="" name="form1">
<table width="60%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="150"><strong>Course</strong></td>
    <td  width="150"><select name="course" onChange="getCity('findrec.php?course='+this.value)">
	<option value="">Select Course</option>
	<option value="1">1 month internship</option>
	<option value="2">2 month internship</option>
	<option value="3">6 month internship</option>
	<option value="4">1 year internship</option>
	<option value="5">industrial training</option>
	<option value="6">industrial visit</option>
        </select></td>
  </tr>
  <tr style="">
    <td height="28"><strong>Semester</strong></td>
    <td ><select name="semsester">
	<option>Select Semester</option>
	<option value="1">1st Semester</option>
	<option value="2">2nd Semester</option>
	<option value="3">3rd Semester</option>
	<option value="4">4th Semester</option>
	<option value="5">5th Semester</option>
	<option value="6">6th Semester</option>
      </select></td>
  </tr>
  <tr>
    <td><strong>Subject</strong></td>
    <td><div id="subdiv"><select name="subject">
      <option selected>Select Subject</option>
        <option value="1">computer science</option>
	<option value="2">information technology</option>
	<option value="3">mechanical engg</option>
	<option value="4">chemical engg</option>
	<option value="5">automobile engg</option>
	<option value="6">electrical engg</option>
<option value="7">nanotechnology</option>
<option value="8">electrical and electronics</option>
<option value="9">biotech</option>
    </select></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Search" /></td>
  </tr>
</table>
</form>
 </div><!--close content_item-->
	    
		
         <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">
	
       </div><!--close footer-->	
  </div><!--close main-->
</body>
</html>