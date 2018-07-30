<?php 
include("conection.php");
if(isset($_GET['resid']))
{
$rid =	$_GET['resid'];
}
else
{
	$rid =	$_POST['rollno'];
}
$result= mysql_query("SELECT * FROM studentdetails where studid='$rid' ");
$result1= mysql_query("SELECT * FROM subject");
$result2= mysql_query("SELECT * FROM attendence");
$result3= mysql_query("SELECT * FROM examination where studid='$rid'");
 while($row1 = mysql_fetch_array($result))
  {
	  $regno = $row1['studid'];
	  $name = $row1['studfname'] . " " . $row1['studlname'] ;
	  $fathersname = $row1['fathername'];
	  $course = $row1['courseid'];
	  $semester = $row1['semester'];
	  $dob = $row1['dob'];
	  
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Result</title>
<style>
html {background:#fff; height:100%; width:100%;}
body {background:#f4f4f4; width:500px; margin:25px auto 25px; text-align:center; display:block; border:solid 1px #ccc; font:normal 14px "Trebuchet MS", Arial, Helvetica, sans-serif; line-height:22px; padding:50px;}
a {color:#F60;}


</style>
</head>

<body>

<form name="form1" method="post" action="">
  <p>
    <label for="textfield">Reg No:   </label>
 <?php echo $regno; ?> </p>
  <p>
    <label for="textfield2">Name: </label> <?php echo $name; ?>
  </p>
  <p>
  <label for="textfield3">Fathers Name:</label> <?php echo $fathersname; ?> </p>
  <p>
    <label for="select">Course</label>
:  <?php echo $course; ?> </p>
  <p>
    <label for="select2">Semester</label>
  : <?php echo $semester; ?></p>
  <p>
    <label for="textfield4">DOB</label>
    :  <?php echo $dob; ?>
  </p>
  <hr>
  
       <?php
	  $i =1;

  while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>&nbsp;"  . $i . "</td>";
  echo "<td>&nbsp;" . $row['course'] . "</td>";

  $result4 = mysql_query("SELECT * FROM subject,studentdetails where subid='$row[courseid]'");
    	   while($rowa= mysql_fetch_array($result4))
  {
		  echo "<td>&nbsp;" . $rowa['studfname'] . " " . $rowa['studlname']."</td>";
  }	
  }  
?>
    </tr>
     <?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("intern", $con);


$query="SELECT * FROM examination";
$result26=mysql_query($query,$con);

     echo "<table border=1>
    <tr>
      <th> SUBJECT</th>
      <th> MAXMARKS</th>
      <th> SCORED</th>
      <th> RESULT</th>
      <th> COMMENTS</th>
    </tr>";
while($record=mysql_fetch_array($result26)){
echo "<tr>";
echo "<td>" . $record['subid']."</td>";
echo "<td>" . $record['maxmarks']."</td>";
echo "<td>" . $record['scored']."</td>";
echo "<td>" . $record['result']."</td>";
echo "<td>" . $record['comments']."</td>";
echo "</tr>";
}
echo "</table>";
  ?>
    
  </table>
  <p>&nbsp;</p>
  <table width="486" height="135" border="1">
    <tr>
      <td width="60" height="45">Subject</td>
      <td width="54">Total Classes</td>
      <td width="75">Attended Classes</td>
      <td width="104">Percentage</td>
    </tr>
    <?php
     while($row4 = mysql_fetch_array($result2))
  {?>
    <tr>
      <td>&nbsp;<?php echo $row4['studid']; ?></td>
      <td>&nbsp;<?php echo $row4['totalclasses']; ?> </td>
      <td>&nbsp;<?php echo $row4['attendedclasses']; ?> </td>
       <td>&nbsp;<?php echo $row4['atten']; ?> </td>
    <?php
  }
  ?>
   
  </table>
 
</form>
</body>
</html>
