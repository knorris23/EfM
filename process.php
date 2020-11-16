<?php

// create a variable
     $FirstName = $_POST['FirstName'];
     $MiddleName = $_POST['MiddleName'];
     $LastName = $_POST['LastName'];
     $Email = $_POST['Email'];
     $PhoneNumber = $_POST['PhoneNumber'];
     $Address = $_POST['Address'];
     $City = $_POST['City'];
     $State = $_POST['State'];
     $Zip = $_POST['Zip'];
     $Diocese = $_POST['Diocese'];

//Databse Connection
     $connect = new mysqli('localhost', 'root', '', 'efm_form');
     if($connect->connect_error){
          die('Connection Failed : '.$connect->connect_error);
     }else{
          $stmt = $connect->prepare("insert into efminquiry(FirstName, MiddleName, LastName, Email, PhoneNumber, Address, City, State, Zip, Diocese) 
               values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssisssis", $FirstName, $MiddleName, $LastName, $Email, $PhoneNumber, $Address, $City, $State, $Zip, $Diocese);
          $stmt->execute();
          echo "Thank You For Your Interest!";
          $stmt->close();
          $connect->close();
     }
?>