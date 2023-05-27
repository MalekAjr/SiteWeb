

<?php
$hostname="localhost";
$username="root";
$password="";
$basename="sitesport";
$conn=new mysqli($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect to database");

}
if(isset($_POST['envoyer'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $genre=$_POST['genre'];
    $datenais=$_POST['datenais'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $niveau=$_POST['niveau'];
    $insert="";
    
    if ($_POST['choix']){
        foreach ($_POST['choix'] as $choix ) 
            $insert.="$choix +";  
        
        
    }

        $sql='INSERT INTO sport VALUES("","'.$nom.'","'.$prenom.'","'.$genre.'","'.$datenais.'","'.$email.'","'.$tel.'","'.$niveau.'","'.$insert.'")';
        header("location:page_test.php");
     }

    ?>
