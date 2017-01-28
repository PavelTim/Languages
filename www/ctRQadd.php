<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{
	$Name_question = isset($_POST['Question']) ? $_POST['Question'] : ''; 
	
	$Answer0 	   = isset($_POST['Answer0']) ? $_POST['Answer0'] : '';
	$Prav0         = isset($_POST['Check_0']) ? $_POST['Check_0'] : '';
	
	$Answer1       = isset($_POST['Answer1']) ? $_POST['Answer1'] : '';
	$Prav1         = isset($_POST['Check_1']) ? $_POST['Check_1'] : '';
	
	$Answer2 = isset($_POST['Answer2']) ? $_POST['Answer2'] : '';
	$Prav2 = isset($_POST['Check_2']) ? $_POST['Check_2'] : '';
	
	$Answer3 = isset($_POST['Answer3']) ? $_POST['Answer3'] : '';
	$Prav3 = isset($_POST['Check_3']) ? $_POST['Check_3'] : '';
	
	$Answer4 = isset($_POST['Answer4']) ? $_POST['Answer4'] : '';
	$Prav4 = isset($_POST['Check_4']) ? $_POST['Check_4'] : '';
	
	$Answer5 = isset($_POST['Answer5']) ? $_POST['Answer5'] : '';
	$Prav5 = isset($_POST['Check_5']) ? $_POST['Check_5'] : '';
	
	$Answer6 = isset($_POST['Answer6']) ? $_POST['Answer6'] : '';
	$Prav6 = isset($_POST['Check_6']) ? $_POST['Check_6'] : '';
	
	$Answer7 = isset($_POST['Answer7']) ? $_POST['Answer7'] : '';
	$Prav7 = isset($_POST['Check_7']) ? $_POST['Check_7'] : '';
	
	
	$idreadingnew = $_SESSION['idreadingnew'];
	
	
	
	//$ID_group = isset($_POST['ID_group']) ? $_POST['ID_group'] : '';
	// Проверяем пришел ли файл
	//if( !empty( $_FILES['image']['name'] ) ) {
	// Проверяем, что при загрузке не произошло ошибок
	//if ( $_FILES['image']['error'] == 0 ) {
	// Если файл загружен успешно, то проверяем - графический ли он
	//if( substr($_FILES['image']['type'], 0, 5)=='image' ) {
	// Читаем содержимое файла
	//$image = file_get_contents( $_FILES['image']['tmp_name'] );
	// Экранируем специальные символы в содержимом файла
	//$image = mysql_escape_string( $image );
	// Формируем запрос на добавление файла в базу данных
	//}
 //}
//}
//if(copy($_FILES['uploadfile']['tmp_name'], $uploadfile)){
//$res = mysql_query("INSERT INTO `table`(`patch`)  VALUES(".$_FILES['uploadfile']['name'].")");
  
	if (isset($Name_question) && isset($idreadingnew)  && isset($Answer1)  ){//&& isset($Answer2)
  		include ("db_connect.php"); 			/*Соединяемся с базой*/
		// 
  	
	
		$result1 = mysql_query ("INSERT INTO reading_questions (Reading_Questions_ID_Texts, Reading_Questions_Question) VALUES ('$idreadingnew','$Name_question')");
		
		$ID_question=mysql_insert_id();	
		
		if ($_POST['Answer0']!="")
		{if  (isset($_POST['Check_0']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer0','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer0','0')");}
		}
		if ($_POST['Answer1']!="")
		{if  (isset($_POST['Check_1']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer1','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer1','0')");}
		}
		if ($_POST['Answer2']!="")
		{if  (isset($_POST['Check_2']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer2','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer2','0')");}
		}
		if ($_POST['Answer3']!="")
		{if  (isset($_POST['Check_3']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer3','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer3','0')");}
		}
		if ($_POST['Answer4']!="")
		{if  (isset($_POST['Check_4']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer4','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer4','0')");}
		}
		if ($_POST['Answer5']!="")
		{if  (isset($_POST['Check_5']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer5','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer5','0')");}
		}
		if ($_POST['Answer6']!="")
		{if  (isset($_POST['Check_6']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer6','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer6','0')");}
		}
		if ($_POST['Answer7']!="")
		{if  (isset($_POST['Check_7']))
			{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer7','1')");}
			 else{$Ans = mysql_query ("INSERT INTO reading_questions_answers (Reading_Questions_Answers_ID_Questions,Reading_Questions_Answers_Answer,Reading_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer7','0')");}
		}
   		if ($result1=='true'){
		
		
			echo "Вопрос успешно добавлен";
		}
  		else{
			echo "Ошибка добавления вопроса";
		}
	}
	else {
  		echo "Заполнены не все поля!!!";
	}
}
?>



