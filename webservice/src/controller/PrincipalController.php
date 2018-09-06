<?php

namespace fazendaurbana\controller;

use fazendaurbana\model\Chave;
use fazendaurbana\model\Leitura;
//use fazendaurbana\model\Variavel;

class PrincipalController {

    public function index() {
        // 1- OBTER DADOS SANITIZADOS (HTTP GET)
        $chave = filter_input(INPUT_GET, 'chave', FILTER_SANITIZE_STRING);
        $variavel = filter_input(INPUT_GET, 'variavel', FILTER_SANITIZE_NUMBER_INT);
        $data = filter_input(INPUT_GET, 'data', FILTER_SANITIZE_NUMBER_INT);
        $valor = filter_input(INPUT_GET, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);

        if (!isset($chave) || !isset($variavel) || !isset($data) || !isset($valor)) {
            $resposta['status'] = "erro";
            echo json_encode($resposta);
            exit;
        }

        // 2- VALIDA CHAVE
        // 2.1- BUSCA CHAVE DO BANCO (por hora simulado)
        $chaveValida = new Chave("asdfg");
        // 2.2- VALIDA CHAVE
        if ($chaveValida->getChave() != $chave) {
            $resposta['status'] = "erro";
            echo json_encode($resposta);
            exit;
        }

        // 3- BUSCA VARIAVEIS DO BANCO (por hora simulado)
        //$tempAr = new Variavel("Temperatura do Ar");
        //$tempAgua = new Variavel("Temperatura da Água");
        //$outra = new Variavel("Outra");
        // 4- GRAVA NO BANCO (por hora simulado)
        $leitura = new Leitura($variavel, $data, $valor);

        // 5- Teste
        echo "<p>Variável: " . $leitura->getVariavel() . "</p>";
        echo "<p>Data: " . $leitura->getData() . "</p>";
        echo "<p>Valor: " . $leitura->getValor() . "</p>";

        $resposta['status'] = "ok";
        echo json_encode($resposta);
    }

}
