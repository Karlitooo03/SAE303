<?php
require_once "poo_models.php";

class User
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function verifyPassword($inputPassword, $hashedPassword)
    {
        return password_verify($inputPassword, $hashedPassword);
    }
}

class AuthController
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function login($mail, $mdp)
    {
        $query = "SELECT mail, mdp, nom, prenom, datedenaissance, tel, adresse, ville, codepostal,  FROM adherents WHERE mail = :mail";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            $user = new User(
                $userData['mail'],
                $userData['mdp']
            );

            if ($user->verifyPassword($mdp, $userData['mdp'])) {
                session_start();
                $_SESSION['mail'] = $mail;
                $_SESSION['nom'] = $userData['nom'];
                $_SESSION['prenom'] = $userData['prenom'];
                $_SESSION['datedenaissance'] = $userData['datedenaissance'];
                $_SESSION['tel'] = $userData['tel'];
                $_SESSION['adresse'] = $userData['adresse'];
                $_SESSION['ville'] = $userData['ville'];
                $_SESSION['codepostal'] = $userData['codepostal'];
                
                
                
                return true;
            }
        }

        return false;
    }
}

session_start();

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

    if ($authController->login($mail, $mdp)) {
        header('Location: index.php');
        exit();
    } else {
        echo "Échec de l'authentification. Vérifiez vos informations de connexion.";
    }
}
?>
