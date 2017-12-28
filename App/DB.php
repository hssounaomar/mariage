<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 24/12/2017
 * Time: 22:10
 */


  class DB {
      private static $instance = NULL;

      private function __construct() {}

      private function __clone() {}

      public static function getInstance() {
          if (!isset(self::$instance)) {
              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              self::$instance = new PDO('mysql:host=localhost;dbname=mariage', 'root', '', $pdo_options);
          }
          return self::$instance;
      }
  }
?>