<?php
//Подключение БД
$mysqli = mysqli_connect('localhost', 'root', '', 'myshop');
// Вытаскиваем параметры

$SQLgood = "SELECT * FROM `goods` WHERE 1";

$res = mysqli_query($mysqli, $SQLgood);

$SQLgood = "
SELECT 
`categories`.`name` AS `catname`,
`price`,
`description`,
`goods`.`name`,
`goods`.`id`,
`goods`.`image`
FROM `goods`,`categories` WHERE 
`cat_id` = `categories`.`id`
AND `cat_id`= $cat_id
";

$res = mysqli_query($mysqli, $SQLgood);

while ($row = mysqli_fetch_assoc($res))
	$good[] = $row;
 ?>
?>