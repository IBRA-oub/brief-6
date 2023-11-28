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
$agence="CREATE TABLE IF NOT EXISTS `agence`(
    id int PRIMARY KEY AUTO_INCREMENT,
    longitude int NOT NULL,
    latitude int NOT NULL
    
);";

//$cnx->query($agence);

$userData="CREATE TABLE IF NOT EXISTS `user`(
   id int PRIMARY KEY AUTO_INCREMENT,
   username varchar(255) NOT NULL,
   date_de_naissance DATE NOT NULL,
   nationalite varchar(255) NOT NULL,
   genre ENUM('homme', 'female') NOT NULL,
   password varchar(255) NOT NULL,
   role ENUM('admin', 'client') NOT NULL,
   agence_id int,
   FOREIGN KEY (agence_id) REFERENCES agence(id) ON DELETE CASCADE 
      );
";

//$cnx->query($userData);

$compte="CREATE TABLE IF NOT EXISTS `compte`(
    id int PRIMARY KEY AUTO_INCREMENT,
    rib varchar(50) NOT NULL,
    balance float(20) NOT NULL,
    devise varchar(50) NOT NULL,
    user_id int,
    FOREIGN KEY(user_id) REFERENCES user(id) ON DELETE CASCADE
);";

//$cnx->query($compte);

$transaction="CREATE TABLE IF NOT EXISTS`transaction`(
    id int  PRIMARY KEY AUTO_INCREMENT,
    montant int NOT NULL,
    devise varchar(50) NOT NULL,
    type ENUM('debit','credit') NOT NULL,
    compte_id int, 
    FOREIGN KEY (compte_id) REFERENCES compte(id) ON DELETE CASCADE
);";

$cnx->query($transaction);

$addresses="CREATE TABLE IF NOT EXISTS `addresses`(
    id int PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    adresse varchar(255) NOT NULL,
    code_postal int NOT NULL,
    tele int NOT NULL,
    user_id int ,
    agence_id int ,
    FOREIGN KEY(user_id) REFERENCES user(id) ON DELETE CASCADE,
   FOREIGN KEY (agence_id) REFERENCES agence(id) ON DELETE CASCADE 

);
";

//$cnx->query($addresses);

$distributeur="CREATE TABLE IF NOT EXISTS`distributeur`(
    id int PRIMARY KEY AUTO_INCREMENT,
    longitude int NOT NULL,
    latitude int NOT NULL,
    agence_id int ,
   FOREIGN KEY (agence_id) REFERENCES agence(id) ON DELETE CASCADE 
    
    
);";

//$cnx->query($distributeur);






?>