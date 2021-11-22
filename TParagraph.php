<?php
include_once 'TElement.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TParagraph
 *
 * @author marca
 */
/*
 * método construtor
 * instancia objeto TParagraph
 * @param Stexto = texto a ser exibido
 */
class TParagraph extends TElement {

    public function __construct($text) {
        parent::__construct('p');
        // atribui o conteúdo do texto
        parent::add($text);
    }
    /*
     * método setAlign()
     * define o alinhamento do texto
     * @param Salign = alinhamento do texto
     */
    function setAlign($align) {
        $this->align = $align;
    }
}

?>
