<html>
	<head>
		<title>Первый скрипт</title>
	</head>
	<style>
		

	</style>
	<body>
		<h1>Добро пожаловать</h1>
<?php 	
// ПОдключение к БД
$mysqli = mysqli_connect("localhost", "root", "", "myshop");

if(!empty($_GET['catid']))
{
// Строка запроса
$strSQL = "SELECT 
`goods`.`id`,
`goods`.`name`,
`price`,
`description`,
`categories`.`name` as `catname` 
FROM `goods`,`categories` WHERE `cat_id` = `categories`.`id` AND `cat_id` ={$_GET['catid']}";

// Выполнение запроса к БД
$res = mysqli_query($mysqli, $strSQL);

// Обработка результата запроса
while($row = mysqli_fetch_assoc($res))
{
	echo "<p>{$row['name']} <i>{$row['price']}</i> ( {$row['catname']})
		<a href=\"good.php?id={$row['id']}\"> Подробнее </a>
	</p>";
}

}
 ?>

	
	</body>
</html>