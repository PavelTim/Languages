<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	
//****************************************************FROM LETTER

$lettertext = isset($_POST['count_char_textarea']) ? $_POST['count_char_textarea'] : '';
$lettercurrentquantity = isset($_POST['count_char']) ? $_POST['count_char'] : '';
$lettertopicid=isset($_POST['lettertopicid']) ? $_POST['lettertopicid'] : '';

					//Send letter here
	include ("db_connect.php");
	
	$student=$_SESSION['ID'];
	$result1 = mysql_query ("INSERT INTO current_letter (Current_Letter_ID_Students, Current_Letter_ID_Topic, Current_Letter_Letter, Current_Letter_Quantity, Current_Letter_Checked) VALUES ('$student', '$lettertopicid','$lettertext' ,'$lettercurrentquantity',0)");				
	
	
$idresult=$_SESSION['Result'];
$result2 = mysql_query ("Update results SET Results_Letter='Проверяется' Where Results_ID_Results=$idresult");

//echo ("Письмо успешно отправлено на проверку преподавателю! <br><br>");
/*echo ("<form>");
echo ("<input type=\"button\" value=\" Перейти к разделу 'Разговорная часть' \" onclick=\"window.location.href='readingtest.php'\" />");
echo ("</form>");  */



//*******************************************************************	

	
	$complicacy=$_SESSION['Complicacy'];


//Проверка выбранного ответа на правильность
//***********
$query1="select * from speaking_topics WHERE Speaking_Topics_ID_TypesOFSpeaking=1 AND Speaking_Topics_ID_Complicacy=$complicacy";
$query2="select * from speaking_topics WHERE Speaking_Topics_ID_TypesOFSpeaking=2 AND Speaking_Topics_ID_Complicacy=$complicacy";
$result1=mysql_query($query1,$subd);
$result2=mysql_query($query2,$subd);

$query1quantity= mysql_num_rows ($result1);
$query2quantity= mysql_num_rows ($result2);

$numspeaking1= rand (1,$query1quantity);
$numspeaking2= rand (1,$query2quantity);

$i=1;

while($myrow= mysql_fetch_array($result1))
	{
		
	if ($i==$numspeaking1)
	{
	
	$topic1=$myrow['Speaking_Topics_Topic'];
	$topic1id=$myrow['Speaking_Topics_ID_Topics'];
	}
	$i=$i+1;	
	}

$i=1;	
	
	while($myrow= mysql_fetch_array($result2))
	{
		
	if ($i==$numspeaking2)
	{
	
	$topic2=$myrow['Speaking_Topics_Topic'];
	$topic2id=$myrow['Speaking_Topics_ID_Topics'];
	}
	$i=$i+1;	
	}


echo "Тема монолога: ";
echo $topic1;
echo "<br>Тема диалога:";
echo $topic2;



$idresult=$_SESSION['Result'];
$result2 = mysql_query ("Update results SET Results_Speaking='Проверяется' Where Results_ID_Results=$idresult");





mysql_close();


echo "<br><br>";

echo ("	<form action=\"index.php\" method=\"post\">");          
echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Завершить тестирование\"/>");
echo ("</form>");


}
?>





