<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <?php


    use Alura\Leilao\Model\Leilao;

    require __DIR__ . '/vendor/autoload.php';

    $usuario =  new Leilao('Fiat 147 0Km');
    //var_dump('<pre>', $usuario);
    var_dump($usuario);
    //phpinfo();
    echo "Teste";
    ?>
</body>

</html>