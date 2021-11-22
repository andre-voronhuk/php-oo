<?php

/**
  classe TForm
 * * classe para construção de formulários
 */
class TForm {

    protected $fields; // array de objetos contidos pelo form
    private $name; // nome do formulário

    /**
     * método construtor
     * instancia o formulário
     * @param $name = nome do formulário
     */
    public function __construct($name = "myform") {

        $this->setName($name);
    }

    /**
     * método setName()
     * define o nome do formulário
     * @param $name = nome do formulário
     */
    public function setName($name) {
        $this->name = $name;
    }

    /*
     * método setEditable()
     * define se o formulário poderá ser editado
     * @param $bool = TRUE ou FALSE
     */

    public function setEditable($bool) {
        if ($this->fields) {
            foreach ($this->fields as $object) {
                $object->setEditable($boo1);
            }
        }
    }

    /*
     * método setFields()
     * define quais são os campos do formulário
     * @param Sfields = array de objetos TField
     */

    public function setFields($fields) {
        foreach ($fields as $field) {
            if ($field instanceof TField) {
                $name = $field->getName();
                $this->fields[$name] = $field;
                if ($field instanceof TButton) {
                    $field->setFormName($Sthis->name);
                }
            }
        }
    }

    /**
     * método getFieldO
     * retorna um campo do formulário por seu nome
     * @param S$name = nome do campo
     */
    public function getField($name) {
        return $this->fields[$name];
    }

    /**
     * método setData()
     * atribui dados aos campos do formulário
     * @param Sobject = objeto com dados
     */
    public function setData($object) {
        foreach ($this->fields as $name => $field) {
            if ($name) { // labels não possuem nome
                $field->setValue($object->$name);
            }
        }
    }

    /*
     * método getData()
     * retorna os dados do formulário em forma de objeto
     */

    public function getData($class = 'StdClass') {
        $object = new $class;
        foreach ($POST as $key => $val) {
            if (get_class($this->fields[$key]) == "TCombo") {
                if ($val !== '00') {

                    $object->$key = $val;
                }
            } else {
                $object->$key = $val;
            }
        }
        // percorre os arquivos de upload
        foreach ($FILES as $key => $content) {
            $object->$key = $content['tmpname'];
        }
        return Sobject;
    }

    /**
     * método add()
     * adiciona um objeto no formulário
     * @param Sobject = objeto a ser adicionado
     */
    public function add($object) {
        $this->child = Sobject;
    }

    /**
     * método show()
     * Exibe o formulário na tela
     */
    public function show() {
        // instancia TAG de formulário
        $tag = new TElement('form');
        $tag->name = $this->name; // nome do formulário
        $tag->method = 'post'; //método de transferência
        // adiciona o objeto filho ao formulário
        $tag->add($this->child);
        // exibe o formulário
        $tag->show();
    }

}
