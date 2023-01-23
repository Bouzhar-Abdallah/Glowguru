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
}
