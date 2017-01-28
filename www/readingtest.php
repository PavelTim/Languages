<?php
session_start();
if (isset($_SESSION['Students_login']))
	{


include ("db_connect.php");


//$text=1;
//$student=3;
//$idtest=23;
//$idlast=98;

	

///Questions
//$query9="select DISTINCT Reading_Questions_Question, Reading_Questions_ID_Questions from reading_questions, current_reading_questions, current_reading_texts, reading WHERE Current_Reading_Texts_ID_Texts=Reading_ID_Texts AND Current_Reading_Questions_ID_Current_Reading_Text=Current_Reading_Texts_ID_Current_Reading AND Current_Reading_Texts_ID_Current_Reading='$idlast'";

$complicacy=$_SESSION['Complicacy'];
//$result=mysql_query($query,$subd);

/*$query9="select * from reading_questions, reading WHERE Reading_ID_Complicacy='$complicacy'";
$result9=mysql_query($query9,$subd);

$num=mysql_num_rows($result9);
$num2= rand (1,$num);
$i=1;
while($myrow= mysql_fetch_array($result9))
	{
		
	if ($i==$num2)
	{
	$text3 = $myrow['Reading_ID_Texts'];
	}
	$i=$i+1;
	}*/
	$text3 = $_SESSION['Reading'];

$query9="select * from reading_questions WHERE Reading_Questions_ID_Texts ='$text3'";
$result9=mysql_query($query9,$subd);
$countquestions=mysql_num_rows($result9);

$i=0;
//echo (" <form action=\"index.php?E=3&&M=3&&G=1\" method=\"post\">");
echo (" <form action=\"index.php?T=2\" method=\"post\">");
echo ("<input type=\"hidden\" name=countq value= $countquestions>");

while($myrow9= mysql_fetch_array($result9))
{
$i=$i+1;
$temp= $myrow9['Reading_Questions_Question'];
$idquestion7=$myrow9['Reading_Questions_ID_Questions'];

//$query10="select * FROM reading_questions_answers, reading_questions, reading, current_reading_texts WHERE Reading_Questions_Answers_ID_Questions= Reading_Questions_ID_Questions AND Reading_Questions_ID_Texts=Reading_ID_Texts AND Reading_ID_Texts=Current_Reading_Texts_ID_Texts AND Current_Reading_Texts_ID_Current_Reading='$idlast' AND Reading_Questions_Question='$temp'";
//$query10="select * FROM reading_questions_answers, reading_questions, reading WHERE Reading_Questions_Answers_ID_Questions= Reading_Questions_ID_Questions AND Reading_Questions_ID_Texts=Reading_ID_Texts AND Reading_Questions_ID_Questions='$temp' AND Reading_Questions_ID_Texts=";
$query10="select * FROM reading_questions_answers WHERE Reading_Questions_Answers_ID_Questions='$idquestion7'";
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
		$temp2=$myrow10['Reading_Questions_Answers_Answer'];
		$temp3=$myrow10['Reading_Questions_Answers_ID_Answers'];
		$f="-ID-";
		//$tempmix=$temp2.$f.$temp3;
		$tempmix=$temp2;
		$nameanswer="answer";
		$nameanswer=$namequestion.$nameanswer;
		echo ("<input type=\"radio\" name=$nameanswer value= $temp3>$tempmix ");
		echo "<br>";
		}	
echo "<br>";
echo (" </fieldset>");
}
echo ("	<p><input type=\"submit\" class=\"btn btn-primary\" value=\"Ответить на вопросы\" /></p>");
echo ("	</form>");

//echo ("<button type=\"button\" class=\"close\" aria-label=\"Close\">");
// echo (" <span aria-hidden=\"true\">&times;</span>");
//echo ("</button>");

mysql_close();
}
?>





