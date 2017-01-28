<?php
session_start();
$D = $_GET["D"];
$User_login = isset($_POST['User_login']) ? $_POST['User_login'] : '';
$User_password = isset($_POST['User_password']) ? $_POST['User_password'] : '';

if(isset($_SESSION['Students_login']) || isset($_SESSION['Teachers_login']))
	
	if($D==1)
	{
	include ("db_connect.php"); 
	$query1="select * from students where students.Students_Login= '$User_login' AND Students.Students_Password= '$User_password'";
	$result=mysql_query($query1,$subd);
	
	$query2="select * from teachers where teachers.Teachers_Login= '$User_login' AND teachers.Teachers_Password= '$User_password'";
	$result2=mysql_query($query2,$subd);
	
	if (mysql_num_rows($result) != 0)
	{
	$pass =  mysql_fetch_array($result,$subd);
			
			if ($_POST["User_password"]!= $pass['Students_password'])
			{
				echo 'Вы ввели неправильный пароль!';
			}
		else 
		{
		$_SESSION['Students_login'] = $_POST["User_login"];
		}
	
	}
	else
	{
	if (mysql_num_rows($result2) != 0)
	{
	$pass =  mysql_fetch_array($result2,$subd);
			
			if ($_POST["User_password"]!= $pass['Teachers_password'])
			{
				echo 'Вы ввели неправильный пароль!';
			}
		else 
		{
		$_SESSION['Teachers_login'] = $_POST["User_login"];
		}
	

	}
	}
	}
	
	else
	{	
	echo ("<div id=\"enterform\">");
	echo ("<form action=\"index.php?D=1&&ES=1&&M=1\" method=\"post\">");
	echo ("<p>Логин:<br></p> <p> <input type=\"text\" name=\"User_login\" /></p>");
	echo ("<p>Пароль:<br></p> <p><input type=\"password\" name=\"User_password\" /></p>");
	echo ("<p><input type=\"submit\" class=\"b1\" value=\"Войти\" /></p>");
	echo ("</form>");
	echo ("</div>");
				
	}
	
?>