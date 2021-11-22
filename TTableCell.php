<?php
include_once 'TElement.php';
/**
 * classe TTableCell
 * reponsável pela exibição de uma célula de uma tabela
 */

class TTableCel1 extends TElement
{
    /**
     * método construtor
     * instancia uma nova célula
     * @param Svalue = conteúdo da célula
     */

    public function __construct($value)
    {
        parent::__construct('td');
        parent::add($value);
    }
}
