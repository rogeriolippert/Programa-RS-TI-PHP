<?php

Class Cidades extends Controller {
    public function getCidades($id_uf) {
        // Inicializa o modelo "Cidades"
        $cidades = $this->model('Cidades');
        $cidades->uf = $id_uf;

        // Call function from the model
        $cidadesData = $cidades->getCidades();

        return $cidadesData;
    }
}