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
   date_de_naissance DATE NOT NULL,
   nationalite varchar(255) NOT NULL,
   genre ENUM('homme', 'female') NOT NULL,
   password varchar(255) NOT NULL,
   role ENUM('admin', 'client') NOT NULL
      );
";

//$cnx->query($userData);



$addresses="CREATE TABLE IF NOT EXISTS `addresses`(
    id int PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    adresse varchar(255) NOT NULL,
    code_postal int NOT NULL,
    tele int NOT NULL,
    user_id int ,
    FOREIGN KEY(user_id) REFERENCES user(id)

    
);
";

//$cnx->query($addresses);


$inserUserData="INSERT INTO `user` (username, date_de_naissance, nationalite, genre, password, role)
VALUE
('brahim','2001-02-07','marocan','homme','brahim123','admin'),
('yassine','2001-02-07','marocan','homme','yassine123','client')
";

//$cnx->query($inserUserData);

?>