<?php
session_start();
if (isset($_SESSION['Teachers_login']))
	{

	$W=$_GET['W'];
	if ($W==1)
	
	
	{
	$letterid=$_POST['letterid'];
	$mark=$_POST['mark'];
	
	
	$result1 = mysql_query ("UPDATE current_letter SET Current_Letter_Mark='$mark' WHERE Current_Letter_ID='$letterid'");	
	$result1 = mysql_query ("UPDATE current_letter SET Current_Letter_Checked='1' WHERE Current_Letter_ID='$letterid'");
	
	
	echo ("	<form action=\"index.php\" method=\"post\">");
	echo "<center>������ �� ������ ������� ����������!</center><br>";
	echo ("<center><input type=\"submit\" class=\"btn btn-primary\" value=\"������\"/></center>");	
echo ("</form>");
	
	}
	
	else
	{
	
	
	
$idletter = isset($_POST['letterid']) ? $_POST['letterid'] : '';


$idteacher=12;
$query9="select * from current_letter, students, letter, groups, complicacy WHERE Current_Letter_ID_Teacher ='$idteacher' AND Current_Letter_Checked='0' AND Current_Letter_ID_Students=Students_ID_Students AND Current_Letter_ID ='$idletter' AND Current_Letter_ID_Topic=Letter_ID_Topics AND Students_ID_Groups=Groups_ID_Groups AND Groups_ID_Complicacy=Complicacy_ID_Complicacy";
$result9=mysql_query($query9,$subd);




	echo ("	<table class=\"table table-bordered\">");
		 ("	<caption>���������� � ������: </caption>");
		 echo ("<thead><tr>");
         echo ("<th><center>���������</center></th>");
		 echo ("<th>��������</th></tr></thead>");

while($myrow9= mysql_fetch_array($result9))
{
$letter= $myrow9['Current_Letter_Letter'];
$idletter= $myrow9['Current_Letter_ID'];

$surname= $myrow9['Students_Surname'];
$name= $myrow9['Students_Name'];
$fathername= $myrow9['Students_Fathername'];
$temp=$surname." ".$name." ".$fathername;

//$level= $myrow9['Complicacy_Level'];
$symbolsset= $myrow9['Complicacy_QuantityOfSymbolsForLetter'];
$group= $myrow9['Groups_NumberOfGroups'];

$symbolsstudent= $myrow9['Current_Letter_Quantity'];
$topic= $myrow9['Letter_Topic'];


echo ("	<tr><td>���</td><td>$temp</td></tr>");
echo ("	<tr><td>���� ������</td><td>$topic</td></tr>");
echo ("	<tr><td>����������� ���������� ��������</td><td>$symbolsset</td></tr>");
echo ("	<tr><td>���������� �������� ������</td><td>$symbolsstudent</td></tr>");

}

echo ("	</table>");


		
echo ("	<form>");
//echo("<input type=\"text\" name=\"textheader\"><br><br>");
      echo("        <textarea disabled class=\"form-control\" rows=\"30\" id=\"create_test_reading_textarea\" name=\"create_test_reading_textarea\">");
	  echo $letter;
    echo("        </textarea><br/>");      

	
	
echo ("</form>");




echo ("	<form action=\"index.php?T=24&&W=1\" method=\"post\">");
echo ("<label for=\"mark\">������� ������(�� 0 �� 100)</label>");
	echo("<input type=\"text\" class=\"form-control\" id=\"mark\" name=\"mark\"><br><br>");
	echo ("<input type=\"hidden\" name=letterid value= $idletter></td></tr>");
	echo ("<input type=\"submit\" class=\"btn btn-primary\" value=\"��������� ������\"/>");	
echo ("</form>");








}



	}	
?>