<?php
class Produto extends Controller {

    // Index da página (localhost/produto(/index))
    public function index($idProduto) {
        // Inicializa o modelo 'Produtos'
        $produtos = $this->model('Produtos');

        // Chama a função do modelo
        $produtoData = $produtos->getProduto($idProduto)[0];
        // Converte a coluna "fotos" do DB de JSON para Array (vetor)
        $produtoData->fotos = json_decode($produtoData->fotos);
        
        $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
        // Calcula o valor de desconto à vista (3%)
        $produtoData->preco_desconto = $fmt->formatCurrency($produtoData->preco * (1-0.03), 'BRL');
        // Valor da parcela em 6x
        $produtoData->preco_parcelado = $fmt->formatCurrency($produtoData->preco/6, 'BRL');
        // Formata o preço com pontos e vírgulas, ex. "1728" vira "1.728,00"
        $produtoData->preco = $fmt->formatCurrency($produtoData->preco, 'BRL');
        
        $this->view('produto/index', ['produto' => $produtoData]);
    }

    public function addProduto() {
        // Imprime as variáveis recebidas pelo formulário
        // de Cadastro de Produtos na tela
        // var_dump($_POST);

        // Extrai e associa os valores do formulário a variáveis
        // Por exemplo, $_POST['nome'] vira $nome
        // Equivalente a: $nome = $_POST['nome'];
        extract($_POST);

        // Inicializa o modelo 'Produtos'
        $produtoDB = $this->model('Produtos');

        // Executa a função do modelo
        $produtoDB->nome = $nome;
        $produtoDB->categoria = (int) $categoria;
        $produtoDB->cor = $cor;
        $produtoDB->preco = $preco;
        $produtoDB->descricao = $descricao;
        $resultado = $produtoDB->addProduto();

        echo $resultado;
    }
}