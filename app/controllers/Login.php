<?php

class Login extends Controller {

    public function index() {
        // A função de index() é responsável por exibir
        // o formulário de Login para o usuário
        $this->view('login/index');
    }

    public function validaLogin($login, $senha) {
        $usuarios = $this->model("Usuarios");

        // Valida se no banco de dados existe a combinação
        // de login e senha informado pelo usuário na tela de login
        $loginValido = $usuarios->getUsuario($login, $senha);

        // Se retornou um login válido (resposta do banco maior do que zero itens),
        // retorna "verdadeiro" (true), caso contrário, retorna "falso" (false)
        if (count($loginValido) > 0) {
            // Se o banco retornar um usuário que corresponda a combinação de login e senha,
            // Cria um Cookie que armazenará o login do usuário
            setcookie('login', $login);
            return true;
        } else {
            return false;
        }
    }

    public function estaLogado() {
        // Se o Cookie de login estiver definido pela função validaLogin():
        if(isset($_COOKIE['login'])) {
            // Significa que o usuário está autenticado no sistema
            return true; // retorna verdadeiro (usuário está logado no sistema)
        } else {
            // Caso contrário, usuário não fez login no sistema
            return false; // retorna falso (usuário NÃO está logado no sistema)
        }
    }
}