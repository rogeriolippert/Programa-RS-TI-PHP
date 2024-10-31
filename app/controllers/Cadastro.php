<?php

class Cadastro extends Controller {

    // Index da página de cadastro (localhost/index.php?url=Cadastro(/index))
    public function index($param1= '', $param2= '', $param3= '') {
        $testData = null;

        $this->view('cadastro/index', ['test' => $testData, 'parameters' => [$param1, $param2, $param3]]);
    }

    // Cria uma nova pessoa no banco de dados.
    public function novoCadastro() {
        $pessoa = $this->model('Pessoas');
        $pessoa->nome = $_POST['nome'];
        $pessoa->sobrenome = $_POST['sobrenome'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->cep = $_POST['cep'];
        $pessoa->rua = $_POST['rua'];
        $pessoa->numero = $_POST['numero'];
        $pessoa->bairro = $_POST['bairro'];
        $pessoa->complemento = $_POST['complemento'];
        $pessoa->estado = $_POST['estado'];
        $pessoa->cidade = $_POST['cidade'];

        $pessoa->inserirPessoa();
    }
}