<?php
	include("db_connect.php");
	session_start();
	
	if (isset($_POST["User_login"]))
	{
		$query = "SELECT * FROM students WHERE Students_Login='".$_POST["User_login"]."'";
		$lst = mysql_query($query,$subd);
		
		$query2 = "SELECT * FROM teachers WHERE Teachers_Login='".$_POST["User_login"]."'";
		$lst2 = mysql_query($query2,$subd);
		
		
		if (!$lst && !$lst2)
        {
			echo 'Произошла неизвестная ошибка при подключении к БД...';
			exit();
        }
		if (mysql_num_rows($lst) == 0 && mysql_num_rows($lst2)== 0) echo 'Вы ввели неправильное имя пользователя!';
        else
		{
		 if (mysql_num_rows($lst) !=0)
		 {
			$pass =  mysql_fetch_row($lst);
			
			if ($_POST["User_password"]!= $pass[7])
			{
				echo 'Вы ввели неправильный пароль!';
			}
			else 
			{
			$_SESSION['Students_login'] = $_POST["User_login"];
			$_SESSION['Students_surname']=$pass[1];
			$_SESSION['Students_name']=$pass[2];
			$_SESSION['Students_fathername']=$pass[3];
			$_SESSION['ID']=$pass[0];
			
			
			$query = "SELECT * FROM students, groups, complicacy WHERE Students_ID_Students='".$_SESSION['ID']."' AND Students_ID_Groups=Groups_ID_Groups AND Groups_ID_Complicacy=Complicacy_ID_Complicacy";
			$lst = mysql_query($query,$subd);
			$pass = mysql_fetch_array($lst);
			$complicacy=$pass['Complicacy_ID_Complicacy'];
			$_SESSION['Complicacy']=$complicacy;
			
			
			$query = "SELECT * FROM complicacy WHERE Complicacy_ID_Complicacy='".$_SESSION['Complicacy']."' ";
			$result=mysql_query($query,$subd);
			$myrow= mysql_fetch_row($result);
			$_SESSION['Letter']=$myrow[2];
			
			
			}
		}
		
		
		
		if (mysql_num_rows($lst2) !=0)
		 {
			$pass2 = mysql_fetch_row($lst2);
			
			if ($_POST["User_password"]!= $pass2[5])
			{
				echo 'Вы ввели неправильный пароль!';
			}
			else 
			{
			$_SESSION['Teachers_login'] = $_POST["User_login"];
			$_SESSION['Teachers_surname']=$pass2[1];
			$_SESSION['Teachers_name']=$pass2[2];
			$_SESSION['Teachers_fathername']=$pass2[3];
			$_SESSION['ID']=$pass2[0];
			}
		}
		
	}
	}
	if (isset($_POST["logout"])) 
	{
		session_unset();
	}
	if(isset($_SESSION['Students_login']))
	{	
		//echo ('<center>Вы вошли как студент!<br>');
		/*echo ('<button type="button" class="btn btn-default" aria-label="Left Align">');
  echo ('<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span></button>');

		*/
		
		
		
		echo ('<center>Здравствуйте,<h4>'.$_SESSION['Students_name'].' '.$_SESSION['Students_surname'].' !</center></h4><center> <br><br>');
		echo ("<form action=\"index.php\" method=POST >
			   <input type='submit' class=\"btn btn-danger btn-sm\" value='Выйти из системы'>
			   <input type='hidden' name='logout' value='1'></form>");
    		
	}
	
	else
	{	
	if(isset($_SESSION['Teachers_login']))
	{	
		//echo ('<center>Вы вошли как преподаватель!');
		echo ('<center>Здравствуйте,</center> <center>'.$_SESSION['Teachers_surname'].' '.$_SESSION['Teachers_name'].' '.$_SESSION['Teachers_fathername'].'! <br><br>');
		echo ("<form action=\"index.php\" method=POST>
			   <input type='submit' class=\"btn btn-danger btn-sm\" value='Выйти из системы'>
			   <input type='hidden' name='logout' value='1'></form>");	
	}
	
	else
	{
	
		echo("<p><br>Вы не авторизованы!</p>");
			echo ("<form class=\"form-inline\" method=POST action='index.php'>");   
			echo ("<p><input type='text' name='User_login' class=\"input-small\" placeholder=\"Логин\"></p>");
			echo ("<p><input type='password' name='User_password' class=\"input-small\" placeholder=\"Пароль\"></p>");
			echo ("<p><input type='submit' class=\"btn btn-success\" value='Войти'></p></form>");
			
			
	}			
	}
?>