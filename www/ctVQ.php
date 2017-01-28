<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{
	
	include ("db_connect.php");



	
/*	
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
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
$idtext2=2;
$query2 = "select * from vocabulary where Vocabulary_ID_Texts = '$idtext2' ";
$result2=mysql_query($query2,$subd);
	while($myrow2= mysql_fetch_array($result2))
{
$text=$myrow2['Vocabulary_Text'];
echo $text;
echo "<br><br><br>";
}
	
	
	
	
	
	
	
	
	
	
	
//****************************************************FROM LETTER

$textheader = isset($_POST['textheader']) ? $_POST['textheader'] : '';
$create_test_reading_textarea = isset($_POST['create_test_reading_textarea']) ? $_POST['create_test_reading_textarea'] : '';

					//Send letter here
	
	
	$teacher=$_SESSION['ID'];
	//$result1 = mysql_query ("INSERT INTO reading (Reading_ID_Complicacy, Reading_Text, Reading_Header, Reading_ID_Creator) VALUES ('1', '$create_test_reading_textarea', '$textheader','$teacher')");				
	//$idreadingnew=mysql_insert_id();	
	$_SESSION['idreadingnew']='9';//$idreadingnew;
	
	
	
//echo "Новый текст добавлен в систему";




echo ("	<form action=\"index.php?T=17&&G=1\" method=\"post\">");   


		echo ("	<table class=\"table table-bordered\">");
		//echo ("	<br>Данные для нового слова: </caption>");
		 echo ("<thead><tr>");
         echo ("<th><center>Категория</center></th>");
         echo ("<th>Значение</th></tr></thead>");
	 	echo ("	<tr><td>Начальная форма слова</td><td><input type = \"text\" class=\"form-control\" name = \"Answer0\" id = \"0\" ></td></tr>");
		echo ("	<tr><td>Правильная форма слова</td><td><input type = \"text\" class=\"form-control\" name = \"Answer1\" id = \"0\" ></td></tr>");
echo ("	<tr><td>Позиция в тексте</td><td><input type = \"text\" class=\"form-control\" name = \"Answer2\" id = \"0\" ></td></tr>");
		echo ("	</table>");


//echo ("<input type=\"button\" class=\"btn btn-primary\" value=\"Добавить поле ответа\" id=\"add\" onclick=\"return showTextBox();\"> <br><br>");


       
echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Сохранить слово\"/>");

echo " ";
echo ("</form>");


echo ("	<form action=\"index.php\" method=\"post\">");          
echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Готово\"/>");
echo ("</form>");

	
	

	$G=$_GET['G'];
	
	
	if ($G==1)


{
$initial=$_POST['Answer0'];
$resulted=$_POST['Answer1'];
$position=$_POST['Answer2'];

$result1 = mysql_query ("INSERT INTO vocabulary_words (Vocabulary_Words_ID_Texts, Vocabulary_Words_Position, Vocabulary_Words_InitialForm, Vocabulary_Words_EndForm) VALUES ('5', '$position', '$initial','$resulted')");	


$idtext=5;
$query = "select * from vocabulary_words where Vocabulary_Words_ID_Texts='$idtext' ORDER BY Vocabulary_Words_Position ";
$result=mysql_query($query,$subd);


		echo ("	<table class=\"table table-bordered\">");
		 ("	<caption>Добавленные слова к тексту: </caption>");
		 echo ("<thead><tr>");
         echo ("<th><center>Начальная форма слова</center></th>");
         echo ("<th>Правильная форма слова</th>");
		 echo ("<th>Позиция в тексте</th></tr></thead>");	

while($myrow= mysql_fetch_array($result))
{

$in= $myrow['Vocabulary_Words_InitialForm'];
$res= $myrow['Vocabulary_Words_EndForm'];
$pos= $myrow['Vocabulary_Words_Position'];

	 	echo ("	<tr><td>$in</td><td>$res</td><td>$pos</td></tr>");
		

}
echo ("	</table>");

}	
	
	
	
	
	
mysql_close();



}
?>





