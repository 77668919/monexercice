<?php
session_start();

$localhost = '127.0.0.1';
$user = 'root';
$password = '';
$db = "gestiondecompte";

$conn = mysqli_connect($localhost, $user, $password, $db);

if (!$conn) {
    die('Impossible de se connecter à la base de données');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['motDePasse'];

    $query = "SELECT * FROM utilisateur WHERE email ='$email' AND motDePasse = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Les informations d'identification sont correctes
        $_SESSION['email'] = $email;
        $_SESSION['motDePasse'] = $password;
        header("Location: index.php");
        exit();
    } else {
        // Les informations d'identification sont incorrectes
        header("Location: login.php?erreur=1");
        exit();
    }
} else {
    // Si la méthode de requête n'est pas POST, rediriger vers la page de connexion
    header('Location: login.php');
    exit();
}
?>

