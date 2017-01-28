
<script src="http://code.jquery.com/jquery-1.5rc1.js"></script>	
<audio controls></audio>
<script src=\"jquery.iwish.js\"></script>



<?php
session_start();
if (isset($_SESSION['Students_login']))
	{

	include ("db_connect.php");
	
	$student=$_SESSION['ID'];
	$query="select * from results where Results_ID_Students='$student'";
	$result=mysql_query($query,$subd);	


	//$today = getdate();
//print_r($today);
	
	
	
	
	
	
	
	
	
echo ("<table class=\"table table-bordered\">");

  echo ("<thead><tr>");
      echo ("<th>#</th>");
      echo ("<th>Чтение</th>");
      echo ("<th>Грамматика</th>");
      echo ("<th>Лексика</th>");
	  echo ("<th>Аудирование</th>");
      echo ("<th>Письмо</th>");
      echo ("<th>Разговорная часть</th>");
	  echo ("<th>Дата</th>");
    echo ("</tr>");
 echo (" </thead>");
 
 echo (" <tbody>");
 
 $i=1;
 while($myrow= mysql_fetch_array($result))
	{
	
	$reading=$myrow['Results_Reading'];
	$grammar=$myrow['Results_Grammar'];
	$vocabulary=$myrow['Results_Vocabulary'];
	$listening=$myrow['Results_Listening'];
	$letter=$myrow['Results_Letter'];
	$speaking=$myrow['Results_Speaking'];
 
  echo ("  <tr>");
   echo ("   <th scope=\"row\">$i</th>");
   echo ("   <td>$reading</td>");
   echo ("  <td>$grammar</td>");
    echo ("  <td>$vocabulary</td>");
	 echo ("   <td>$listening</td>");
   echo ("  <td>$letter</td>");
    echo ("  <td>$speaking</td>");
	echo ("  <td></td>");
  echo ("  </tr>");
  $i=$i+1;
  }
  
  
   
  echo ("</tbody>");
echo ("</table>");







mysql_close();

}
?>





