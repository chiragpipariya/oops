<?php

/* * ********************************************************************** 
 * Interfaces
 * @read more ::  http://php.net/manual/en/language.oop5.interfaces.php
 * @video :: https://youtu.be/Me3Zd-8HqRE?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are handled.
 * Interfaces are defined in the same way as a class, but with the interface keyword replacing the class keyword and without any of the methods having their contents defined. 
 * All methods declared in an interface must be public; this is the nature of an interface.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note
 * => interface not allow  member variable 
 * => interface not allow  __construct funcation also 
 * => all funcation should be public there is not allow private and protected 
 */
interface a {
   
    public function method1();
    public function method2(); 
}

interface b {
   
    public function method3();
    public function method4(); 
}

class MyClass implements a,b {

    public function method1()
    {
        return "call :: ".__FUNCTION__;
    }
    public function method2()
    {
        return "call :: ".__FUNCTION__;
    }
    public function method3()
    {
        return "call :: ".__FUNCTION__;
    }
    public function method4()
    {
        return "call :: ".__FUNCTION__;
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
 

