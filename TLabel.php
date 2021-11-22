<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TLabel
 *
 * @author marca
 */
class TLabel extends TField {

    private $fontSize; // tamanho da fonte
    private $fontFace; // nome da fonte
    private $fontColor; // cor da fonte

    /**
     * método construtor
     * instancia o label, cria um objeto <font>
     * @param S$value = Texto do Label
     */

    public function __construct($value) {
// atribui o conteúdo do label
        $this->setValue($value);
// instancia um elemento <font>
        $this->tag = new TElement('font');
// define valores iniciais às propriedades
        $this->fontSize = '14';
        $this->fontFace = 'Arial';
        $this->fontColor = "black";
    }

    /*
     * método setSize
     * define o tamanho da fonte
     * @param $size = tamanho da fonte
     */

    public function setFontSize($size) {
        $this->fontSize = $size;
    }

    /**
     * método setFontFace
     * define a família da fonte
     * @param Sfont = nome da fonte
     */
    public function setFontFace($font) {
        $this->fontFace = $font;
    }

    /**
     * método setFontColor
     * define a cor da fonte
     * @param $color = cor da fonte
     */
    public function setFontColor($color) {

        $this->fontColor = $color;
    }

    /**
     * método show()
     * exibe o widget na tela
     */
    public function show() {
// define o estilo da tag
        $this->tag->style = "font-family:{$this->fontFace}; " .
                "color:{$this->fontColor}; " .
                "font-size:{$this->fontSize}";
// adiciona o conteúdo à tag
        $this->tag->add($this->value);
// exibe a tag
        $this->tag->show();
    }

}
