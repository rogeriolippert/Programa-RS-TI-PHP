<?php

class Cidades {
    public $id;
    public $uf;

    public function getCidades($id_uf) {
        $sqlQuery = "SELECT * FROM cidades WHERE uf = ?";

        try {
            return Database::query($sqlQuery, [$id_uf]);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}