<?php

$servername="localhost";
$username="root";
$password="";
$data="sitesport";
//Etape 1
//création de connexion
$conn=new mysqli($servername,$username,$password,$data);

//test de connexion
if($conn->connect_error){
    die("connexion failed :".$conn->connect_error);
}
//Etape 2
//Récupérer les valeurs entrées par l'utilisateur
$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$password['password'];

if ($_POST['choix']){
    foreach ($_POST['choix'] as $choix ) 
        $insert.="$choix +";  
    
    
}

// création de la reqête
if(isset($_POST['envoyer'])){
    $sql='INSERT INTO user VALUES("","'.$name.'","'.$prenom.'","'.$genre.'","'.$datenais.'","'.$email.'","'.$tel.'","'.$niveau.'","'.$insert.'")';

    if($conn->query($sql)===TRUE){
        echo"nouvel enregistrement créé avec succès";
    } else{
        echo"Erreue :".$sql."<br>".$conn->error;
    }
    $conn->close();
} 
?>