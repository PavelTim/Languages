<?php

$G = $_GET["G"];
if($G==1)
{
$Teachers_surname = isset($_POST['Teachers_surname']) ? $_POST['Teachers_surname'] : '';
$Teachers_name = isset($_POST['Teachers_name']) ? $_POST['Teachers_name'] : '';
$Teachers_fathername = isset($_POST['Teachers_fathername']) ? $_POST['Teachers_fathername'] : '';
$Teachers_login = isset($_POST['Teachers_login']) ? $_POST['Teachers_login'] : '';
$Teachers_password = isset($_POST['Teachers_password']) ? $_POST['Teachers_password'] : '';

include ("db_connect.php");

$result = mysql_query ("INSERT INTO teachers (Teachers_Surname, Teachers_Name, Teachers_Fathername, Teachers_Login, Teachers_Password) VALUES ('$Teachers_surname','$Teachers_name','$Teachers_fathername','$Teachers_login','$Teachers_password')");
	if ($result) {echo "<br>����� ������������� ��������!<br><br>"; echo "������ �� ������ ����� ��� ������ ������������� �������!<br><br>";}
	else {echo "������ ���������� �������������!";}
}
else
{
echo ("<div id=\"regform\">");
echo ("	<form action=\"index.php?G=1&&T=9\" method=\"post\">");
echo ("	<p>�������:<br></p> <p> <input type=\"text\" name=\"Teachers_surname\" /></p>");
echo ("	<p>���:<br></p> <p> <input type=\"text\" name=\"Teachers_name\" /></p>");
echo ("	<p>��������:<br></p> <p> <input type=\"text\" name=\"Teachers_fathername\" /></p>");
echo ("	<p>�����:<br></p> <p> <input type=\"text\" name=\"Teachers_login\" /></p>");
echo ("	<p>������:<br></p> <p><input type=\"password\" name=\"Teachers_password\" /></p>");
echo ("	<p><input type=\"submit\" class=\"b1\" value=\"������������������\" /></p>");
echo ("	</form>");
echo ("	</div>");
}



?>



