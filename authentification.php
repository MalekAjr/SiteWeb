<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    <link rel="stylesheet" href="CSS/Connexion.css">
    </head>
    <body>
      <div class="login-wrap">
        <div class="login-html">
          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Se connecter</label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">S'inscrire</label>
          <div class="login-form">
            <form method="POST" action="authentification.php">
            <div class="sign-in-htm">
              <div class="group">
                <label for="user" class="label" name="id">Identifiant</label>
                <input id="user" type="email" class="input" name="user">
              </div>
              <div class="group">
                <label for="pass" class="label" name="mtd">Mot de passe</label>
                <input id="pass" type="password" class="input" data-type="password" name="password">
              </div>
              <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span> Réster connecter </label>
              </div>
              <div class="group">
                <input type="submit" class="button" value="Se connecter"  name="connecter">
              </div>
              <div class="hr"></div>
            </form>
            </div>
            <div class="sign-up-htm">
            <form method="POST" action="inscription.php">
            
              <div class="group">
                <label for="pass" class="label">Addresse Email</label>
                <input id="pass" type="text" class="input" name="ad">
              </div>
              <div class="group">
                <label for="pass" class="label" >Mot de passe</label>
                <input id="pass" type="password" class="input" data-type="pa"  name="mtd">
              </div>
              <div class="group">
                <label for="pass" class="label" >Répeter mot de passe</label>
                <input id="pass" type="password" class="input" data-type="Password"  name="mtd1">
              </div>
            
              <div class="group">
                <label for="pass" class="label" >Numero telephone</label>
                <input id="pass" type="tel" class="input" name="nu">
              </div>
              <div class="group">
                <input type="submit" class="button" value="S'inscrire" name="envoyer">
              </div>
            </form>
           
            <div>
              <div class="foot-lnk">
                <label for="tab-1">Déja membre ?</a>
              </div>
              <div class="hr"></div>
              
            </div>
          </div>
        </div>
      </div>
      </body>
      </html>




<?php
$hostname="localhost";
$username="root";
$password="";
$basename="sitesport";
$conn=new mysqli($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect to database");

}
if(isset($_POST['connecter'])){
 $user=$_POST['user'];
echo($user);
$pass=$_POST['password'];
echo($password); 

/* $user=stripslashes($_REQUEST['user']);
$user=mysqli_real_escape_string($conn,$username);
$pass=stripslashes($_REQUEST['password']);
$pass=mysqli_real_escape_string($conn,$password); */

 $query="SELECT * FROM user WHERE ad='$user' and mtd='$pass'";
$result=mysqli_query($conn,$query)  or die("sql error");

$raw=mysqli_num_rows($result); 

echo($raw);
  if($raw==1){
    $_SESSION['login']=$username;
    header("location:page2.php");

} else{

    echo mysqli_error($conn);

}  


}

/* if($mtd==$mtd1){
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

} */



?>




