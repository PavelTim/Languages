<?php

$F = $_GET["F"];
if($F==1)
{
$Students_surname = isset($_POST['Students_surname']) ? $_POST['Students_surname'] : '';
$Students_name = isset($_POST['Students_name']) ? $_POST['Students_name'] : '';
$Students_fathername = isset($_POST['Students_fathername']) ? $_POST['Students_fathername'] : '';
$Students_login = isset($_POST['Students_login']) ? $_POST['Students_login'] : '';
$Students_password = isset($_POST['Students_password']) ? $_POST['Students_password'] : '';
$Students_group=1;
$Students_teacher=12;

include ("db_connect.php");

$result = mysql_query ("INSERT INTO students (Students_Surname, Students_Name, Students_Fathername, Students_Login, Students_Password,Students_ID_Groups,Students_ID_Teachers) VALUES ('$Students_surname','$Students_name','$Students_fathername','$Students_login','$Students_password','$Students_group','$Students_teacher')");
	if ($result) {echo "Новый студент добавлен!<br><br>";echo "Теперь вы можете войти под своими персональными данными!<br><br>";}
	else {echo "Ошибка добавления студента!";}
}
else
{
echo ("<div id=\"regform\">");
echo ("	<form action=\"index.php?F=1&&T=10\" method=\"post\">");
echo ("	<p>Фамилия:<br></p> <p> <input type=\"text\" name=\"Students_surname\" /></p>");
echo ("	<p>Имя:<br></p> <p> <input type=\"text\" name=\"Students_name\" /></p>");
echo ("	<p>Отчество:<br></p> <p> <input type=\"text\" name=\"Students_fathername\" /></p>");
echo ("	<p>Логин:<br></p> <p> <input type=\"text\" name=\"Students_login\" /></p>");
echo ("	<p>Пароль:<br></p> <p><input type=\"password\" name=\"Students_password\" /></p>");
echo ("	<p><input type=\"submit\" class=\"b1\" value=\"Зарегистрироваться\" /></p>");
echo ("	</form>");
echo ("	</div>");
}



?>



