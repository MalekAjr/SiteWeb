
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
$mtd=$_POST['mtd'];
echo($mtd);
$mtd1=$_POST['mtd1'];
echo($mtd1);

$ad=$_POST['ad'];
echo($ad);

$nu=$_POST['nu'];
echo($nu);

if($mtd==$mtd1){
echo'mot de pase conforme';
 $sql='INSERT INTO user VALUES("","'.$mtd.'","'.$ad.'","'.$nu.'")';

if($conn->query($sql)===TRUE){
header('location:page3.php');
} else{
echo"Erreue :".$sql."<br>".$conn->error;
}
$conn->close();
}

else{
    echo'Mot de passe non valide';
} 

}



?>
