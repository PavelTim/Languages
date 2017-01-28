<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{
	
	
	echo ("<script type=\"text/javascript\">");
echo ("var total  = 1;");
echo ("var total1 = 11;");
echo ("var y = 0;");
echo ("function showTextBox() {");
echo ("document.getElementById(total).style.display = \"block\";");
echo ("document.getElementById(total1).style.display = \"block\";");
echo ("total++;");
echo ("total1++;");
echo ("	if (total == 8) alert('Максимальное число ответов - 8');");
echo ("};");
echo ("</script>");
	
	
	
	
	
	
	
	
	
	
	
	
	
//****************************************************FROM LETTER

$textheader = isset($_POST['textheader']) ? $_POST['textheader'] : '';
$create_test_reading_textarea = isset($_POST['create_test_reading_textarea']) ? $_POST['create_test_reading_textarea'] : '';

					//Send letter here
	include ("db_connect.php");
	
	$teacher=$_SESSION['ID'];
	//$result1 = mysql_query ("INSERT INTO reading (Reading_ID_Complicacy, Reading_Text, Reading_Header, Reading_ID_Creator) VALUES ('1', '$create_test_reading_textarea', '$textheader','$teacher')");				
	//$idreadingnew=mysql_insert_id();	
	$_SESSION['idreadingnew']='9';//$idreadingnew;
	
	
	
//echo "Новый текст добавлен в систему";




echo ("	<form action=\"index.php?T=13\" method=\"post\">");   



echo ("<label for=\"InputQuestion\">Введите вопрос</label>");
    echo ("<input type=\"text\" class=\"form-control\" id=\"InputQuestion\" name = \"Question\">");
		//echo ("	<br><input type=\"file\" name=\"image\" value=\"Обзор\">");
		
		echo ("	<table class=\"table table-bordered\">");
		echo ("	<br><caption>Введите варианты ответов (от 2 до 8): </caption>");
		 echo ("<thead><tr>");
         echo ("<th><center>R</center></th>");
         echo ("<th>Answer</th></tr></thead>");
	 	echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_0\" id = \"10\" ></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer0\" id = \"0\" ></td></tr>");
		echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_1\" id = \"11\" style=\"display:none\"></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer1\" id = \"1\" style=\"display:none\"></td></tr>");
		echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_2\" id = \"12\" style=\"display:none\"></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer2\" id = \"2\" style=\"display:none\"></td></tr>");
		echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_3\" id = \"13\" style=\"display:none\"></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer3\" id = \"3\" style=\"display:none\"></td></tr>");
		echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_4\" id = \"14\" style=\"display:none\"></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer4\" id = \"4\" style=\"display:none\"></td></tr>");
		echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_5\" id = \"15\" style=\"display:none\"></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer5\" id = \"5\" style=\"display:none\"></td></tr>");
		echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_6\" id = \"16\" style=\"display:none\"></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer6\" id = \"6\" style=\"display:none\"></td></tr>");
		echo ("	<tr><td><center><input type=\"checkbox\" name = \"Check_7\" id = \"17\" style=\"display:none\"></center></td><td><input type = \"text\" class=\"form-control\" name = \"Answer7\" id = \"7\" style=\"display:none\"></td></tr>");
		echo ("	</table>");

















echo ("<input type=\"button\" class=\"btn btn-primary\" value=\"Добавить поле ответа\" id=\"add\" onclick=\"return showTextBox();\"> <br><br>");













       
echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Сохранить вопрос\"/>");
echo ("</form>");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
mysql_close();



}
?>





