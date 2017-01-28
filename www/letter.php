<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	include ("db_connect.php");
	
		
//**************************************************************************FROM LISTENING

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
$query33="select * from listening_questions_answers WHERE Listening_Questions_Answers_ID_Answers='$questionanswersq'";
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
			
$q=$q+1;
}

$mark=$countright*100/$countq;
$mark2=(int)$mark;
$idresult=$_SESSION['Result'];
$result2 = mysql_query ("Update results SET Results_Listening='$mark2' Where Results_ID_Results=$idresult");

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

*/


//#############################################################################









//***************************************************************************************	
	
	
	
	
	
	
	$complicacy=$_SESSION['Complicacy'];
	
	
	
	$query="select * from letter where Letter_ID_Complicacy='$complicacy'";
	$result=mysql_query($query,$subd);
	
	$queryquantity= mysql_num_rows ($result);
	$numletter= rand (1,$queryquantity);// Случайная тема письма
	$i=1;
	$letterquantity=$_SESSION['Letter'];
	
	while($myrow= mysql_fetch_array($result))
	{
		
	if ($i==$numletter)
	{
	
	$lettertopic=$myrow['Letter_Topic'];
	$lettertopicid=$myrow['Letter_ID_Topics'];//сделать как переменная сессии, чтобы потом вносить в sl.php
	
	}
	
	$i=$i+1;
		
	}
	
	
	mysql_close();
	
	
	 echo ("<script type=\"text/javascript\">");
            echo ("function countChar() {");
                //Записываем ссылки на элементы в переменные
               echo (" var is_probel = document.getElementById(\"is_probel\");"); 
               echo (" var count_char = document.getElementById(\"count_char\");");
              echo ("  var count_char_textarea = document.getElementById(\"count_char_textarea\");");
               echo (" count_char.value = count_char_textarea.value.replace(/ n*r*t*/g, \"\").length; ");
            echo ("}");
 
        echo ("</script>");


	//echo (" Раздел \"Написание письма\"!<br><br>");
	echo ("Вам необходимо написать письмо на тему: $lettertopic <br><br>");
	echo ("Количество необходимых символов: $letterquantity<br><br>");
	echo ("<br>");
	
//echo ("	<form action=\"index.php?L=1&&M=1&&PT=5\" method=\"post\">");
echo ("	<form action=\"index.php?T=6\" method=\"post\">");
echo ("<input type=\"hidden\" name=lettertopicid value= $lettertopicid>");

     echo ("       <textarea class=\"form-control\" id=\"count_char_textarea\" name=\"count_char_textarea\" style=\"width: 850px;height: 300px;\"");
      echo ("      onchange=\"countChar()\" onkeyup=\"countChar()\" ></textarea><br/>");
     echo ("       Количество введенных симоволов:<br/> <input type=\"text\" id=\"count_char\" name=\"count_char\" value=\"0\" readonly=\"readonly\" />  ");          
	echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Отправить письмо на проверку\"/>");
	
	
echo ("</form>");

	
	


}
?>