<?php

class Produtos {

    public $nome;
    public $categoria;
    public $cor;
    public $preco;
    public $descricao;
    public $fotos;

    public function getProduto($idProduto) {
        $sqlQuery = "SELECT * FROM produtos WHERE id = ?";

        try {
            return Database::query($sqlQuery, [$idProduto]);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function addProduto() {
        $sqlQuery = "INSERT INTO produtos (nome, cor, preco, descricao, fotos)
                        VALUES (?, ?, ?, ?, ?)";

        try {
            return Database::query($sqlQuery, [
                                                $this->nome, 
                                                $this->cor, 
                                                $this->preco, 
                                                $this->descricao, 
                                                $this->fotos ?? ''
                                            ]); 
                                            // ?? adiciona a foto ou nada ('') se não foram 
                                            // carregadas fotos no formulário
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}