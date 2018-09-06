<?php
namespace fazendaurbana\model;

class Leitura {
    private $id;
    private $variavel;
    private $data;
    private $valor;

    function __construct($variavel, $data, $valor) {
        $this->variavel = $variavel;
        $this->data     = $data;
        $this->valor    = $valor;
    }
    
    function getId() {
        return $this->id;
    }

    function getVariavel() {
        return $this->variavel;
    }

    function getData() {
        return $this->data;
    }

    function getValor() {
        return $this->valor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setVariavel($variavel) {
        $this->variavel = $variavel;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

}
