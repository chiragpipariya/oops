<?php

/* * ********************************************************************** 
 * Anonymous functions
 * @read more :: http://php.net/manual/en/functions.anonymous.php , http://php.net/manual/en/class.closure.php
 * @video :: https://youtu.be/u-F5b6EvZKQ?list=PLHFGzOr0F8DLa3LIlbIV1vokNLBajWiGJ
 * @description :: 
 * Anonymous functions, also known as closures, allow the creation of functions which have no specified name. 
 * They are most useful as the value of callback parameters, but they have many other uses.
 * Anonymous functions are implemented using the Closure class.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note :: With the help of php method chaining or PHP function chaining we can call more than one method or function of the class in single instruction. 
 */

echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: Anonymous functions call";
echo "<br>===============<br>";

## Example :: 1 #######################################################
$message = 'hello (1)';

// No "use"
$example = function ()
{
    var_dump($message);
};
$example();

## Example :: 2 #######################################################

// Inherit $message
$example = function () use ($message)
{
    var_dump($message);
};
$example();

## Example :: 3 #######################################################

// Inherited variable's value is from when the function
// is defined, not when called
$message = 'world (2)';
$example();

## Example :: 4 ####################################################### 

// Inherit by-reference
$example = function () use (&$message)
{
    var_dump($message);
};
// Reset message
$message = 'hello (3) Inherit by-reference';
$example();

## Example :: 4 #######################################################

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world (4)';
$example();

// Closures can also accept regular arguments
$example = function ($arg) use ($message)
{
    var_dump($arg . ' ' . $message);
};
$example("hello");

#########################################################
 


echo "<br>";
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';
