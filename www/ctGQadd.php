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

	

	
	//$idreadingnew = $_SESSION['idreadingnew'];

  
	if (isset($Name_question) )
	{//&& isset($Answer2)
  		include ("db_connect.php"); 			/*Соединяемся с базой*/
		// 
  	$count=0;
	if ($_POST['Answer0']!="")
	{$count=$count+1;}
	if ($_POST['Answer1']!="")
	{$count=$count+1;}
	if ($_POST['Answer2']!="")
	{$count=$count+1;}
	if ($_POST['Answer3']!="")
	{$count=$count+1;}
	if ($_POST['Answer4']!="")
	{$count=$count+1;}
	if ($_POST['Answer5']!="")
	{$count=$count+1;}
	if ($_POST['Answer6']!="")
	{$count=$count+1;}
	if ($_POST['Answer7']!="")
	{$count=$count+1;}
	if ($count==1)
	{
	
	
		if ($_POST['Answer0']!="")
		{
		
		$Answer0=$_POST['Answer0'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer0','2')");
		if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}	
	
	}
	
	
	if ($_POST['Answer1']!="")
	{
		$Answer1=$_POST['Answer1'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer1','2')");
	if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}
	}
	
	if ($_POST['Answer2']!="")
	{
		$Answer2=$_POST['Answer2'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer2','2')");
	if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}
	}
	
	
	if ($_POST['Answer3']!="")
	{
		$Answer3=$_POST['Answer3'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer3','2')");
	if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}
	}
	
	if ($_POST['Answer4']!="")
	{
		$Answer4=$_POST['Answer4'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer4','2')");
	if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}
	}
	
	if ($_POST['Answer5']!="")
	{
		$Answer5=$_POST['Answer5'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer5','2')");
	if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}
	}
	
	
	if ($_POST['Answer6']!="")
	{
		$Answer6=$_POST['Answer6'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer6','2')");
	if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}
	}
	
	if ($_POST['Answer7']!="")
	{
		$Answer7=$_POST['Answer7'];
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();
		
		$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer7','2')");
	if ($result1=='true' && $Ans=='true'){
			echo "Вопрос успешно добавлен";
		}
	}
	
	
	
	}
	else
	{
	
	
	
		$result1 = mysql_query ("INSERT INTO grammar_questions (Grammar_Questions_Question,Grammar_Questions_ID_TypesOfQuestions,Grammar_Questions_ID_Complicacy) VALUES ('$Name_question','1','3')");
		
		$ID_question=mysql_insert_id();	
		
		if ($_POST['Answer0']!="")
		{if  (isset($_POST['Check_0']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer0','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer0','0')");}
		}
		if ($_POST['Answer1']!="")
		{if  (isset($_POST['Check_1']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer1','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer1','0')");}
		}
		if ($_POST['Answer2']!="")
		{if  (isset($_POST['Check_2']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer2','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer2','0')");}
		}
		if ($_POST['Answer3']!="")
		{if  (isset($_POST['Check_3']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer3','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer3','0')");}
		}
		if ($_POST['Answer4']!="")
		{if  (isset($_POST['Check_4']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer4','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer4','0')");}
		}
		if ($_POST['Answer5']!="")
		{if  (isset($_POST['Check_5']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer5','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer5','0')");}
		}
		if ($_POST['Answer6']!="")
		{if  (isset($_POST['Check_6']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer6','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer6','0')");}
		}
		if ($_POST['Answer7']!="")
		{if  (isset($_POST['Check_7']))
			{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer7','1')");}
			 else{$Ans = mysql_query ("INSERT INTO grammar_questions_answers (Grammar_Questions_Answers_ID_Questions,Grammar_Questions_Answers_Answer,Grammar_Questions_Answers_TrueFalse) VALUES ('$ID_question','$Answer7','0')");}
		}
   		if ($result1=='true'){
		
		
			echo "Вопрос успешно добавлен";
		}
  		else{
			echo "Ошибка добавления вопроса";
		}
		}
	}
	else {
  		echo "Заполнены не все поля!!!";
	}
	
	
}
?>



