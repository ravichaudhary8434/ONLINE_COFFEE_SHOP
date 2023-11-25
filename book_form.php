<?php

   $conn = mysqli_connect('localhost','root','','myprooject');

   if(isset($_POST['send'])){
      $name = $_POST['username'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
      
      // $sql = "CREATE TABLE `coffee_shop`.`user` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `phone` VARCHAR(50) NOT NULL , `massage` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
      // ";
      //  mysqli_query($conn, $sql);
      
      $sql = "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `massage`) VALUES (NULL, '$name', '$email', '$phone', '$message');";
      mysqli_query($conn, $sql);

      header('location:home.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>