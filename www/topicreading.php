<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	echo ("<h1><center><span class=\"label label-pill label-warning\"> 1.������</span></center></h1> "); 
	echo ("<h3><span class=\"label label-pill  label-danger\"> 2. ����������</span>  ");
	echo ("<span class=\"label label-pill  label-danger\"> 3. �������</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 4. �����������</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 5. ������</span> ");
	echo ("<span class=\"label label-pill  label-danger\"> 6. ����������� �����</span> ");
	echo ("<br></h3>");
	
	/*
		echo ("<div class=\"progress\">");
  echo ("<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">");
    echo ("0%");
  echo ("</div>");
echo ("</div>");
echo ("<p><center><br><h3>������ \"������\". ���������� ����� � �������� �� ������� � ����.</h3></center></p>");
*/
}
?>





