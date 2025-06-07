<?php
session_start();
$serveur = "localhost";
$user = "root";
$mp = "";
$db = "hospital-management-system";
$conn = mysqli_connect($serveur, $user, $mp, $db);
if ($conn === false) {
    echo "<script type='text/javascript'>window.alert(' errrrrrrreuur connection invalide ');window.location='login page.php';</script>";
}

if (isset($_POST["pass"]) && isset($_POST["email"]) && isset($_POST["type"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $type = $_POST["type"];

    if ($type == "DOCTOR") {
        $req = "SELECT * FROM doctors WHERE pass_doc= '$pass' and email_doc= '$email' ";
        $_SESSION['type'] = $type;
    } elseif ($type == "PASSION") {
        $req = "SELECT * FROM patient WHERE pass_pat= '$pass' and email_pat= '$email' ";
        $_SESSION['type'] = $type;
    } 
    
    $result = mysqli_query($conn, $req);

    if ($result) {
        // Vérifie si des lignes ont été renvoyées
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['email'] = $email; // l'email de l'utilisateur est stocké dans la session
            echo "<script>window.location='home.php';</script>";
            exit(); // Terminer le script après la redirection
        } else {
            echo "<script>window.alert('Nom d\\'utilisateur ou mot de passe invalide');</script>";
        }
    } else {
        echo "<script>window.alert('Erreur de base de données');</script>";
    }
    
} 
?>