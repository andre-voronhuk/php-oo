<?php
include_once 'TTableCell.php';
/**
* classe TTableRow
* reponsável pela exibição de uma linha de uma tabela
*/

class TTableRow extends TElement {
    /**
    * método construtor
    * instancia uma nova Tinha
    */

    public function __construct() {
        parent::__construct( 'tr' );
    }
    /**
    * método addCell
    * agrega um novo objeto célula ( TTableCel1 ) à Tinha
    * @param $value = conteúdo da célula
    */

    public function addCel( $value ) {
        // instancia objeto célula
        $cell = new TTableCell( $value );
        parent::add( $cell );
        // retorna o objeto instanciado
        return $cell;
    }
}
