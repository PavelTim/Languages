<?php

$idteacher=12;
$query9="select * from current_letter WHERE Current_Letter_ID_Teacher ='$idteacher' AND Current_Letter_Checked='0'";
$result9=mysql_query($query9,$subd);
$countquestions=mysql_num_rows($result9);



echo ("<li><a href=\"#\">����������� ���������� ������</a> </li> ");
echo ("<li>������� ����</a>");

echo ("<ul> ");
echo ("			<li><a href=\"index.php?T=11\">������</a></li>");
echo ("			<li><a href=\"index.php?T=14\">����������</a></li>");
echo ("			<li><a href=\"index.php?T=16\">�������</a></li>");
echo ("			<li><a href=\"index.php?T=18\">�����������</a></li>");
echo ("			<li><a href=\"index.php?T=21\">������</a></li>");
echo ("			<li><a href=\"index.php?T=22\">����������� �����</a></li>");
 echo ("       </ul>");

echo (" </li>");
if ($countquestions!=0)
{
echo ("<li><a href=\"index.php?T=23\">��������� ������<span class=\"badge\">$countquestions</span></a> </li> ");
}
else
{
echo ("			<li><a href=\"index.php?T=23\">��������� ������</a></li>");
}

echo ("<li><a href=\"index.php?T=25\">��������� ������ �� \"����������� �����\"</a> </li>");

?>