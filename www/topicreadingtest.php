<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	echo ("<h1><center><span class=\"label label-pill label-warning\"> 1.Чтение</span></center></h1> "); 
	echo ("<h3><span class=\"label label-pill  label-danger\"> 2. Грамматика</span>  ");
	echo ("<span class=\"label label-pill  label-danger\"> 3. Лексика</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 4. Аудирование</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 5. Письмо</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 6. Разговорная часть</span> ");
	echo ("<br></h3>");
	/*
		echo ("<div class=\"progress\">");
  echo ("<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 10%;\">");
    echo ("10%");
  echo ("</div>");
echo ("</div>");
	*/
	
//echo ("<p><center><br><h3>Раздел \"Чтение\". Ответьте на вопросы к тексту.</h3></center></p>");

}
?>