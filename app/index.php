<?php

require 'vendor/autoload.php';

use App\Connection as Connection;

try {
  $test = Connection::get()->connect();
  echo 'Connected';
} catch (\PDOException $ex) {
  var_dump($ex->getMessage());
}
