<?php 
//Зачения по умолчанию
$model_name = 'Main';

if(!empty($_GET['model']))
	$model_name = $_GET['model'];

//Получаем имена файлов	
$model_file = strtolower($model_name).'_model.php';
$view_file = strtolower($model_name).'_view.php';

//Если файл модели существует, подключаем
if(file_exists($model_file))
	include $model_file;

//Если есть вид - подключаем
if(file_exists($view_file))
	include $view_file;

?>