<?php

require('MySQLi_Conn.php');

try {

  $result = $conn->query("Select * from employees");

  // $result -> close();

  foreach ($result as $row) {
      echo $row['first_name'];
      echo "\n";
  }

  $conn -> close();

} catch (mysqli_sql_exception $e) {
  echo $e->__toString();
};

?>
