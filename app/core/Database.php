<?php

class Database
{
    public $status;
    private $connection;
    function __construct()
    {
        $this->status = new stdClass;
        $string = "mysql:hostname=localhost;dbname=Glowguru";
        $con = new PDO($string, DBUSER, DBPASS);
        $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->connection = $con;
    }

    protected function query($query, $data = [])
    {
        //showd($query);
       $connection = $this->connection;
        $this->status->query = $query;
        $this->status->data = $data;
        
        try {
            $statement = $connection->prepare($query);
            $success = $statement->execute($data);
            $this->status->success = $success;
            if ($success) {
                $this->status->affected_rows = $statement->rowCount();
                $this->status->last_insert_id = $connection->lastInsertId();
                $this->status->result = $statement->fetchAll();
                return $this->status->result;
            } else {
                $this->status->error_code = $connection->errorCode();
                $this->status->error_info = $connection->errorInfo();
                return false;
            }
        } catch (PDOException $e) {
            $this->status->exception = $e;
            return false;
        }
    }
}
