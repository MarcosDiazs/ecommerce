<?php

require_once("vendor/autoload.php");

//preciso mudar isso
require_once("vendor/hcodebr/php-classes/src/DB/Sql.php");
require_once("vendor/hcodebr/php-classes/src/Page.php");
//fim da gambs

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

  $page = new Page();
  $page->setTpl("index");

});

$app->run();

 ?>
