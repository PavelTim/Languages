<?php
session_start();
if (isset($_SESSION['Students_login']))
	{
	echo ("<h3><span class=\"label label-pill label-success\"> 1.������</span> "); 
	echo ("<span class=\"label label-pill  label-success\"> 2. ����������</span>  ");
	echo ("<span class=\"label label-pill  label-success\"> 3. �������</span> ");
	echo ("<span class=\"label label-pill  label-success\"> 4. �����������</span> ");
	echo ("<span class=\"label label-pill  label-success\"> 5. ������</span> ");
	echo ("<h1><center><span class=\"label label-pill  label-warning\"> 6. ����������� �����</span></center></h1> ");
	echo ("<br>");
	

//echo ("<p><center><br><h3>������ \"����������� �����\". ��� ������ ���� ��� ����������.</h3></center></p>");

}
?>