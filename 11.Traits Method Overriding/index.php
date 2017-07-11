<?php

/* * ********************************************************************** 
 * Traits
 * @read more :: http://php.net/manual/en/language.oop5.traits.php
 * @video :: https://youtu.be/aUQcwKAi6X8?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
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
 * @note :: 
 * Here given priority to following order for overriding :: common -> base -> child 
 * if child class have same "method1" in base and common then child "method1" call first.
 * if child class havn't "method1" then base "method1" call.
 * if child and base class havn't "method1" then common "method1" call. 
 */
        

class common {
 
    
    function method1()
    {
        return "Hello World! From COMMON trait".__FUNCTION__;
    } 

}

trait base {
 
    
    function method1()
    {
        return "Hello World! From BASE trait".__FUNCTION__;
    }

}

class child extends common{

   use base;

} 


echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: Call child class ";
echo "<br>===============<br>";

/**
 * @author chirag pipariya <chriagpipariya@gmail.com> 
 */ 
$obj = new child(); 

print $obj->method1();
echo "<br>"; 
echo "<br>"; 

echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


