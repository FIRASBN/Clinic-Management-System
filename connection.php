<?php
      $serveur="localhost";
      $user="root";
      $mp="";
      $db="hospital-management-system";
      $conn=mysqli_connect ($serveur,$user,$mp,$db);
      if ($conn === false) 
      {
        echo "<script>window.alert('errreuur : connection invalide');</script>";
      }

      ?>
