<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestiondecompte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['dateDeNaissance'];
$sexe = $_POST['sexe'];
$email =  $_POST['email'];
$motDePasse =  $_POST['motDePasse'];
$hashmotDePasse = hash_password($motDePasse,PASSWORD_DEFAULT);

if(isset($nom,$prenom ,$date_de_naissance,$sexe,$email,$hashmotDePasse ))
{
    $sql = "INSERT INTO utilisateur (nom, prenom, 
dateDeNaissance, sexe, email,motDePasse)
        VALUES ('$nom', '$prenom', '$date_de_naissance', 
        '$sexe', '$email','$hashmotDePasse')";
    
    $query_run = mysqli_query($conn, $sql);

    if($query_run)
    {
        $_SESSION['message'] = "";
        header("Location: login.php");
        exit(0);
    }

}
// function hash_password($motDePasse){
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT, ['cost'=> 10]);
//     return $hashed_password;
// }
//     $nom = $_GET['nom']; 
//     $prenom = $_GET['prenom']; 
//     $dateDeNaissance = $_GET['dateDeNaissance'];
//     $sexe = $_GET['sexe'];
//     $email = $_GET['email'];
//     $motDePasse = $_GET['motDePasse'];

// // if ( isset( $_GET['submit'] ) ) {
// //     /* récupérer les données du formulaire en utilisant 
// //        la valeur des attributs name comme clé 
// //       */
// //     $nom = $_GET['nom']; 
// //     $prenom = $_GET['prenom']; 
// //     $dateDeNaissance = $_GET['dateDeNaissance'];
// //     $sexe = $_GET['sexe'];
// //     $email = $_GET['email'];
// //     $motDePasse = $_GET['motDePasse'];
// //     // afficher le résultat
// //     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
// //     // echo 'Nom : ' . $nom . ' Age : ' . $age . ' Adresse : ' . $adresse; 
// //     exit;
// //  }
// $sql = "INSERT INTO `utilisateur` ( `nom`, `prenom`, `dateDeNaissance`, `sexe`, `email`, `motDePasse`)
// VALUES('$_GET['nom']','$_GET['prenom']','$_GET['dateDeNaissance']','$_GET['sexe']','$_GET['email']','$_GET['motDePasse']')";

// if (mysqli_query($conn, $sql)) {
//   echo "Nouveaux enregistrement ajouter avec succés";
// } else {
//   echo "Erreur: " . $sql . "
// " . mysqli_error($conn);
// }

// $conn->close();

 
// if(isset($_POST["submit"])){
// $hostname='localhost';
// $username='root';
// $password='';
// $dbname='gestiondecompte'; 
// try {
// $dbh = new PDO("mysql:host=$hostname;charset=utf8", $username,$password,$dbname);
  
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
// $stmt = $dbh->prepare("INSERT INTO utilisateur ( nom, prenom, dateDeNaissance, sexe, email, motDePasse) VALUES (:nom, :prenom, ,:dateDeNaissance :sexe, :email,:motDePasse)");
 
// $stmt -> bindParam(':nom', '$_POST["nom"]');
// $stmt -> bindParam(':prenom', '$_POST["prenom"]');
// $stmt -> bindParam(':dateDeNaissance', '$_POST["dateDeNaissance"]');
// $stmt -> bindParam(':sexe', '$_POST["sexe"]');
// $stmt -> bindParam(':email', '$_POST["email"]');
// $stmt -> bindParam(':motDePasse', '$_POST["motDePasse"]');
 
// $stmt->execute();
 
// if ($dbh->query($stmt)) {
// echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
// }
// else{
// echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
// }

// $dbh = null;
// }
// catch (Exception $e){

// }
// }
?> 