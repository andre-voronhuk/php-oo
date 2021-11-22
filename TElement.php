<?php

/**
 * classe TElement
 * classe para abstração de tags HTML
 */
class TElement
{

    private $name; //nome da TAG
    private $properties;
    public $classe; // propriedades da TAG

    /*
     * método construtor
     * instancia uma tag htm]
     * @param Sname = nome da tag
     */
    public function __construct($name)
    {
        // define o nome do elemento
        $this->name = $name;
    }

    /*
     * método set()
     * intercepta as atribuições à propriedades do objeto
     * @param $name = nome da propriedade
     * @param $value = valor
     */

    public function __set($name, $value)
    {
        // armazena os valores atribuídos
        // ao array properties
        $this->properties[$name] = $value;
    }

    /**
     * método add()
     * adiciona um elemento filho
     * @param $child = objeto filho
     * @return nao retorna nada
     */

    public function add($child)
    {
        $this->children[] = $child;
    }

    /*
     * método open()
     * exibe a tag de abertura na tela
     */

    public function show()
    {
        // abre a tag
        $this->open();
        echo "\n";
        // se possui conteúdo
        if (isset($this->children)) {
            // percorre todos objetos filhos
            foreach ($this->children as $child) {
                // se for objeto
                if (is_object($child)) {
                    $child->show();
                } else {
                    if ((is_string($child)) or (is_numeric($child))) {
                        // se for texto
                        echo $child;
                    }
                }
            }
            // fecha a tag
            $this->close();
        }
    }

    private function open()
    {
        // exibe a tag de abertura
        echo "<{$this->name}";
        if ($this->properties) {
            // percorre as propriedades
            foreach ($this->properties as $name => $value) {
                echo " {$name}=\"{$value}\"";
            }
        }
        echo '>';
    }

    private function close()
    {
        echo "</{$this->name}>\n";
    }
    public function closes()
    {
        echo "</{$this->name}>\n";
    }
}
