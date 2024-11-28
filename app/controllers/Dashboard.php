<?php

require_once 'Login.php';

class Dashboard extends Controller {
    public function index() {
        // Instancia a Controller de Login (controllers/Login.php):
        $login = new Login();

        // Valida se o usuário está autenticado
        if($login->estaLogado()) {
            // Se o usuário estiver autenticado

            // Direciona ele para a Dashboard do site
            $this->view('dashboard/index');
        } else {
            // Se o usuário não estiver autenticado
        
            // Carrega a função index() da Controller de Login
            // que exibe o formulário de login:
            $login->index();
        }
    }
}