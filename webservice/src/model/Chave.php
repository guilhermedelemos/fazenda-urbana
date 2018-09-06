<?php
namespace fazendaurbana\model;

class Chave {
    private $id;
    private $chave;
    
    function __construct($chave) {
        $this->chave = $chave;
    }
    
    function getId() {
        return $this->id;
    }

    function getChave() {
        return $this->chave;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setChave($chave) {
        $this->chave = $chave;
    }

}
