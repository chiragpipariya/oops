<?php
 
class EmailLogger implements LoggerInterface{
     
    public function message($myString)
    {
        return "From EmailLogger : Alex Parker is " . $myString;
    }

} 