<?php

/* * ********************************************************************** 
 * Polymorphism
 * @read more :: https://code.tutsplus.com/tutorials/understanding-and-applying-polymorphism-in-php--net-14362
 * @video :: https://youtu.be/X8M3057Q418?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * The beauty of polymorphism is that the code working with the different classes does not need to know which class it is using since they're all used the same way.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note 
 * =>   
 */
function __autoload($class)
{
    include_once 'class/' . $class . '.php';
}

function Logger($variable)
{
    switch ($variable)
    {
        case 'DB':
            return new DBLogger();
            break;
        case 'Email':
            return new EmailLogger();
            break;
        case 'File':
            return new FileLogger();
            break;
        default:
            echo "not found";
            die;
            break;
    }
}

echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: User";
echo "<br>===============<br>";

/**
 * @author chirag pipariya <chriagpipariya@gmail.com>
 * @uses Logger Funcation that you pass DB,Email,File so that behave diffrent 
 */
$obj  = Logger('DB'); 
$user = new User($obj);

print $user->insert();
echo "<br>";
print $user->update();
echo "<br>";
print $user->delete();
echo "<br>";

echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


