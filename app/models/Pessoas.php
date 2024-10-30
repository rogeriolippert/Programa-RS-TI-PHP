<?php

class Pessoas {

    // Call to the database
    public function getPessoas($sqlParameters = 1) {
        $sqlQuery = "SELECT * FROM pessoas";
            
        try {
            return Database::query($sqlQuery);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}

?>