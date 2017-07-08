<?php

/* * **********************************************************************
 * Class, Object , Property and method  
 * 
 * @read more ::  http://php.net/manual/en/language.oop5.properties.php
 * @description :: Class member variables are called "properties". 
 * You may also see them referred to using other terms such as "attributes" or "fields", but for the purposes of this reference we will use "properties". 
 * They are defined by using one of the keywords public, protected, or private, followed by a normal variable declaration. 
 * This declaration may include an initialization, but this initialization must be a constant value--that is, 
 * it must be able to be evaluated at compile time and must not depend on run-time information in order to be evaluated.
 * 
 * ********************************************************************** */
/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 */
class main_class {

    public $property1;
    public $property2;

    function __construct()
    {
        $this->property1 = 1;
        $this->property2 = "Hello Word!";
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

$obj = new main_class;

echo "<pre> ";
echo "<br>===============<br>";
echo "Here Printed Object class";
echo "<br>===============<br>";

print_r($obj);
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';
die();
