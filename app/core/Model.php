<?php


class Model extends Database
{
    protected $table = "";
    function __construct()
    {

        parent::__construct();

        $this->table = $this::class;
    }

    public function insert($data)
    {
        $keys = array_keys($data);
        $query = "insert into $this->table (" . implode(',', $keys) . ") values (:" . implode(',:', $keys) . ");";
        $last_id = $this->query($query, $data);
        return $last_id;
    }
    public function selectAll()
    {
        $query = "select * from $this->table ";
        return $this->query($query);
    }

    public function where($data, $s = '*')
    {
        $keys = array_keys($data);

        $query = "select $s from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        $query = trim($query, " && ");

        return $this->query($query, $data);
    }

    public function search($data_like = [], $data_com = [], $operator = '>')
    {
        $keys_like = array_keys($data_like);
        $keys_com = array_keys($data_com);
        $query = "select * from $this->table";
        if (!empty($keys_like) || !empty($keys_com)) {
            $query .= ' where ';
        }
        foreach ($keys_like as $key) {
            $query .= $key . " LIKE :" . $key . "_like && ";
        }
        foreach ($keys_com as $key) {
            $query .= $key . " $operator :" . $key . "_com && ";
        }

        $query = trim($query, " && ");

        $data = [];
        foreach ($data_like as $key => $value) {
            $data[$key . '_like'] = $value . '%';
        }
        foreach ($data_com as $key => $value) {
            $data[$key . '_com'] = $value;
        }

        return $this->query($query, $data);
    }

    public function delete($id, $id_column = 'id')
    {
        $data[$id_column] = $id;
        $query = "delete from $this->table where $id_column = :$id_column";
        $this->query($query, $data);
        return false;
    }

    public function update($id, $data, $id_column = 'id')
    {

        $keys = array_keys($data);
        $query = "update $this->table set  ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . ", ";
        }

        $query = trim($query, ", ");

        $query .= " where $id_column = :$id_column";

        $data[$id_column] = $id;

        $this->query($query, $data);
        return false;
    }
}
