<?php 
$mysqli = mysqli_connect('localhost', 'root', '', 'myshop');

$SQLcat = "SELECT * FROM `categories`";

$res = mysqli_query($mysqli, $SQLcat);

while ($row = mysqli_fetch_assoc($res))
 	$categories[] = $row;
// print_r($categories);
$cat_id = 4;
if(!empty($_GET['catid']))
	$cat_id = $_GET['catid'];

$SQLgoods = "
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

$res = mysqli_query($mysqli, $SQLgoods);

while ($row = mysqli_fetch_assoc($res))
	$goods[] = $row;
 ?>