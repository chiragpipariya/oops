<?php

/* * ********************************************************************** 
 * Type Hinting
 * @read more :: http://php.net/manual/en/language.oop5.typehinting.php
 * @video :: https://youtu.be/67I0C_0yGPI?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * Since PHP 5 you can use type hinting to specify the expected data type of an argument in a function declaration. 
 * When you call the function, PHP will check whether or not the arguments are of the specified type. 
 * If not, the run-time will raise an error and execution will be halted.
 * Valid types are class names for arguments that receive objects and array for those that receive arrays.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note ::  
 */
interface common {

    public function method1();
}

class myClass1 implements common {

    public function method1()
    {
        echo "Call fucation from myClass1.";
    }

}

class myClass2 implements common {

    public function method1()
    {
        echo "Call fucation from myClass2 method1.";
    }

    public function method2()
    {
        echo "Call fucation from myClass2 method2.";
    }

}


/**
 * @uses myClass2 created below object and check the output that will 
 * @param common $obj
 */

function xyz(common $obj,array $arr)
{
    $obj->method1();
    echo "<br>"; 
    print_r($arr); 
}

echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: xyz function call";
echo "<br>===============<br>";

$variable = ['name1','name2','name3'];
$createObj = new myClass2();

xyz($createObj,$variable);
echo "<br>"; 
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';