<?php
namespace App\Trello\models;
use App\Trello\utils\Database;

abstract class AbstractModel
{
    // Propriété qui stocke la connexion PDO à la base de données
    public $pdo;
    
    // Constructeur de la classe qui initialise la connexion à la base de données en appelant la fonction getConnection() définie dans le fichier database.php
    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

}
