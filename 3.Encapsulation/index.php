<?php

/* * ********************************************************************** 
 * Encapsulation
 * @read more ::  http://php.net/manual/en/language.oop5.inheritance.php
 * @description :: 
 * Wrapping of data in single unit. also we can say hiding the information of essential details. 
 * Example: You have a mobile phone.... there it some interface which helps u to interact with cell phone and u can uses the services of mobile phone. 
 * But the actually working in cell phone is hide. u don't know how it works internally.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 */
class parent_class {

    private $property1;
    protected $property2;

    public function __construct()
    {
        $this->property1 = 1;
        $this->property2 = "Hello World!";
    }

    private function method1()
    {
        $this->property1++;
    }

    protected function method2()
    {
        return $this->property2;
    }

}

class child_class extends parent_class {

    public function method2()
    {
        return $this->property2;
    }

}

$obj = new child_class;

echo "<pre> ";
echo "<br>===============<br>";
echo "Here Printed Object child class 'method1' funcation";
echo "<br>===============<br>";
 
print_r($obj->method2());
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';
die();
