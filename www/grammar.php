<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
include ("db_connect.php");

$G = $_GET["G"];

if($G=='1')
{
$countq= isset($_POST[countq]) ? $_POST[countq] : ''; //quantity of quest to test
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
			

//***********
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

}
else
{
//***********************************************************File from Reading


$text=1;
$student=3;
$idtest=23;
$idlast=98;

	



$countq= isset($_POST[countq]) ? $_POST[countq] : ''; //quantity of quest to test
//$i3=1;
$counta = isset($_POST['counta']) ? $_POST['counta'] : '';
$q=1;
$countright=0;
while ($q<=$countq)
{
$w="question";
$w=$w.$q;
$namequestion2 = isset($_POST[$w]) ? $_POST[$w] : '';

$w2=$w;
$qqq="answer";
$w2=$w2.$qqq;
$questionanswersq=isset($_POST[$w2]) ? $_POST[$w2] : '';

//Проверка выбранного ответа на правильность
//***********
$query33="select * from reading_questions_answers WHERE Reading_Questions_Answers_ID_Answers='$questionanswersq'";
$result33=mysql_query($query33,$subd);

$pass2 = mysql_fetch_row($result33);

			if ($pass2[3]!=0)
			{
				$r= 'Правильно';
				$countright=$countright+1;
			}
			else
			{
			$r= 'Неправильно';
			}
	
	
$q=$q+1;
}						
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
*/

$mark=$countright*100/$countq;
$mark2=(int)$mark;
$idresult=$_SESSION['Result'];


$result2 = mysql_query ("Update results SET Results_Reading='$mark2' Where Results_ID_Results=$idresult");
//echo "Из 100 баллов вы набрали - ".$mark2;
//############################################################################33



















//***************************************************************
///Questions
$complicacy=$_SESSION['Complicacy'];
//select * from myTable order by rand() limit N;

//////////////


$query9="select Grammar_Questions_Question, Grammar_Questions_ID_Questions from grammar_questions Where Grammar_Questions_ID_Complicacy='$complicacy' order by rand() limit 5"; 

//////////////////////
$result9=mysql_query($query9,$subd);
$countquestions=mysql_num_rows($result9);

$i=0;
echo (" <form action=\"index.php?T=3\" method=\"post\">");
echo ("<input type=\"hidden\" name=countq value= $countquestions>");

while($myrow9= mysql_fetch_array($result9))
{
$i=$i+1;
$temp= $myrow9['Grammar_Questions_Question'];
$idquestion7=$myrow9['Grammar_Questions_ID_Questions'];

////////////

$query10="select * FROM grammar_questions_answers, grammar_questions WHERE Grammar_Questions_Answers_ID_Questions= Grammar_Questions_ID_Questions AND Grammar_Questions_ID_Questions='$idquestion7'";


////////////////////////

$result10=mysql_query($query10,$subd);
$countanswers=mysql_num_rows($result10);

echo ("<input type=\"hidden\" name=counta value= $countanswers>");

$namequestion="question";
$namequestion=$namequestion.$i;

$questionanswersq=$namequestion;
$qqq="a";
$questionanswersq=$questionanswersq.$qqq;

echo (" <fieldset class=\"form-group\">");
echo "<legend>Вопрос № ";
echo $i;
//echo " ";
//echo "ID-";
//echo $idquestion7;
echo "</legend>";
echo ("<input type=\"hidden\" name=$namequestion value= $idquestion7>$temp ");
echo ("<input type=\"hidden\" name=$questionanswersq value= $countanswers>");
echo "<br>";

$i2=0;

		while($myrow10= mysql_fetch_array($result10))
		{
		$i2=$i2+1;
		$temp2=$myrow10['Grammar_Questions_Answers_Answer'];
		$temp3=$myrow10['Grammar_Questions_Answers_ID_Answers'];
		$temp4=$myrow10['Grammar_Questions_Answers_TrueFalse'];
		$f="-ID-";
		//$tempmix=$temp2.$f.$temp3;
		$tempmix=$temp2;
		$nameanswer="answer";
		$nameanswer2="textanswer";
		
		$nameanswer=$namequestion.$nameanswer;
		$nameanswer2=$namequestion.$nameanswer2;
		if ($temp4!=2)
		{
		echo ("<div class=\"radio\"><label>");
		echo ("<input type=\"radio\" name=$nameanswer value= $temp3>$tempmix ");
		//echo "<br>";
		echo ("</label></div>");
		}
		else
		{
		echo ("<div class=\"form-group\">");
		echo ("<input type=\"text\" class=\"form-control\" name=$nameanswer2 >");
		echo ("<input type=\"hidden\" name=$nameanswer value= $temp3>");////////////////////////************
		//echo "<br>";
		echo ("</div>");
		}
		}	
echo "<br>";
echo (" </fieldset>");
}
echo ("	<p><input type=\"submit\" class=\"btn btn-primary\" value=\"Ответить на вопросы\" /></p>");
echo ("	</form>");
}


mysql_close();
}
?>





