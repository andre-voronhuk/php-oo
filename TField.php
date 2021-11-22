<?php
include_once 'TElement.php';
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
* Description of TField
*
* @author marca
*/
abstract class TField {

    public $name;
    protected $size;
    protected $value;
    protected $editable;
    protected $tag;

    /**
    * método construtor
    * instancia um campo do formulario
    * Qparam S$name = nome do campo
    */

    public function __construct( $name ) {
        // define algumas características iniciais
        self::setEditable( true );
        // self::setName( $name );
        self::setSize( 200 );
        // Instancia um estilo CSS chamado tfield
        // que será utilizado pelos campos do formulário
        //! cria uma tag HTML do tipo <input>
        $this->tag = new TElement( 'input' );
        //$this->tag->class = 'tfield';
        // classe CSS
        /*
        * método setName()
        * define o nome do widget
        * Qparam name = nome do widget
        */
    }

    public function __setName( $name ) {
        $this->name = $name;
    }

    /*
    * método getName()
    * retorna o nome do widget
    */

    public function getName() {
        return $this->name;
    }

    /*
    * método setValue()
    * define o valor de um campo
    * Qparam Svalue = valor do campo
    */

    public function setValue( $value ) {
        $this->value = $value;
    }

    /*
    * método getValue()
    */

    public function getValue() {
        //retorna o valor de um campo
        return $this->value;
    }

    /**
    * método setEditable()
    * define se o campo poderá ser editado
    * @Gparam Seditable = TRUE ou FALSE
    */

    public function setEditable( $editable ) {
        $this->editable = $editable;
    }

    /*
    * método getEditable()
    * retorna o valor da propriedade Seditable
    */

    public function getEditable() {
        return $this->editable;
    }

    /*
    * método setProperty O
    * define uma propriedade para o campo
    * @param Sname = nome da propriedade
    * @param $valor = valor da propriedade
    */

    public function setProperty( $name, $value ) {
        // define uma propriedade de $this->tag
        $this->tag->$name = $value;
    }

    /*
    * método setSize()
    * define a largura do widget
    * @param S$size = tamanho em pixels
    */

    public function setSize( $size ) {
        $this->size = $size;
    }

}
