<?php
class Produto extends Controller {

    // Index da página (localhost/produto(/index))
    public function index($idProduto) {
        // Inicializa o modelo 'Produtos'
        $produtos = $this->model('Produtos');

        // Chama a função do modelo
        $produtoData = $produtos->getProduto($idProduto)[0];
        // Formata o preço com pontos e vírgulas, ex. "1728" vira "1.728,00"
        $produtoData->preco = number_format($produtoData->preco,2,",",".");
        // Converte a coluna "fotos" do DB de JSON para Array (vetor)
        $produtoData->fotos = json_decode($produtoData->fotos);
        // Calcula o valor de desconto
        $produtoData->preco_desconto = number_format(substr_replace(preg_replace("/9|\./", "", $produtoData->preco * (1-0.03)),'.',-2,0),2,",",".");

        $this->view('produto/index', ['produto' => $produtoData]);
    }
}