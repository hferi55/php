<?php

class DataBase {

  private $servername = "localhost";
  private $username = "phptest";
  private $password = "4__c[ATYRszwgMX4";
  private $db = "ulesrend";
  public static $conn;

  function __construct()
  {
      // Create connection
      self::$conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
  
      // Check connection
      if (self::$conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
      }
      
      self::$conn->set_charset("utf8");
  }

}



?> 