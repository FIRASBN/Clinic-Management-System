<?php

$serveur = "localhost";
$user = "root";
$mp = "";
$db = "hospital-management-system";
$conn = mysqli_connect($serveur, $user, $mp, $db);
if ($conn === false) {
    echo "<script type='text/javascript'>window.alert(' errrrrrrreuur connection invalide ');window.location='login page.php';</script>";
}


if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["tel"]) && !empty($_POST["pass"]) && !empty($_POST["date"]) && !empty($_POST["prenom"])) {


    $name = $_POST["name"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $date = $_POST["date"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $req = "INSERT INTO `patient` (`nom_pat`, `prenom_pat`, `tel_pat`, `date_pat`, `email_pat`, `pass_pat`) VALUES ('$name','$prenom','$tel','$date','$email','$pass')";
    if (mysqli_query($conn, $req)) {
        header("Location: login page.php");
        exit(); // Arrêter l'exécution du script après la redirection
    } else {
        echo "<script type='text/javascript'>window.alert(' Erreur lors de l'insertion des données ');window.location='login page.php';</script>";
    }
} else {
    echo "<script type='text/javascript'>window.alert(' vous de vais remplir les champ  ');window.location='login page.php';</script>";

    
}
?>
