<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{
$topicspeaking=$_GET['textheader'];

					//Send letter here
	include ("db_connect.php");
	$result1 = mysql_query ("INSERT INTO speaking_topics (Speaking_Topics_ID_Complicacy, Speaking_Topics_ID_TypesOFSpeaking, Speaking_Topics_Topic) VALUES (3, 1,'$topicspeaking')");				
	mysql_close();

echo ("Новая тема для разговорной части добавлена! <br><br>");
}
?>