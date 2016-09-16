<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'bingeconding';

try {
  $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}
catch(PDOException $e) {
    echo $e->getMessage();
}

$return_arr = array();

if ($conn)
{
    $ac_term = "%".$_GET['term']."%"; // Récupère les termes tapé par l'utilisateur
    $query = "SELECT * FROM utilisateur where nom like :term"; // Chercher les entreprise dont le nom ressemble au terme.
    $result = $conn->prepare($query);
    $result->bindValue(":term",$ac_term);
    $result->execute(); // execute la requête

    // récuperer et stocker les informations dans un tableau
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $row_array['id'] = $row['id'];
        $row_array['value'] = $row['nom'];


        array_push($return_arr,$row_array);
    }
}
// deconnexion de la base
$conn = null;
// Renvoyer les résultats dans un tableau
echo json_encode($return_arr);


?>
