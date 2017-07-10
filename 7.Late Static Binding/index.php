<?php

/* * ********************************************************************** 
 * Late Static Binding Member & variable
 * @read more ::  http://php.net/manual/en/language.oop5.late-static-bindings.php 
 * @description :: 
 * This feature was named "late static bindings" with an internal perspective in mind. 
 * "Late binding" comes from the fact that static:: will not be resolved using the class where the method is defined but it will rather be computed using runtime information. 
 * It was also called a "static binding" as it can be used for (but is not limited to) static method calls. 
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note 
 * => call any method by static::method1() in side the class 
 */
class BaseClass {
    
    protected static $tableName = "Base";

    public function select()
    {
        return "select * from " . static::$tableName;
    }

    public function insert()
    {
        return "insert into " . static::$tableName;
    }

}

class user extends BaseClass
{
    protected static $tableName = "User";
    
}

class lead extends BaseClass
{
    
    protected static $tableName = "Lead";
    
}




echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: BaseClass , User ,Lead";
echo "<br>===============<br>";
 
$obj = new user();
$obj2 = new lead();

print $obj->select();
echo "<br>";
print $obj2->select();
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


