<?php

/* * ********************************************************************** 
 * Traits
 * @read more :: http://php.net/manual/en/language.oop5.traits.php
 * @video :: https://youtu.be/HW0g8nsbku4?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
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
 * we can not use those two triat with same method that will create error
 * for that solution is as below example  
 */
        

trait common {
 
    
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

class child{

   use base,common{
       common::method1 insteadof base; 
       base::method1 as rename_method1; 
   }

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
print $obj->rename_method1();
echo "<br>"; 


echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


