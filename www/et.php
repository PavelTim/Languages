<?php

$D = $_GET["D"];

$Teachers_login = isset($_POST['Teachers_login']) ? $_POST['Teachers_login'] : '';
$Teachers_password = isset($_POST['Teachers_password']) ? $_POST['Teachers_password'] : '';

if($D==1)
{

include ("db_connect.php");
$query1="select * from teachers where teachers.Teachers_Login= '$Teachers_login' AND teachers.Teachers_Password= '$Teachers_password'";
$result=mysql_query($query1,$subd);

while($myrow= mysql_fetch_array($result)){ 
echo $myrow['Teachers_Surname'] ;
echo " ";
echo $myrow['Teachers_Name'];
echo " ";
echo $myrow['Teachers_Fathername'] ;
echo "<br/>";
}

mysql_close();


}
else
{

echo ("<div id=\"enterform\">");
	echo ("<form action=\"index.php?D=1&&M=2&&ET=1\" method=\"post\">");
	echo ("<p>Логин:<br></p> <p> <input type=\"text\" name=\"Teachers_login\" /></p>");
	echo ("<p>Пароль:<br></p> <p><input type=\"password\" name=\"Teachers_password\" /></p>");
	echo ("<p><input type=\"submit\" class=\"b1\" value=\"Войти\" /></p>");
	echo ("</form>");
	echo ("</div>");
}
?>