<?php
require 'DataBase.php';
class ImplementandoBD extends DataBase
{
    public  function setcadastro($rg)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO teste(rg) VALUES (:rg)");
            $stmt->bindValue(':rg', $rg);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo "Erroooooooo: " . $ex->getMessage();
            return false;
        }
    }
}