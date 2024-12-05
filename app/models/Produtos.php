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
            // Uma inserção bem-sucedida no banco de dados retorna o ID do produto adicionado
            $idProdutoAdicionado = Database::query($sqlQuery, [
                                                $this->nome, 
                                                $this->cor, 
                                                $this->preco, 
                                                $this->descricao, 
                                                $this->fotos ?? ''
                                            ]); 
                                            // ?? adiciona a foto ou nada ('') se não foram 
                                            // carregadas fotos no formulário
            
            // Se o produto foi adicionado com sucesso ao banco de dados
            if($idProdutoAdicionado) {
                $sqlQuery = "INSERT INTO produtos_has_categorias(id_produtos, id_categorias) 
                                VALUES (?, ?)";
                
                try {
                    Database::query($sqlQuery, [$idProdutoAdicionado, $this->categoria]);
                    return $idProdutoAdicionado;
                } catch (\PDOException $e) {
                    exit($e->getMessage());
                }
            }
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}