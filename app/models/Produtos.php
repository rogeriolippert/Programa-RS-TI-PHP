<?php

class Produtos {

    public function getProduto($idProduto) {
        $sqlQuery = "SELECT * FROM produtos WHERE id = `?`";

        try {
            return Database::query($sqlQuery, [$idProduto]);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}