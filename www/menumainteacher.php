<?php

$idteacher=12;
$query9="select * from current_letter WHERE Current_Letter_ID_Teacher ='$idteacher' AND Current_Letter_Checked='0'";
$result9=mysql_query($query9,$subd);
$countquestions=mysql_num_rows($result9);



echo ("<li><a href=\"#\">Просмотреть результаты тестов</a> </li> ");
echo ("<li>Создать тест</a>");

echo ("<ul> ");
echo ("			<li><a href=\"index.php?T=11\">Чтение</a></li>");
echo ("			<li><a href=\"index.php?T=14\">Грамматика</a></li>");
echo ("			<li><a href=\"index.php?T=16\">Лексика</a></li>");
echo ("			<li><a href=\"index.php?T=18\">Аудирование</a></li>");
echo ("			<li><a href=\"index.php?T=21\">Письмо</a></li>");
echo ("			<li><a href=\"index.php?T=22\">Разговорная часть</a></li>");
 echo ("       </ul>");

echo (" </li>");
if ($countquestions!=0)
{
echo ("<li><a href=\"index.php?T=23\">Проверить письмо<span class=\"badge\">$countquestions</span></a> </li> ");
}
else
{
echo ("			<li><a href=\"index.php?T=23\">Проверить письмо</a></li>");
}

echo ("<li><a href=\"index.php?T=25\">Выставить оценки за \"Разговорную часть\"</a> </li>");

?>