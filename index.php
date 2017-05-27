<?php

require_once("vendor/autoload.php");

//preciso mudar isso
require_once("vendor/hcodebr/php-classes/src/DB/Sql.php");
//fim da gambs

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$sql = new Sql();

  $results = $sql->select("SELECT * FROM tb_users");

  echo json_encode($results);
});

$app->run();

 ?>
