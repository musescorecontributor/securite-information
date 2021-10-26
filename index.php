<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Titre</title>
		<link rel="icon" href="paris8.png" type="image/png">
    </head>

    <body>
<form action="login.php" method="post">
  <div>
    <label for="name">pseudonyme</label>
    <input type="text" id="name" name="user_name" />
  <div>
  <div>
    <label for="mdp">mot de passe</label>
    <input type="text" id="mdp" name="user_mdp" />
  </div>
  <div>
  <input type="button" onclick="myFunction()" value="reset">
  <input type="submit" value="login">
<form action ="localhost/secu/creation.php">
	<button type="submit">creation de compte</button>
	
</form>
  </div>
  <script>
	function myFunction() {
	document.getElementById("name").value = "";
	document.getElementById("mdp").value = "";
	}
</script>
</form>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "village";

     

// on se connect à localhost au port 3307
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
    die('Error ' . mysqli_connect_error());
}
echo 'Connected successfully!';
?> 
    </body>
</html>