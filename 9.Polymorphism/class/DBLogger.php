<?php
 
class DBLogger implements LoggerInterface{
     
    public function message($myString)
    {
        return "From DBLogger : Alex Parker is " . $myString;
    }

} 