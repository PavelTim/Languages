<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	echo ("<h3><span class=\"label label-pill label-success\"> 1.������</span> "); 
	echo ("<span class=\"label label-pill  label-success\"> 2. ����������</span>  ");
	echo ("<span class=\"label label-pill  label-success\"> 3. �������</span> ");
	echo ("<span class=\"label label-pill  label-success\"> 4. �����������</span></h3> ");
	echo ("<h1><center><span class=\"label label-pill  label-warning\"> 5. ������</span> </center></h1> ");
	echo ("<h3><span class=\"label label-pill  label-danger\"> 6. ����������� �����</span> ");
	echo ("<br></h3>");
	echo "<br>";
	echo ("<span class=\"glyphicons glyphicons-ok-sign\"></span>");
	/*
		echo ("<div class=\"progress\">");
  echo ("<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"68\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 68%;\">");
    echo ("68%");
  echo ("</div>");
echo ("</div>");
	*/

//echo ("<p><center><h3>������ \"������\". �������� ������ �� �������� �������� � �������� ���������� ��������.</h3></center></p>");

}
?>