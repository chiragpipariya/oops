<?php
 
class FileLogger implements LoggerInterface{
     
    public function message($myString)
    {
        return "From FileLogger : Alex Parker is " . $myString;
    }

} 