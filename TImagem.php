<?php
include_once 'TElement.php';
/*
classe TImage
* classe para exibição de imagens
*/

class TImage extends TElement
{

    private $source;
    // localização da imagem

    /*
    * método construtor
    * instancia objeto TImage
    * @param S$source = localização da imagem
    */

    public function __construct($source)
    {
        parent::__construct('img');
        // atribui a localização da imagem
        $this->src = $source;
        $this->border = 0;
    }
}
