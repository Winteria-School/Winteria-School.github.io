<?php

$username = 'u740575154_root';
$password = '~|q8/GP&';
$dsn = 'mysql:host=localhost; dbname=u740575154_WinteriaSchool';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>