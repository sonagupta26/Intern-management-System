
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
        <div class="content_item">
          <h2>SUBJECTS AND IDS</h2>
          <p><?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("intern", $con);


$query="SELECT courseid, coursekey FROM subject";
$result=mysql_query($query,$con);

echo "<table border=1>
<tr>
<th> ID </th>
<th> SUBJECT</th>
</tr>";
while($record=mysql_fetch_array($result)){
echo "<tr>";
echo "<td>" . $record['courseid']."</td>";
echo "<td>" . $record['coursekey']."</td>";
echo "</tr>";
}
echo "</table>";
?></p>
		  
        </div><!--close content_item-->
	    
         <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">
	
       </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
