<?php

Class Cidades extends Controller {
    public function getCidades($id_uf) {
        // Inicializa o modelo "Cidades"
        $cidades = $this->model('Cidades');

        // Call function from the model
        $cidadesData = $cidades->getCidades($id_uf);

        return $cidadesData;
    }
}