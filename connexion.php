<?php
session_start();
/*
error_reporting(E_ALL); // Affiche toutes les erreurs
ini_set('display_errors', 1);
//$id_session = session_id();
*/
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
        $query = "SELECT mail, mdp, nom, prenom, datedenaissance, tel, adresse, ville, codepostal, situation, charge  FROM adherents WHERE mail = :mail";
        //echo $query;
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':mail', $mail);
        

        try {
            $stmt->execute();
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);
            //var_dump($userData);
            //echo $userData;
        } catch (PDOException $e) {
            echo "Erreur PDO : " . $e->getMessage();
        }

        //var_dump($userData);
        
        if ($userData) {
            $user = new User(
                $userData['mail'],
                $userData['mdp']
            );

            if ($user->verifyPassword($mdp, $userData['mdp'])) {
                
                $_SESSION['mail'] = $mail;
                $_SESSION['nom'] = $userData['nom'];
                $_SESSION['prenom'] = $userData['prenom'];
                $_SESSION['datedenaissance'] = $userData['datedenaissance'];
                $_SESSION['tel'] = $userData['tel'];
                $_SESSION['adresse'] = $userData['adresse'];
                $_SESSION['ville'] = $userData['ville'];
                $_SESSION['codepostal'] = $userData['codepostal'];
                $_SESSION['situation'] = $userData['situation'];
                $_SESSION['charge'] = $userData['charge'];
                //var_dump ($user);
                return true;
            }
        }

        return false;
    }
}

try {
    $db = new PDO("mysql:host=localhost;dbname=database", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

$authController = new AuthController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mdp = $_POST['mdp'];
    $mail = $_POST['mail'];

    if ($authController->login($mail, $mdp)) {

        if ($_SESSION['mail'] === "admin@admin.fr") {
            header('Location: membres.php');
        } else {
            //echo "bravo";
            //echo 'ID de session (récupéré via session_id()) : <br>'.$id_session. '<br>';
            header('Location: index.php');
        }
        exit();
    } else {
        echo "Échec de l'authentification. Vérifiez vos informations de connexion.";
    }
}
?>
