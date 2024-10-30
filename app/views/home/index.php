<html>
    <head>
    
    </head>
    <body>
        <h1>Home Page (index)</h1>
        <?php
        // $data ==> data that was passed via the view
        $pessoasData = $data['pessoas'];

        // Get the data via functions
        // Functions are the attribute names of the table
        foreach ($pessoasData as $pessoaData) {
            echo $pessoaData->nome;
            echo $pessoaData->sobrenome;
        }

        // $data ==> data that was passed via the view
        $parameters = $data['parameters'];

        // Get the data via an array
        echo "Parameter 1: " . $parameters[0] . '<br>';
        echo "Parameter 2: " . $parameters[1] . '<br>';
        echo "Parameter 3: " . $parameters[2] . '<br>';

        ?>
    </body>
</html>