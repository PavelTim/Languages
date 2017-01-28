<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{


echo ("	Тут будет добавляться аудиофайл в систему");

echo ("	<form action=\"index.php?T=19\" method=\"post\">");
echo("<input type=\"text\" name=\"textheader\"><br><br>");
     // echo("        <textarea id=\"create_test_reading_textarea\" name=\"create_test_reading_textarea\" style=\"width: 700px;height: 200px;\"");
    //echo("        ></textarea><br/><br/>");      
	echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"Сохранить аудиофайл\"/>");
	
	
echo ("</form>");












	}	
?>