<?php

/* * ********************************************************************** 
 * Traits
 * @read more :: http://php.net/manual/en/language.oop5.traits.php
 * @video :: https://youtu.be/b0LQU1SKutI?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * As of PHP 5.4.0, PHP implements a method of code reuse called Traits.
 * Traits are a mechanism for code reuse in single inheritance languages such as PHP. 
 * A Trait is intended to reduce some limitations of single inheritance by enabling a developer to 
 * reuse sets of methods freely in several independent classes living in different class hierarchies. 
 * The semantics of the combination of Traits and classes is defined in a way which reduces complexity, 
 * and avoids the typical problems associated with multiple inheritance and Mixins.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note  
 */
        

trait common {
 
    
    function method1()
    {
        return "Hello World! From COMMON trait".__FUNCTION__;
    }
    function method2()
    {
        return "Hello World! From COMMON trait".__FUNCTION__;
    }

}

trait base {
 
    
    function method3()
    {
        return "Hello World! From BASE trait".__FUNCTION__;
    }

}

class class1 {

   use common;

}
class class2 {

   use common,base;

} 


echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: Call class2 -there available all traits methods";
echo "<br>===============<br>";

/**
 * @author chirag pipariya <chriagpipariya@gmail.com> 
 */ 
$obj = new class1();
$obj2 = new class2();

print $obj->method1();
echo "<br>";
print $obj->method2();
echo "<br>";
print $obj2->method3();
echo "<br>"; 

echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


