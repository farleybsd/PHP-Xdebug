<?php
require_once __DIR__ . '/vendor/autoload.php';

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;

$leilao = new Leilao('m objeto muito legal');
//$leilao->finaliza();
$leilao->recebeLance(new Lance(new Usuario('Farley'),100));

?>