<?php
$hostname="localhost";
$username="root";
$password="";
$basename="sitesport";
$conn=new mysqli($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect to database");

}
$=$_POST[''];
$prenom=$_POST['prenom'];
$genre=$_POST['genre'];
$datenais=$_POST['datenais'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$niveau=$_POST['niveau'];
$insert="";
foreach ($_POST['choix'] as $choix){
    $insert.="$choix +";  
}
if(isset($_POST['envoyer'])){
    $sql='INSERT INTO sport VALUES("","'.$name.'","'.$prenom.'","'.$genre.'","'.$datenais.'","'.$email.'","'.$tel.'","'.$niveau.'","'.$insert.'")';

    if($conn->query($sql)===TRUE){
        echo"nouvel enregistrement créé avec succès";
    } else{
        echo"Erreue :".$sql."<br>".$conn->error;
    }
    $conn->close();
} 

?>