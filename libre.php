<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>reservation</title>
    <link rel="stylesheet" href="mystyle.css">
<style>
body {
text-align : center;
}
</style>
  </head>

  <body>
  <?php
  $v = $_CET[id];
    echo "<FORM method='post' action='reserver.php?id=$v'>";
      <h1>Rerservation </h1>
      <div id = 'inputform'>
         Votre nom: <input type="text" name="fname"><br>
         Matricule voiture: <input type="text" name="lname" ><br>
      </div>
      <div id ='list'>
         Type : <SELECT name="formation" size="1">
            <OPTION value="inscrit">interieur</option>
            <OPTION value="python">exterireur</option>
         </SELECT>
      </div>
      <br>
      <button type="submit" >reserver</button>
     </FORM>
  </body>
</html>
