<?php
$civilite= $_POST["Civilité"];
$prenom= $_POST ["prenom"];
$nom= $_POST["nom"];

echo $civilite;
echo $prenom;
echo $nom;

  






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<form action="./index.php" method="POST">
<select name="Civilité">
  <option valeur="Mme">Madame</option>
  <option valeur="Mr">Monsieur</option>

</select>

 
          <label>Prenom</label>
          <input type="text" placeholder="votre prenom" name="prenom">

          <label>Nom</label>
          <input type="text" placeholder="Votre nom" name="nom" >

          <button type="submit">Envoyer</button>
          </form>
</body>
</html>