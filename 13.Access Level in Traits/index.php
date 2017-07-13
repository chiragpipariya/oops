<?php

/* * ********************************************************************** 
 * Traits
 * @read more :: http://php.net/manual/en/language.oop5.traits.php
 * @video :: https://youtu.be/QSICm_V1PB0?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * As of PHP 5.4.0, PHP implements a method of code reuse called Traits. 
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note :: 
 * if you definded one trait and that trait have one private mathod but 
 * if you want to change access level in mathod you can change from where you use trait 
 * there you can change like private, public, protected. 
 * also you can change method name.
 * see below example
 */
        

trait common {
 
    
    private function method1()
    {
        return "Hello World! From COMMON trait ->".__FUNCTION__;
    } 

} 

class child{

   use common{
       common::method1 as public alsoYouCanChangeMathod;  
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

print $obj->alsoYouCanChangeMathod();
echo "<br>";  


echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


