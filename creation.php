<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
		<link rel="icon" href="paris8.png" type="image/png">
    </head>
    <body>
 Bonjour veuillez rentrer vos infos pour créer un nouveau compte
        <h1>Formulaire HTML</h1>
        
        <form action="newaccount.php" method="post">
            <div class="c100">
                <label for="prenom">Login : </label>
                <input type="text" id="login" name="login" style="width:30em">
            </div>
            <div class="c100">
                <label for="mail">Mot de passe : </label>
                <input type="text" id="password" name="password">
            
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		<form action = "creation.php" method="post">
			<div
			<p> vérifie que le compte n'existe déja pas </p>
			</div>
			<div class="c100" id="submit" >
				<input type="submit" id="verifier" value="vérifier">
			</div>
			
		</form>
        
        

<?php   
$servername = "localhost";  //replace your servername
$username = "root";   //replace your username
$password = "";        //replace your password
$dbname = "village";    //replace your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$verification = mysqli_query($con, "SELECT * FROM comptes WHERE pseudonyme = ('$name') AND mdp = ('$mdp') ");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
    </body>
</html>