<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/2css.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <header id="header-wrapper">
      <h1>Sport is our life</h1>
      <br>
        <div id="ajroud">
            
            <form id="malek" action="page_test.html">
                <label for="homme">Homme:</label>
                <select name="homme" id="homme">
                  <optgroup label="Vêtements De Sport">
                    <a href="#"><option value="T-Shirt">T-Shirt</option></a>
                    <a href="#"><option value="Pantalon">Pantalon</option></a>
                    <a href="#"><option value="Short">Short</option></a>
                  </optgroup>
                  <optgroup label="Chaussure Sport">
                    <a href="#"><option value="Chaussures">Chaussures</option></a>
                    <a href="#"></a><option value="Claquettes">Claquettes</option></a>
                  </optgroup>
                  <optgroup label="Accessoires Sport">
                    <a href="#"><option value="Chaussettes">Chaussettes</option></a>
                    <a href="#"><option value="ballon">ballon</option></a>
                    <a href="#"><option value="bande">bande</option></a>
                  </optgroup>
                </select>
                <br><br>
              </form>
        </div>
    <div id="malek2">
        <form action="page1.html">
            <label for="femme">Femme:</label>
            <select name="femme" id="femme">
              <optgroup label="Vêtements De Sport">
                <a href="#"><option value="T-Shirt">T-Shirt</option></a>
                <option value="Pantalon">Pantalon</option>
                <option value="Short">Short</option>
              </optgroup>
              <optgroup label="Chaussure Sport">
                <option value="Chaussures">Chaussures</option>
                <option value="Claquettes">Claquettes</option>
              </optgroup>
              <optgroup label="Accessoires Sport">
                <option value="Chaussettes">Chaussettes</option>
                <option value="ballon">ballon</option>
                <option value="bande">bande</option>
              </optgroup>
            </select>
            <br><br>
          </form>
    </div>
    <div id="malek3">
    <form action="page1.html">
        <label for="cars">Enfant:</label>
        <select name="cars" id="cars">
          <optgroup label="Fillette">
            <a href="#"><option value="Vêtements De Sport">Vêtements De Sport</option></a>
            <option value="Chaussure Sport">Chaussure Sport</option>
            <option value="Accessoires Sport">Accessoires Sport</option>
          </optgroup>
          <optgroup label="Garcon">
            <a href="#"><option value="Vêtements De Sport">Vêtements De Sport</option></a>
            <option value="Chaussure Sport">Chaussure Sport</option>
            <option value="Accessoires Sport">Accessoires Sport</option>
          </optgroup>
        </select>
        <br><br>
    </form>
    </div>
    <div id="malek4">
      <form action="page1.html">
          <label for="cars"><div id="malek3">
    <form action="page1.html">
        <label for="cars">Matériel et accessoires:</label>
        <select name="cars" id="cars">
          <optgroup label="MATÉRIEL DE SPORT">
            <a href="#"><option value="Tapis roulant">Tapis roulant</option></a>
            <option value="Vélo">Vélo</option>
            <option value="Banc">Banc</option>
          </optgroup>
          <optgroup label="Accessoires">
            <a href="#"><option value="Cassquettes">Cassquettes</option></a>
            <option value="Ballon">Ballon</option>
            <option value="Bouteilles">Bouteilles</option>
          </optgroup>
        </select>
        <br><br>
    </form>
    </header> 

  <section id="wrapper">
        <div class="container">
          <form method="POST" action="connecter.php" class="form" >
              <h2>Formulaire d'inscription</h2>
              <fieldset>
                  <legend>Information personnelles</legend>
                  <label>Nom:</label>
                  <input type="text" name="nom" placeholder="Ex:Ajroud Malek"><br><br>
                  <label>Prénom :</label><input type="text" name="prenom"><br><br>
                  <label>Genre:</label>
                  <input type="radio" name="genre" value="Femme"><label>Femme</label>
                 <input type="radio" name="genre" value="Homme"><label>Homme</label><br><br>
                 <label>Date de naissance</label><input type="date" name="datenais"><br><br>
                 <label>Adresse mail:</label><input type="email" name="email"><br><br>
                 <label>Télephone portable :</label><input type="tel" name="tel">
              </fieldset>
              <fieldset>
                  <legend>Informations professionnelles</legend>
                  <label>Niveau universitaire:</label> 
                  <input type="text" name="niveau"><br><br>
                  <label>Connaissances :</label>
                  <input type="checkbox" name=choix[] value="Football"><label>Football</label>
                  <input type="checkbox" name=choix[] value="BasketBall"><label>BasketBall</label>
                  <input type="checkbox" name=choix[] value="Natation"><label>Natation</label>
                  <input type="checkbox" name=choix[] value="Coaching"><label>Coaching</label>
              </fieldset>
              <center><input type="submit" name="envoyer" value="Envoyer">
              <input type="reset" name="annuler" value="Annuler"></center>
          </form>
        </div>
  </section>
      <footer></footer>

      