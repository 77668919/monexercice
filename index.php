<?php
session_start();


// Vérifier si l'utilisateur n'est pas connecté
if (!isset($_SESSION['email']) || empty($_SESSION['motDePasse'])) {
    // Rediriger vers la page de connexion
    header("Location: login.php");
    $user = get_user_data( $username);
    if(isset($_SESSION['username'])) {
        // Afficher le nom et le prénom de l'utilisateur
        echo "Bienvenue, ".$_SESSION['prenom']." ".$_SESSION['nom']."!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="row">
            <div class="col">
                <form action="deconnexion.php" method="POST" class="float-end" style="color:blue; border-radius:10px; margin-left:-620px;">
                    <input type="submit" value="Déconnexion">
                </form>
            </div>
        </div>
       
</body>
</html>
<?php
// Démarrez la session (si ce n'est pas déjà fait)

// Vérifiez si l'utilisateur est connecté
if(isset($_SESSION['username'])) {
    // Afficher le nom et le prénom de l'utilisateur
    echo "Bienvenue, ".$_SESSION['prenom']." ".$_SESSION['nom']."!";
} 
?>