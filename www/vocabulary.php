<?php
if (isset($_SESSION['Students_login']))
	{
	include ("db_connect.php");
	
	
	
	//*****************************************File from Grammar
	
	
	
	$countq= isset($_POST['countq']) ? $_POST['countq'] : ''; //quantity of quest to test
$counta = isset($_POST['counta']) ? $_POST['counta'] : '';
$q=1;
$countright=0;
while ($q<=$countq)
{
$w="question";
$w=$w.$q;
$namequestion2 = isset($_POST[$w]) ? $_POST[$w] : '';

$w2=$w;
$w4=$w;
$qqq="answer";
$qqq2="textanswer";
$w2=$w2.$qqq;
$w4=$w4.$qqq2;
$questionanswersq=isset($_POST[$w2]) ? $_POST[$w2] : '';
$questionanswersq222=isset($_POST[$w4]) ? $_POST[$w4] : '';


//Проверка выбранного ответа на правильность
//***********
$query33="select * from grammar_questions_answers WHERE Grammar_Questions_Answers_ID_Answers='$questionanswersq'";
$result33=mysql_query($query33,$subd);

$pass2 = mysql_fetch_row($result33);

			if ($pass2[3]==1)
			{
				$r= 'Правильно';
				$countright=$countright+1;
			}
			else
			{
				if ($pass2[3]==2)
				{
				$m=$_POST[nameanswer];
				if ($pass2[2]==$questionanswersq222)
				{
				$r= 'Правильно';
				$countright=$countright+1;
				}
				else
				{
				
				$r= 'Неправильно2, m='.$questionanswersq222;
				}
				
				}
				else
				{
				$r= 'Неправильно';
				}
			}
			
		//////////////////	
		
		
		echo "Ответ к вопросу № ";
echo $namequestion2;//id of question -ЕГО В БАЗУ ВНОСИТЬ
echo "  -  ";
echo $questionanswersq;
echo "  -  ";
echo $r;
echo "<br>";
			
			
		////////////////////////	
			
$q=$q+1;
}


$mark=$countright*100/$countq;
$mark2=(int)$mark;
//echo "Из 100 баллов вы набрали - ".$mark2;
//echo "<br>";

$idresult=$_SESSION['Result'];
$result2 = mysql_query ("Update results SET Results_Grammar='$mark2' Where Results_ID_Results=$idresult");


/*
//#############################################################################
//Вывод ответо пользователя
echo "Ответ к вопросу № ";
echo $namequestion2;//id of question -ЕГО В БАЗУ ВНОСИТЬ
echo "  -  ";
echo $questionanswersq;
echo "  -  ";
echo $r;
echo "<br>";
$q=$q+1;
}

$mark=$countright*100/$countq;
$mark2=(int)$mark;
echo "Из 100 баллов вы набрали - ".$mark2;
echo "<br>";
	

//#############################################################################	
*/	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//***************************************************************
	
	
	
	
	
	
	
	
	$complicacy=$_SESSION['Complicacy'];
	
	
	$query1="select * from vocabulary where Vocabulary_ID_Complicacy='$complicacy'";
	
	$result1=mysql_query($query1,$subd);
	
	
	$num=mysql_num_rows($result1);
	$num2= rand (1,$num);
	
	$i=1;
while($myrow= mysql_fetch_array($result1))
	{
		
	if ($i==$num2)
	{
	$text1=$myrow['Vocabulary_Text'];
	$idtext=$myrow['Vocabulary_ID_Texts'];
	echo $text1;
	}
	$i=$i+1;
	}
$query2="select * from vocabulary_words where Vocabulary_Words_ID_Texts='$idtext' ORDER BY Vocabulary_Words_InitialForm ";
$result2=mysql_query($query2,$subd);

	$countanswers=mysql_num_rows($result2);
	
	echo "<br><br><br>";
	//***********************************************************************************
	
	//***********************************************************************************

	$text2="";
	$i=1;
	while($myrow2= mysql_fetch_array($result2))
	{
	echo $i;
	echo ". ";	
	echo $myrow2['Vocabulary_Words_InitialForm'] ;
	echo("<form action=\"index.php?T=4\" method=\"post\">");
	
	 $w="answer";
	 $answer=$w.$i;
	 
	 $w2="id";
	 $answerid=$w2.$i;
	 
	 
	 $idq=$myrow2['Vocabulary_Words_ID_Words'];
	 
	echo ("<p><input type=\"text\"  name=$answer >");
	echo ("<input type=\"hidden\" name=$answerid value= $idq>");
		
	
	$s="select";
	$s=$s.$i;	
	
	echo(" <select  name=$s>");
	$j=1;
	while ($j<=$countanswers)
	{	
   echo(" <option  value=$j>$j</option>");
   $j=$j+1;
	}
  echo("</select> </p>");
	
$i=$i+1;	
	} 
	echo ("<input type=\"hidden\" name=countanswers value= $countanswers>");
	echo ("<input type=\"hidden\" name=idtext value= $idtext>");
	echo ("	<p><input type=\"submit\" class=\"btn btn-primary\" value=\"Ответить на вопросы\" /></p>");
 echo("</form>");
	
		
	mysql_close();
	
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
?>