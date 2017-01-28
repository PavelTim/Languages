<?php
//session_start();
if (isset($_SESSION['Students_login']))
	{
	include ("db_connect.php");
	
	$complicacy=$_SESSION['Complicacy'];
	$student=$_SESSION['ID'];
	
	
	$result2 = mysql_query ("INSERT INTO results (Results_ID_Students) VALUES ('$student')");		
	$idresultnew=mysql_insert_id();
	$_SESSION['Result']=$idresultnew;
	//echo "new result id - ";
	//echo $idresult;
	
	$query1="select * from reading Where Reading_ID_Complicacy='$complicacy'";

	
	$result1=mysql_query($query1,$subd);
	

$num=mysql_num_rows($result1);
$num2= rand (1,$num);


$i=1;
while($myrow= mysql_fetch_array($result1))
	{
		
	if ($i==$num2)
	{
	
	$text1=$myrow['Reading_Text'];
	$header=$myrow['Reading_Header'];
	$_SESSION['Reading']=$myrow['Reading_ID_Texts'];
	
	}
	
	$i=$i+1;
		
	}
	

	
	mysql_close();
	
	echo ("<h3><center>$header</center></h3>");
	echo "<br>";
	echo $text1;
	echo "<br><br>";
	echo ("<form>");
	echo ("<input type=\"button\" class=\"btn btn-primary\" value=\"Прочитано\" onclick=\"window.location.href='index.php?T=7'\" />");
	echo ("</form>");
	

	}
	
?>