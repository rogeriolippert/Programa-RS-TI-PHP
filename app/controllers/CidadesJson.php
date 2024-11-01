<?php

Class CidadesJson extends Cidades {
    public function getCidades($id_uf) {
        $cidadesData = parent::getCidades($id_uf);

        echo json_encode($cidadesData);
    }
}