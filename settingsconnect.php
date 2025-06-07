<?php
session_start();
$serveur = "localhost";
$user = "root";
$mp = "";
$db = "hospital-management-system";
$conn = mysqli_connect($serveur, $user, $mp, $db);
if ($conn === false) {
     echo "<script>window.alert('errreuur : connection invalide');</script>";
}


if (!empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["tel"]) && !empty($_POST["pass"]) && !empty($_POST["date"]) && !empty($_POST["prenom"])) {

    $name = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $date = $_POST["date"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
 
    if ($_SESSION['type'] == "DOCTOR") {
        $req_id = "SELECT id_doc FROM doctors WHERE email_doc = '" . $_SESSION['email'] . "'";
        $result_id = mysqli_query($conn, $req_id);
        $row_id = mysqli_fetch_assoc($result_id);
        $id = $row_id['id_doc'];

        $req = "UPDATE `doctors` SET `nom_doc`='$name', `prenom_doc`='$prenom', `tel_doc`='$tel', `email_doc`='$email', `pass_doc`='$pass', `datte_doc`='$date' WHERE id_doc = $id";
    } else {
        $req_id = "SELECT id_patient FROM patient WHERE email_pat = '" . $_SESSION['email'] . "'";
        $result_id = mysqli_query($conn, $req_id);
        $row_id = mysqli_fetch_assoc($result_id);
        $id = $row_id['id_patient'];

        $req = "UPDATE `patient` SET `nom_pat`='$name', `prenom_pat`='$prenom', `tel_pat`='$tel', `email_pat`='$email', `pass_pat`='$pass', `date_pat`='$date' WHERE id_patient = $id";
    }

    $result = mysqli_query($conn, $req);
    if ($result) {
        echo "<script>window.alert('Modification effectuée');</script>";
    } else {
        echo "<script>window.alert('Modification non effectuée');</script>";
    }

    
    
}
   
?>