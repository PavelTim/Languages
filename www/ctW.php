<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{
$W = $_GET["W"];


if($W==1)
{
$topicspeaking = isset($_POST['textheader']) ? $_POST['textheader'] : '';
	include ("db_connect.php");
	$result1 = mysql_query ("INSERT INTO letter (Letter_ID_Complicacy, Letter_Topic) VALUES (3, '$topicspeaking')");				
	mysql_close();

if ($result1) {echo "<br>����� ���� ��� ������ ���������!<br><br>"; 

echo ("	<form action=\"index.php\" method=\"post\">");
echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"������\" /></p>");
echo ("	</form>");

}
	else {echo "������ ���������� ����!";}

}


else
{


	
echo ("<div id=\"speakingform\">");
echo ("	<form action=\"index.php?W=1&&T=21\" method=\"post\">");


echo("�������� ������� ��������� ���� ��� ����������� �����:<br>");
	echo(" <select name=\"complicacy\">");
   echo(" <option value=\"Elementary\">Elementary</option>");
   echo(" <option value=\"Beginner\">Beginner</option>");
   echo(" <option value=\"Pre-Intermediate\">Pre-Intermediate</option>");
    echo("<option value=\"Intermediate\">Intermediate</option>");
	echo("<option value=\"Upper-Intermediate\">Upper-Intermediate</option>");
	echo("<option value=\"Advanced\">Advanced</option>");
  echo("</select>");
  echo("<br><br>");
  

echo ("	������� �������� ����� ���� ������:<br> <input type=\"text\" name=\"textheader\" />");
 echo("<br><br>");
echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"�������� ����\" /></p>");
echo ("	</form>");
echo ("	</div>");
	
}	
	
	
	

	
	
	
	
}	
?>