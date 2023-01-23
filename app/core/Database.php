<?php

class Database 
{
    private function connect()
    {
        
        $string = "mysql:hostname=localhost;dbname=Glowguru";
        $con = new PDO($string,DBUSER,DBPASS);
        $con ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $con;
    }

    protected function query($query , $data = [])
    {
        //show($query);
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data);
        //show($query);
        $last_id = $con->lastInsertId();
        if ($last_id) {
            return $last_id;
        }
        
        if ($check) 
        {
            $result = $stmt->fetchAll();
            if (is_array($result) && count($result)) 
            {
                return $result;
            }
        }
        
        return false;
    }
    
   
}

