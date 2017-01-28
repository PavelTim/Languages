<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{
/*echo("<script>");
echo("function addAnswer(form) {");
echo("	var myInput = document.getElementById(\"objects\");");
echo("var checkbox = document.createElement(\"input\"); ");

echo("//checkbox.setAttribute(\"type\", \"checkbox\");");
echo("checkbox.setAttribute(\"name\", \"dd\");");
echo("checkbox.setAttribute(\"value\", \"fkjhlmmlf\");");
echo("//checkbox.checked = true; ");
echo("myInput.appendChild(checkbox); ");
echo("//do this after you append it");
echo("//checkbox.checked = true; ");
echo("}");
echo("function addQuestion(form) {	");
echo("	var myInput = document.getElementById(\"question\");");
echo("var checkbox = document.createElement(\"input\"); ");
echo("//checkbox.setAttribute(\"type\", \"checkbox\");");
echo("checkbox.setAttribute(\"name\", \"dd\");");
echo("checkbox.setAttribute(\"value\", \"fkjhlmmlf\");");
echo("//checkbox.checked = true; ");
echo("myInput.appendChild(checkbox); ");
echo("//do this after you append it");
echo("//checkbox.checked = true; ");
	
echo("}");

echo("function myFunction() {");
echo("    	var myInput = document.getElementById(\"question\");");

echo("myInput.setAttribute(\"value\", \"fkjhlmmlf\");");
echo("}");

echo("</script>");
*/
//echo("</head>");



//***************************************************************************
/*
echo("<form action = \"index.php?T=12\" method \"post\">");
	
	/*echo("Выберите уровень сложности текста:<br>");
	echo(" <select name=\"complicacy\">");
   echo(" <option value=\"Elementary\">Elementary</option>");
   echo(" <option value=\"Beginner\">Beginner</option>");
   echo(" <option value=\"Pre-Intermediate\">Pre-Intermediate</option>");
    echo("<option value=\"Intermediate\">Intermediate</option>");
	echo("<option value=\"Upper-Intermediate\">Upper-Intermediate</option>");
	echo("<option value=\"Advanced\">Advanced</option>");
  echo("</select>");
  echo("<br><br>");*/
  
  
 /* 
echo("	 Введите название текста:<br>");
   echo("<input type=\"text\" name=\"textheader\"><br><br>");
   echo("Введите текст:<br>");
    echo("        <textarea id=\"create_test_reading_textarea\" name=\"create_test_reading_textarea\" style=\"width: 700px;height: 200px;\"");
    echo("        ></textarea><br/><br/>");
/*echo("Введите вопрос:<br>");
  echo(" <input type=\"text\" id=\"question\" name=\"question\"><br><br>	");
  echo(" Введите ответы:");
  echo("<input type=\"text\" id=\"answer\" name=\"answer\">");
  echo("<input type=\"button\" onclick=\"addAnswer()\" name=\"addanswer\" value=\"Добавить ответ\"/><br><br>");
    echo("<input type=\"button\" onclick=\"addQuestion()\" name=\"addanswer\" value=\"Добавить вопрос\"/><br><br> ");
	echo("<input type=\"submit\" value=\"Сохранить тест в системе\"/>");
	//echo("<p id=\"demo\">Click the button to change the color of this paragraph.</p>");

//echo("<button onclick=\"myFunction()\">Сохранить текст и добавить вопросы</button>");

echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Сохранить текст и добавить вопросы\"/>");
echo("</form>");




*/
//***********************************************************************************8







echo ("	<form action=\"index.php?T=12\" method=\"post\">");
echo("<input type=\"text\" name=\"textheader\"><br><br>");
      echo("        <textarea id=\"create_test_reading_textarea\" name=\"create_test_reading_textarea\" style=\"width: 700px;height: 200px;\"");
    echo("        ></textarea><br/><br/>");      
	echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Сохранить текст\"/>");
	
	
echo ("</form>");












	}	
?>