<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TEntry
 *
 * @author marca
 */
class TEntry extends TField {

    public function show() {
        // atribui as propriedades da TAG
        $this->tag->name = $this->name; // nome da TAG
        $this->tag->value = $this->value; // valor da TAG
        $this->tag->type = 'text'; // tipo de input
        $this->tag->style = "width:{$this->size}"; // tamanho em pixels
        // se o campo não é editável
        if (!parent::getEditable()) {
            $this->tag->readonly = "1";
            $this->tag->class = 'tfielddisabled'; // classe CSS
        }
        // exibe a tag
        $this->tag->show();
    }
}
