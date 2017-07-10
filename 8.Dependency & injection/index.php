<?php

/* * ********************************************************************** 
 * Dependency & injection
 * @read more ::  http://php-di.org/doc/autowiring.html 
 * @description :: 
 * Autowiring is an exotic word that represents something very simple: the ability of the container to automatically create and inject dependencies.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note 
 * =>   
 */
class Logger {
     
    public function message($myString)
    {
        return "Alex Parker is " . $myString;
    }

}

class user  
{
    private $logger;
    
    public function __construct(Logger $logObj)
    {
        $this->logger = $logObj;
    }
    
    public function insert()
    {
        return $this->logger->message("inserted.");
    }
    public function update()
    {
        return $this->logger->message("updated.");
    }
    public function delete()
    {
        return $this->logger->message("deleted.");
    }
}
 




echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: User";
echo "<br>===============<br>";
 
$obj = new Logger();
$user = new user($obj);
 
print $user->insert();
echo "<br>";
print $user->update();
echo "<br>";
print $user->delete();
echo "<br>";

echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';


