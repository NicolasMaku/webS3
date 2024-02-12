<?php

class Crud {
    private $table;
    private $connexion;

    public function __construct($table, $connexion) {
        $this->table = $table;
        $this->connexion = $connexion;
    }

    public function insert($donnees) {
        $colonnes = implode(', ', array_keys($donnees));
        $valeurs = ':' . implode(', :', array_keys($donnees));

        $requete = $this->connexion->prepare("INSERT INTO {$this->table} ({$colonnes}) VALUES ({$valeurs})");
        echo "INSERT INTO {$this->table} ({$colonnes}) VALUES ({$valeurs})";

        foreach ($donnees as $cle => $valeur) {
            $requete->bindValue(':' . $cle, $valeur);
        }

        $requete->execute();
    }

    public function getById($id) {
        $requete = $this->connexion->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $requete->bindValue(':id', $id);
        $requete->execute();

        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $donnees) {
        $modification = '';
        foreach ($donnees as $cle => $valeur) {
            $modification .= "{$cle} = :{$cle}, ";
        }
        $modification = rtrim($modification, ', ');

        $requete = $this->connexion->prepare("UPDATE {$this->table} SET {$modification} WHERE id = :id");

        $requete->bindValue(':id', $id);

        foreach ($donnees as $cle => $valeur) {
            $requete->bindValue(':' . $cle, $valeur);
        }

        $requete->execute();
    }

    public function delete($id) {
        $requete = $this->connexion->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $requete->bindValue(':id', $id);
        $requete->execute();
    }

    public function lister() {
        $requete = $this->connexion->query("SELECT * FROM {$this->table}");
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
