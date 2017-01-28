<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	echo ("<h3><span class=\"label label-pill label-success\"> 1.Чтение</span> "); 
	echo ("<span class=\"label label-pill  label-success\"> 2. Грамматика</span>  ");
	echo ("<span class=\"label label-pill  label-success\"> 3. Лексика</span> ");
	echo ("<span class=\"label label-pill  label-success\"> 4. Аудирование</span> ");
	echo ("<span class=\"label label-pill  label-success\"> 5. Письмо</span> ");
	echo ("<h1><center><span class=\"label label-pill  label-warning\"> 6. Разговорная часть</span></center></h1> ");
	echo ("<br>");
	

//echo ("<p><center><br><h3>Раздел \"Разговорная часть\". Вам выданы темы для подготовки.</h3></center></p>");

}
?>