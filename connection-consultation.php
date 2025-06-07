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


if (!empty($_POST["datte"]) && !empty($_POST["heure"])) {
    $datte = $_POST['datte'];
    $heure = $_POST['heure'];
    $req1 = "SELECT id_patient FROM patient WHERE email_pat = '" . $_SESSION['email'] . "'";
    $res1 = mysqli_query($conn, $req1);
    $row1 = mysqli_fetch_assoc($res1);
    $req2 = "SELECT id_doc FROM doctors";
    $res2 = mysqli_query($conn, $req2);
    $row2 = mysqli_fetch_assoc($res2);
    $pat_id = $row1['id_patient'];
    $doc_id = $row2['id_doc'];

    $req = "INSERT INTO consultaion VALUES ('','$datte','$heure','$pat_id','$doc_id')";
    $result = mysqli_query($conn, $req);
    if ($result) {

        echo "<script>window.alert('Consultation ajoutée');</script>";
        header("Location:consultation.php");
        exit();
    } else {
        echo "<script>window.alert('Erreur de lort de linsertion de base de données');</script>";
    }
}
