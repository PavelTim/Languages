<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{

$idteacher=12;
$query9="select * from current_letter, students WHERE Current_Letter_ID_Teacher ='$idteacher' AND Current_Letter_Checked='0' AND Current_Letter_ID_Students=Students_ID_Students ORDER BY Students_Surname";
$result9=mysql_query($query9,$subd);

echo("Выберите студента для проверки письма:<br><br>");


	echo ("	<table class=\"table table-bordered\">");
		 ("	<caption>Новые письмадля проверки: </caption>");
		 echo ("<thead><tr>");
         echo ("<th><center>№</center></th>");
         echo ("<th><center>Студент</center></th>");
		 echo ("<th></th></tr></thead>");

	
	$i=1;
while($myrow9= mysql_fetch_array($result9))
{
$idletter= $myrow9['Current_Letter_ID'];
$surname= $myrow9['Students_Surname'];
$name= $myrow9['Students_Name'];
$fathername= $myrow9['Students_Fathername'];
$temp=$surname." ".$name." ".$fathername;

echo ("	<form action=\"index.php?T=24\" method=\"post\">");
   echo ("	<tr><td><center>$i</center></td><td>$temp</td><td><center><input type=\"submit\" class=\"btn btn-primary\" value=\"Проверить письмо\"/></center>");
   echo ("<input type=\"hidden\" name=letterid value= $idletter></td></tr>");
  
  echo ("</form>");
  $i=$i+1;
}

echo ("	</table>");




	}	
?>