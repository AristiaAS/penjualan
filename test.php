<?php
   $connection = mysqli_connect("localhost","user_name","password","db_name");
   
   if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>