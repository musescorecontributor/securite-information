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

$name = mysqli_real_escape_string($con,$_POST["user_name"]) ;


$mdp = mysqli_real_escape_string($con,$_POST["user_mdp"]) ;



/*$stmt = $con->prepare("SELECT * FROM users WHERE pseudonyme=?");
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result(); */

$result = mysqli_query($con, "SELECT * FROM comptes WHERE pseudonyme = ('$name') AND mdp = ('$mdp') ");


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Connection réussie ! Bonjour " . $row["pseudonyme"]. "" ;
  }
} else {
  echo "Erreur de connection : pseudonyme ou mot de passe incorrect.";
}
$con->close();
?> 