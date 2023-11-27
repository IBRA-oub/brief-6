<?php

$server="localhost";
$username= "root";
$password= '';
$database= "cihbank";


$cnx= new mysqli($server,$username,$password,$database);

// if($cnx->connect_error){
//     echo "Error connecting ";
// }else{
//     echo "connection successfully";
// }

$creatDB="CREATE DATABASE IF NOT EXISTS cihbank";

// $cnx->query($creatDB);


// if($cnx->query($creatDB)){
//     echo "bien";
// }else{
//     echo "error";
// }

$userData="CREATE TABLE IF NOT EXISTS `user`(

   id int PRIMARY KEY AUTO_INCREMENT,
   username varchar(255) NOT NULL,
   
   email varchar(255) NOT NULL,
   date_de_naissance DATE NOT NULL,
   password varchar(255) NOT NULL,
   adresse varchar(255) NOT NULL,
   code_postal int NOT NULL,
   tele int NOT NULL,
   genre ENUM('homme', 'female') NOT NULL,
   role ENUM('admin', 'client') NOT NULL
      );
";

//$cnx->query($userData);

$inserUserData="INSERT INTO `user` (username, email, date_de_naissance, password, adresse, code_postal, tele,genre, role)
VALUE


('brahim','brahim@gmail.com','2001-02-07','brahim123','agadir','8088','0653560918','homme','client')
";

//$cnx->query($inserUserData);

?>