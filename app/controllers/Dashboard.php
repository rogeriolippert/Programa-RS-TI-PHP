<?php

class Dashboard extends Controller {
    public function index() {
        // Valida se o usuário está autenticado
        if(!isset($_COOKIE['login'])) {
            // Cookie "login" não está definido
            // (ou seja, o usuário não está autenticado)
            // Chama a função de Login:
            $this->Login();
        }
    }

    public function Login() {
        // A função de Login() é responsável por exibir
        // o formulário de Login para o usuário
        $this->view('login/index');
    }
}