<?php

class Database 
{
    public $status ;
    private $connection;
    function __construct()
    {
        $this->status = new stdClass;
        $string = "mysql:hostname=localhost;dbname=Glowguru";
        $con = new PDO($string,DBUSER,DBPASS);
        $con ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $this->connection = $con;
    }

    protected function query($query , $data = [])
    {
        //showd($query);
        $con = $this->connection;
        try {
            $stmt = $con->prepare($query);
            $success = $stmt->execute($data);
            $this->status->success = $success;
            $this->status->query = $query;
            if ($success) {
                $last_id = $con->lastInsertId();
                $this->status->last_id_inserted = $last_id;
                if ($last_id) {
                    return $last_id;
                }
                $result = $stmt->fetchAll();
                if (is_array($result) && count($result)) 
                {
                    return $result;
                }
                
            }
        } catch (PDOException $e) {
            $this->status = $e->getMessage();
        }
        
        return false;
    }
    
   
}

