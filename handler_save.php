<?php
require 'db.php';
if($_GET['c_name'] !== ''){
    $query = $db->prepare("insert into $winner (name, cost, step, day) values(?, ?, ?, ?)");
    $query->execute(array($_GET['name'], $_GET['cost'], $_GET['step'], $_GET['date']));
}
$query = $db->prepare("select `name`, `cost`, `step`, `day` from $winner order by `id` desc limit 10");
$query->execute();
$array = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($array);
