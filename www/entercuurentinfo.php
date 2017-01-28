<?php



	
	$text=1;
	$student=3;
	$idtest=23;
	// один запрос, в котором все данные для временной таблицы
		
	//$query1="select distinct Reading_ID_Texts from reading, reading_questions, reading_questions_answers WHERE Reading_Questions_ID_Texts='$text' AND Reading_Questions_Answers_ID_Questions=Reading_Questions_ID_Questions";
	//$result1=mysql_query($query1,$subd);

	//Заполнение временных таблиц
	//************************************************************
	
	//Внесение новой строки тестирования(добавляется ИД текста)
	//while($myrow= mysql_fetch_array($result1))
	//{
	$result4 = mysql_query ("INSERT INTO current_reading_texts (Current_Reading_Texts_ID_Students, Current_Reading_Texts_ID_Texts) VALUES ('$student','$text')");
	$idlast=mysql_insert_id();
	echo "ИД нового тестирования - ";
	echo $idlast;//ИД нового тестирования	
	echo "<br>";
	//$querytext="select Reading_Text from reading, current_reading_texts where Reading_ID_Texts=Current_Reading_Texts_ID_Texts AND Current_Reading_Texts_ID_Current_Reading='$idlast'";
	//$result7=mysql_query($querytext,$subd);
	
	//Заполнение таблицы с вопросами.........................
	$query2="select * from current_reading_texts, reading, reading_questions WHERE Current_Reading_Texts_ID_Current_Reading='$idlast'";
	$result2=mysql_query($query2,$subd);
		while($myrow2= mysql_fetch_array($result2))
	{
	$idquestion2=$myrow2['Reading_Questions_ID_Questions'];
	echo "ИД вопроса к тексту - ";
	echo $idquestion2;
	echo "<br>";
	$text2=$myrow2['Reading_Questions_ID_Questions'];
	$result5 = mysql_query ("INSERT INTO current_reading_questions (Current_Reading_Questions_ID_Current_Reading_Text, Current_Reading_Questions_ID_Questions) VALUES ('$idlast','$idquestion2')");
	$idaddquestion=mysql_insert_id();
	$result6 = mysql_query ("INSERT INTO current_reading_answers (Current_Reading_Answers_ID_Questions) VALUES ('$idaddquestion')");
	echo "ИД вопроса во временной таблице - ";
	echo $idaddquestion;
	echo "<br>";
	
	}
	
		
		
		
		
		
		
		
	
	//}
	//..............................................................
	
	echo "Вся информация добавлена <br>***********************************************************<br>";
	
	

	
	
	$idlast=80;// delete then
//Вывод всей информации по текущему тесту

// Text
/*echo "<br>Текст тестироваиния:<br><br>";

$query8="select Reading_Text from reading, current_reading_texts WHERE Current_Reading_Texts_ID_Texts=Reading_ID_Texts AND Current_Reading_Texts_ID_Current_Reading='$idlast'";
$result8=mysql_query($query8,$subd);
$myrow8= mysql_fetch_array($result8);
$showtext=$myrow8['Reading_Text'];//Текст тестирования
echo $showtext;
echo "<br><br><br>"; */
//------------------------















//**************************8
?>