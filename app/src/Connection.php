<?php

namespace App;

class Connection {

    private static $connection;

    public function connect() {
      $pdoInstance = new \PDO("pgsql:host=postgres;port=5432;dbname=teste;user=postgres;password=root123");
      $pdoInstance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

      return $pdoInstance;
    }

    public static function get() {
        if (null === static::$connection) {
            static::$connection = new static();
        }

        return static::$connection;
    }

}