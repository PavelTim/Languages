<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	echo ("<h3><span class=\"label label-pill label-success\"> 1.Чтение</span></h3> "); 
	echo ("<h1><center><span class=\"label label-pill  label-warning\"> 2. Грамматика</span> </center></h1> ");
	echo ("<h3><span class=\"label label-pill  label-danger\"> 3. Лексика</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 4. Аудирование</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 5. Письмо</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 6. Разговорная часть</span> ");
	echo ("<br></h3>");
	
	/*
	echo ("<div class=\"progress\">");
  echo ("<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\">");
    echo ("20%");
  echo ("</div>");
echo ("</div>");
	*/
	

	
	
	
	
	
	
//echo ("<p><center><br><h2><span class=\"label label-info\">Раздел \"Грамматика\". Ответьте на вопросы.</span></h2></center></p>");

}
?>