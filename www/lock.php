<?php
	include("db_connect.php");
	session_start();
	if (isset($_POST["Students_login"]))
	{
		$query = "SELECT Students_password,Students_name,Students_surname,Students_fathername FROM students WHERE Students_Login='".$_POST["Students_login"]."'";
		$lst = mysql_query($query,$subd);
		if (!$lst)
        {
			echo '��������� ����������� ������ ��� ����������� � ��...';
			exit();
        }
		if (mysql_num_rows($lst) == 0) echo '�� ����� ������������ ��� ������������!';
        else
		{
			$pass =  mysql_fetch_array($lst,$subd);
			
			if ($_POST["Students_password"]!= $pass['Students_password'])
			{
				echo '�� ����� ������������ ������!';
			}
		else 
		{
		$_SESSION['Students_login'] = $_POST["Students_login"];
		$_SESSION['Students_name'] = $pass['Students_Name'];
		$_SESSION['Students_surname'] = $pass['Students_Surname'];
		$_SESSION['Students_fathername'] = $pass['Students_Fathername'];
		}
		}
	}
	if (isset($_POST["logout"])) 
	{
		session_unset();
	}
	if(isset($_SESSION['Students_login']))
	{	
		echo ('<br><br><center>������������, '.$pass['Students_surname'].' '.$_SESSION['Students_login'].' '.$_SESSION['Students_fathername'].'! <br><br>');
		echo ("<form method=POST>
			   <input type='submit' value='����� �� �������'>
			   <input type='hidden' name='logout' value='1'></form>");	
	}
	else
	{	
		echo("<p><center>�� �� ������������!</p></p>
			<form method=POST action='index.php'>   
			<p>�����: <input type='text' name='Students_login'></p>
			<p>������: <input type='password' name='Students_password'></p>
			<p><input type='submit' value='�����'></p></form>");			
	}
?>