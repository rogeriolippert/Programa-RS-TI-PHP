<?php

class Cadastro extends Controller {

    // Index of the contact page (localhost/contact(/index))
    public function index($param1= '', $param2= '', $param3= '') {

        // Inicializa o modelo 'Cadastro'
        // $test = $this->model('Test');

        // Chama a função 'getTestFunction()' do modelo
        // $testData = $test->getTestFunction();
        $testData = null;

        $this->view('cadastro/index', ['test' => $testData, 'parameters' => [$param1, $param2, $param3]]);
    }
}