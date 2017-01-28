<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
include ("db_connect.php");


//************************************************************ FROM VOCABULARY

$countanswers= isset($_POST[countanswers]) ? $_POST[countanswers] : '';
//echo $countanswers;
$q=1;
$countright=0;
while ($q<=$countanswers)
{
$w="answer";
$w=$w.$q;

$w2="id";
$w2=$w2.$q;

$s="select";
$s=$s.$q;

$selectedposition = isset($_POST[$s]) ? $_POST[$s] : '';

$answerword = isset($_POST[$w]) ? $_POST[$w] : '';
$answerwordid = isset($_POST[$w2]) ? $_POST[$w2] : '';

$idtext = isset($_POST['idtext']) ? $_POST['idtext'] : '';

$query="select * from vocabulary_words where Vocabulary_Words_ID_Texts='$idtext' AND Vocabulary_Words_ID_Words='$answerwordid'";
$result=mysql_query($query,$subd);
/*$myrow= mysql_fetch_row($result);

$wordposition=$myrow[2];
$wordinitial=$myrow[3];
$wordright=$myrow[4];
*/

$myrow= mysql_fetch_array($result);

$wordposition=$myrow['Vocabulary_Words_Position'];
$wordinitial=$myrow['Vocabulary_Words_InitialForm'];
$wordright=$myrow['Vocabulary_Words_EndForm'];



if ($wordposition!=$selectedposition || $answerword!=$wordright)
{
$r="Неправильно!";
}
else
{
$r="Правильно!";
$countright=$countright+1;
}


//////////////////////////////



echo "<br>Слово № ";
echo $q;
echo ". ID-";
echo $answerwordid;
echo ", позиция в тексте ";
echo $wordposition;
echo ", вы выбрали позицию ";
echo $selectedposition;
echo ", правильное значение ";
echo $wordright;
echo ", вы написали ";
echo $answerword;
echo " | ";
echo $r;
echo "<br>";




//////////////////////////////






$q=$q+1;

}
$mark=$countright*100/$countanswers;
$mark2=(int)$mark;
$idresult=$_SESSION['Result'];
$result2 = mysql_query ("Update results SET Results_Vocabulary='$mark2' Where Results_ID_Results=$idresult");


/*
//#############################################################################
echo "<br>Слово № ";
echo $q;
//echo ". ID-";
//echo $answerwordid;
echo ", поциция в тексте ";
echo $wordposition;
echo ", вы выбрали позицию ";
echo $selectedposition;
echo ", правильное значение ";
echo $wordright;
echo ", вы написали ";
echo $answerword;
echo " | ";
echo $r;
echo "<br>";

$q=$q+1;

}


$mark=$countright*100/$countanswers;
$mark2=(int)$mark;
echo "Из 100 баллов вы набрали - ".$mark2; 



//#############################################################################
*/






$complicacy=$_SESSION['Complicacy'];

$query="select * from listening_audio where Listening_Audio_ID_Complicacy ='$complicacy'"; 
$result=mysql_query($query,$subd);



$num=mysql_num_rows($result);
$num2= rand (1,$num);
$i=1;
while($myrow= mysql_fetch_array($result))
	{
		
	if ($i==$num2)
	{
	$audio = $myrow['Listening_Audio_Audio'];
	$audioid = $myrow['Listening_Audio_ID_Audio'];
	}
	$i=$i+1;
	}







///Questions
$query9="select * from listening_questions where Listening_Questions_ID_Audio='$audioid'"; 
$result9=mysql_query($query9,$subd);
$countquestions=mysql_num_rows($result9);
	



$i=0;
echo (" <form action=\"index.php?T=5\" method=\"post\">");
echo ("<input type=\"hidden\" name=countq value= $countquestions>");

while($myrow9= mysql_fetch_array($result9))
{
$i=$i+1;
$temp= $myrow9['Listening_Questions_Question'];
$idquestion7=$myrow9['Listening_Questions_ID_Questions'];

$query10="select * FROM listening_questions_answers, listening_questions WHERE Listening_Questions_Answers_ID_Questions= Listening_Questions_ID_Questions AND Listening_Questions_ID_Questions='$idquestion7'";
$result10=mysql_query($query10,$subd);
$countanswers=mysql_num_rows($result10);

echo ("<input type=\"hidden\" name=counta value= $countanswers>");

$namequestion="question";
$namequestion=$namequestion.$i;

$questionanswersq=$namequestion;
$qqq="a";
$questionanswersq=$questionanswersq.$qqq;

echo (" <fieldset>");
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
		$temp2=$myrow10['Listening_Questions_Answers_Answer'];
		$temp3=$myrow10['Listening_Questions_Answers_ID_Answers'];
		$temp4=$myrow10['Listening_Questions_Answers_TrueFalse'];
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
		echo "<br>";
		echo ("</label></div>");
		}
		else
		{
		echo ("<input type=\"text\" class=\"form-control\" name=$nameanswer2 >");
		echo ("<input type=\"hidden\" name=$nameanswer value= $temp3>");////////////////////////************
		echo "<br>";
		}
		}	
echo "<br>";
echo (" </fieldset>");
}
echo ("	<p><input type=\"submit\" class=\"btn btn-primary\" value=\"Ответить на вопросы\" /></p>");
echo ("	</form>");



mysql_close();
}
?>





