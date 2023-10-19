<?php

$db_host = 'localhost'; 
$db_name = 'course_db'; 
$db_user = 'root';
$db_password = 'raavii'; 

try {
   $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("Database connection failed: " . $e->getMessage());
}

  

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);
          $rand[] = $str[$n];
      }
      return implode($rand);
   }

?>