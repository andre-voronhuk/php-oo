<?php
class TStyle
{
    private $name;
    private $properties;
    static private $loaded;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __set($name, $value)
    {
        $name = str_replace('_', '-', $name);
        $this->properties[$name] = $value;
    }
    public function show()
    {
        echo "<style type='text/css' media='screen'>\n";
        echo ".{$this->name}\n";
        echo "{\n";
        if ($this->properties) {
            foreach ($this->properties as $name => $value) {
                echo "\t {$name}:{$value};\n";
            }
        }
        echo "}\n";
        echo "</style>\n";
        self::$loaded[$this->name] = TRUE;
    }
}
