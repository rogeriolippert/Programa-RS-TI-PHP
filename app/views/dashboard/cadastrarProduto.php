<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Moda</title>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Cadastro de produtos</h1>
    <form action="/Produtos/addProduto" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nome">Nome</label></td>
                <td><input type="text" id="nome" name="nome"></td>
            </tr>
            <tr>
                <td><label for="cor">Cor</label></td>
                <td><input type="text" id="cor" name="cor"></td>
            </tr>
            <tr>
                <td><label for="preco">Preço</label></td>
                <td><input type="text" id="preco" name="preco"></td>
            </tr>
            <tr>
                <td><label for="descricao">Descrição</label></td>
                <td><textarea id="descricao" name="descricao"></textarea></td>
            </tr>
            <tr>
                <td><label for="foto-frente">Foto Frente</label></td>
                <td>
                    <input id="foto-frente" name="fotos[]" type="file">
                </td>
            </tr>
            <tr>
                <td><label for="foto-tras">Foto Trás</label></td>
                <td><input id="foto-tras" name="fotos[]" type="file"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>

</html>