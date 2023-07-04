<?php
session_start();
require 'connect.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['dateDeNaissance'];
$sexe = $_POST['sexe'];
$email =  $_POST['email'];
$motDePasse =  $_POST['motDePasse'];

if(isset($nom,$prenom ,$date_de_naissance,$sexe,$email,$motDePasse ))
{
    $sql = "INSERT INTO utilisateur (nom, prenom, 
dateDeNaissance, sexe, email,motDePasse)
        VALUES ('$nom', '$prenom', '$date_de_naissance', 
        '$sexe', '$email','$motDePasse')";
    
    $query_run = mysqli_query($conn, $sql);

    if($query_run)
    {
        $_SESSION['message'] = "";
        header("Location: login.php");
        exit(0);
    }
    // else
    // {
    //     $_SESSION['message'] = "apprenant not  Successfully";
    //     header("Location: ../index.php");
    //     exit(0);
    // }
}
function hash_password($motDePasse){
    $hashed_password = password_hash($password, PASSWORD_DEFAULT, ['cost'=> 10]);
    return $hashed_password;
}
?>