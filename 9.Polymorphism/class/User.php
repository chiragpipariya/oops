<?php
 
class User  
{
    private $logger;
    
    public function __construct(LoggerInterface $logObj)
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
  