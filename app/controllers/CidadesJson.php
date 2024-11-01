<?php

Class CidadesJson extends Cidades {
    // Exemplo de URL de chamada no nosso JavaScript
    // Retorna todas as cidades do estado do RS:
    // /public/index.php?url=CidadesJson/getCidades/23

    // CidadesJson => Controller
    // getCidades => Função
    // 23 => Parâmetro 1 ($id_uf)

    public function getCidades($id_uf) {
        $cidadesData = parent::getCidades($id_uf);

        echo json_encode($cidadesData);
    }
}