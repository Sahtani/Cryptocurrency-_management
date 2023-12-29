<?php
class Utilisateur {
    private $conn;
    private $table_name = "Utilisateur";

    public $UserID;
    public $Nom;
    public $Prenom;
    public $DateNaissance;
    public $NexusID;
    public $Email;
    public $MotDePasse;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function signup() {
        $query = "INSERT INTO " . $this->table_name . " SET Nom=:nom, Prenom=:prenom, DateNaissance=:date_naissance, Email=:email, MotDePasse=:mot_de_passe";

        $stmt = $this->conn->prepare($query);

        $this->Nom = htmlspecialchars(strip_tags($this->Nom));
        $this->Prenom = htmlspecialchars(strip_tags($this->Prenom));
        $this->DateNaissance = htmlspecialchars(strip_tags($this->DateNaissance));
        $this->Email = htmlspecialchars(strip_tags($this->Email));
        $this->MotDePasse = htmlspecialchars(strip_tags($this->MotDePasse));

        $stmt->bindParam(":nom", $this->Nom);
        $stmt->bindParam(":prenom", $this->Prenom);
        $stmt->bindParam(":date_naissance", $this->DateNaissance);
        $stmt->bindParam(":email", $this->Email);
        $stmt->bindParam(":mot_de_passe", $this->MotDePasse);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE Email = :email AND MotDePasse = :mot_de_passe";

        $stmt = $this->conn->prepare($query);

        $this->Email = htmlspecialchars(strip_tags($this->Email));
        $this->MotDePasse = htmlspecialchars(strip_tags($this->MotDePasse));

        $stmt->bindParam(":email", $this->Email);
        $stmt->bindParam(":mot_de_passe", $this->MotDePasse);

        $stmt->execute();

        return $stmt;
    }
}
?>
