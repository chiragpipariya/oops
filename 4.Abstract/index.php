<?php

/* * ********************************************************************** 
 * Abstract
 * @read more ::  http://php.net/manual/en/language.oop5.abstract.php
 * @video :: https://youtu.be/LpZUlWlp2QI?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child; additionally, 
 * these methods must be defined with the same (or a less restricted) visibility. 
 * For example, if the abstract method is defined as protected, 
 * the function implementation must be defined as either protected or public, 
 * but not private. Furthermore the signatures of the methods must match, 
 * i.e. the type hints and the number of required arguments must be the same. For example, 
 * if the child class defines an optional argument, where the abstract method's signature does not, 
 * there is no conflict in the signature. This also applies to constructors as of PHP 5.4. Before 5.4 constructor signatures could differ.
 * ********************************************************************** */

/**
 * @note 
 * abstract allow member of class to declare
 * abstract allow cunstruct funcation and method private , protected or public 
 * 
 */
/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note 
 * abstract allow member of class to declare
 * abstract allow cunstruct funcation and method private , protected or public 
 */
abstract class base {

    protected $property1;
    protected $property2;

    public function __construct()
    {
        $this->property1 = 1;
        $this->property2 = "Hello World!";
    }

    protected abstract function method1();

    protected abstract function method2();
}

class MyClass extends base {

    public function method1()
    {
        return $this->property1++;
    }

    public function method2()
    {
        return $this->property2;
    }

}

class MyClass2 extends base {

    public function method1()
    {
        return $this->property1++;
    }

    public function method2()
    {
        return $this->property2 = "MyClass2 call method2";
    }

}

$obj = new MyClass;

echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: MyClass";
echo "<br>===============<br>";

print_r($obj->method1());
echo "<br>";
print_r($obj->method2());
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';

$obj2 = new MyClass2;

echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: MyClass2";
echo "<br>===============<br>";

print_r($obj2->method1());
echo "<br>";
print_r($obj2->method2());
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';

