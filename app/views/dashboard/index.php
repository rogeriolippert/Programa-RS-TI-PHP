<?php
// Inicia a sessão
session_start();

// Exibe "Olá, admin@localhost" para o usuário
echo "Olá, " . $_SESSION['login'];