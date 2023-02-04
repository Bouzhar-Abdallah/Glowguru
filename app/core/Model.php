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

    public function search($data_like = [], $data_prix = [], $data_quantite = [])
    {
        $keys_like = array_keys($data_like);
        
        $query = "select * from $this->table";
        if (!empty($keys_like) || !empty($keys_prix)) {
            $query .= ' where ';
        }
        foreach ($keys_like as $key) {
            $query .= $key . " LIKE :" . $key . "_like && ";
        }

        $prix_key =  array_keys($data_prix)[0];
        $prix_operator = $data_prix['operator'];
        $query .= $prix_key . " $prix_operator :" . $prix_key . "_com && ";

        $quantite_key =  array_keys($data_quantite)[0];
        $quantite_operator = $data_quantite['operator'];
        $query .= $quantite_key . " $quantite_operator :" . $quantite_key . "_com && ";

        $data_com['quantite'] = $data_quantite['quantite'];
        $data_com['prix_vente'] = $data_prix['prix_vente'];

        $query = trim($query, " && ");

        
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
