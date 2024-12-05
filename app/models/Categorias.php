<?php
class Categorias {
    public function getCategorias() {
        $sqlQuery = "SELECT * FROM categorias";

        try {
            return Database::query($sqlQuery);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}