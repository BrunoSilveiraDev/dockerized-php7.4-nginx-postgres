<?php
require __DIR__.'/vendor/autoload.php';

use App\Connection as Connection;

// phpinfo();
try {
  $test = Connection::get()->connect();
  echo 'Connected';
} catch (\PDOException $ex) {
  var_dump($ex->getMessage());
}