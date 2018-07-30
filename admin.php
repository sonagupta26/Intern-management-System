<?php 
define('DB_HOST', 'localhost'); define('DB_NAME', 'practice');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysql_select_db(intern,$con);

 /* $ID = $_POST['user'];
 $Password = $_POST['pass']; */

 function SignIn()
 { 
session_start();  
if(!empty($_POST['user']))
 { 
$query = mysql_query("SELECT * FROM administrator where userName = '$_POST[user]' AND pass = '$_POST[pass]'") ;
 $row = mysql_fetch_array($query);

 if(!empty($row['userName']) AND !empty($row['pass'])) 
 {
 $_SESSION['userName'] = $row['pass'];
header("Location:dashboard.php");
 } 
 else 
 { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
 }
 }
 }
 if(isset($_POST['submit']))
 {
header("Location:dashboard.php");
 
SignIn();
 } 
?>
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
	    <h2>Get Access To Student's Data</h2>
      </div><!--close header-->		
      <div id="content">
        <div class="clear"></div>
        <div class="content_item">
          <h2>Login for Admin</h2>
          <p></p>
		  <article class="post">
  <header class="postheader">
  <h2><u>Admin Login</u></h2>
  <h2><?php  //echo $log;?></h2>
  </header>
  <section class="entry">
  <form action="admin.php" method="post" class="form">
   <p class="textfield">
      <label for="author">
             <small>Admin Login ID (required)</small>
          </label>
           <input name="uid" id="uid" value="" size="22" tabindex="1" type="text">
   </p>
   <p class="textfield">
   <label for="email">
              <small>Password (required)</small>
          </label>
       <input name="pwd" id="pwd" value="" size="22" tabindex="2" type="password">
   </p>
   <p>
     <input name="submit" id="submit" tabindex="5" type="submit"/>


     <input name="comment_post_ID" value="1" type="hidden">
  
   <div class="clear"></div>
</form>
  <form action="admin.php" method="post" class="form">

  </section>
</div>
</section>
</article>
        </div><!--close content_item-->
	    
		  <div class="sidebar_container">  	  
		    <div class="sidebar">
              <div class="sidebar_item">
              
		         
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">

       </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
