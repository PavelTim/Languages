<?php
//session_start(); С изменениями!!!!
$tmp=file_get_contents("index.tpl");  // Подключение файла с шаблоном

$objects=""; // Очистка переменных
$currentuser="";
$menu="";
$topic="";

//**********************************************
function load_objects($s) // Эта функция будет вызываться вместо вывода данных браузеру
{
    $GLOBALS['objects'].=$s; // Новые данные добавляем к переменной
}	
	
function load_menu($s) // Эта функция будет вызываться вместо вывода данных браузеру
{
    $GLOBALS['menu'].=$s; // Новые данные добавляем к переменной
}	
function load_currentuser($s) // Эта функция будет вызываться вместо вывода данных браузеру
{
    $GLOBALS['currentuser'].=$s; // Новые данные добавляем к переменной
}	

function load_topic($s) // Эта функция будет вызываться вместо вывода данных браузеру
{
    $GLOBALS['topic'].=$s; // Новые данные добавляем к переменной
}

	ob_start('load_currentuser');
include("lock2.php");
	
ob_end_flush();
	
	ob_start('load_menu'); // Включаем кеширование и указываем, что вместо отправки данных браузеру, их нужно отправлять в функцию

//************************************
ob_start('load_objects'); // Включаем кеширование и указываем, что вместо отправки данных клиенту, их нужно отправлять в функцию

	
			
			
			$CT = $_GET["CT"];
						
			$T = $_GET["T"];
									
						if ($CT==1)
						include("ctR.php");
						if ($CT==6)
						include("ctS.php");
						
				
				switch ($T) {
			case "1": include("reading.php");	 break;
			case "2": include("grammar.php"); break;
			case "3": include("vocabulary.php"); break;
			case "4": include("listening.php");	 break;
			case "5": include("letter.php"); break;
			case "6": include("speaking.php"); break;
			case "7": include("readingtest.php"); break;
			
			case "8": include("studentresults.php"); break;
			
			case "9": include("rt.php"); break;
			case "10": include("rs.php"); break;
			
			
			case "11": include("ctR.php"); break;
			case "12": include("ctRQ.php"); break;
			case "13": include("ctRQadd.php"); break;
			case "14": include("ctGQ.php"); break;
			case "15": include("ctGQadd.php"); break;
			case "16": include("ctV.php"); break;
			case "17": include("ctVQ.php"); break;
			case "18": include("ctL.php"); break;
			case "19": include("ctLQ.php"); break;
			case "20": include("ctLQadd.php"); break;
			case "21": include("ctW.php"); break;
			case "22": include("ctS.php"); break;
			case "23": include("checkL.php"); break;
			case "24": include("checkLshow.php"); break;
			case "25": include("checkS.php"); break;
			case "26": include("checkSshow.php"); break;
			default: include("defaultobjects.php"); break;

				}
				
				
				
				
	
	ob_end_flush();   // Выключаем кеширование... теперь все данные будут уходить браузеру	

///*********************************8


ob_start('load_topic'); // Включаем кеширование и указываем, что вместо отправки данных клиенту, их нужно отправлять в функцию
			
			$T = $_GET["T"];
			
				
				switch ($T) {
			case "1": include("topicreading.php");	 break;
			case "2": include("topicgrammar.php"); break;
			case "3": include("topicvocabulary.php"); break;
			case "4": include("topiclistening.php");	 break;
			case "5": include("topicletter.php"); break;
			case "6": include("topicspeaking.php"); break;
			case "7": include("topicreadingtest.php"); break;
			default: include("defaulttopic.php"); break;

				}
				
				
				
				
	
	ob_end_flush(); 




////*********************************

if (isset($_SESSION['Students_login']))
			{
			include("menumainstudent.php");	 
			}
			
			else{	
				if (isset($_SESSION['Teachers_login']))
				{
				include("menumainteacher.php");
				}
				else 
				{
				include("menumain.php");
				}
				}

		
ob_end_flush();				
	
	

	
	
$tmp = ereg_replace("{topic}", $topic, $tmp);	
$tmp = ereg_replace("{objects}", $objects, $tmp);
$tmp = ereg_replace("{menu}", $menu, $tmp);	
$tmp = ereg_replace("{currentuser}", $currentuser, $tmp);
echo $tmp;			
?>