<?php


class Model extends Database
{
    protected $table = "";
    function __construct()
    {
        $this->table = $this::class;
    }
    
    public function insert($data)
    {
        $keys = array_keys($data);
        $query = "insert into $this->table (".implode(',',$keys).") values (:".implode(',:',$keys).");";
        $last_id = $this->query($query,$data);
        return $last_id;
    }
    public function selectAll()
    {
        $query = "select * from $this->table ";
        return $this->query($query);
    }

    public function where($data, $s= '*')
    {
        $keys = array_keys($data);
        
        $query = "select $s from $this->table where ";

        foreach ($keys as $key ) {
            $query .= $key ." = :" .$key." && ";
        }
        
        $query = trim($query," && ");

        return $this->query($query, $data);
    }
}
