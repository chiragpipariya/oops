<?php

/* * ********************************************************************** 
 * Static Member & variable
 * @read more ::  http://php.net/manual/en/language.oop5.static.php 
 * @description :: 
 * Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. 
 * A property declared as static cannot be accessed with an instantiated class object (though a static method can). 
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note 
 * => Static properties cannot be accessed through the object using the arrow operator ->. 
 */
class MyClass {
    
    public static $objVar = "call :: Object var";

    public static function method1()
    {
        return "call :: " . __FUNCTION__;
    }

    public function method2()
    {
        return "call :: " . __FUNCTION__;
    }

}




echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: MyClass";
echo "<br>===============<br>";

echo MyClass::$objVar;
echo "<br>";
print MyClass::method1();
echo "<br>";

$obj = new MyClass();
echo "<br>";
print $obj->method2();
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


