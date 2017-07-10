<?php

/* * ********************************************************************** 
 * Inheritance
 * @read more ::  http://php.net/manual/en/language.oop5.inheritance.php
 * @description :: 
 * Inheritance is a well-established programming principle, and PHP makes use of this principle in its object model. 
 * This principle will affect the way many classes and objects relate to one another. 
 * For example, when you extend a class, the subclass inherits all of the public and protected methods from the parent class. 
 * Unless a class overrides those methods, they will retain their original functionality.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 */
class common {

    public $property1;
    public $property2;

    function __construct()
    {
        $this->property1 = 1;
        $this->property2 = "Hello World!";
    }

    function method1()
    {
        $this->property1++;
    }
    
    function method2()
    {
        return $this->property2;
    }

}

class child_class extends common {

   

}


$obj = new child_class;

echo "<pre> ";
echo "<br>===============<br>";
echo "Here Printed Object child class can access all this main class property and methods";
echo "<br>===============<br>";

print_r($obj);
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';
die();
