<?php
//require_once "poo_database.php";
require_once "poo_models.php";
// Classe représentant l'utilisateur
class User {
    private $username;
    private $password;
     

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
        
    }

    public function verifyPassword($inputPassword) {
        // Vérifie si le mot de passe fourni correspond au mot de passe de l'utilisateur
        return password_verify($inputPassword, $this->password);
    }
}

// Classe gérant le processus d'authentification
class AuthController {
    
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }


    public function login($mail, $mdp) {
        $query = "SELECT mail, mdp FROM adherents WHERE mail = :mail";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            $user = new User($userData['mail'], $userData['mdp']);

            if ($userData['mdp'] === $mdp) {
                return true; // Authentification réussie
            }
        }

        return false; // Authentification échouée
    }
}
   
session_start();
// Processus de connexion
try {
    $db = new PDO("mysql:host=localhost;dbname=database", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

$authController = new AuthController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);

    //echo "Nom d'utilisateur: $nom<br>";
    echo "Mot de passe: $mdp<br>";
    echo "Email : $mail<br>";
    
    if ($authController->login($mail, $mdp)) {
        //echo "Authentification réussie ! Bienvenue, $nom.";
        $_SESSION['nom'] = $nom;

        header('Location: index.html');
        exit();
    } else {
        echo "Échec de l'authentification. Vérifiez vos informations de connexion.";
    }
}
?>