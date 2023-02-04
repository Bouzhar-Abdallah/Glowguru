<?php


class Produits_dashboard extends Model
{
    public function select($param = '',$column = '(prix_vente - prix_achat)')
    {
        if ($param === 'MIN') {
            $param = 'ASC';
        }else if ($param === 'MAX') {
            $param = 'DESC';
        }
        $query = 
        "SELECT *, $column AS gain FROM $this->table
        ORDER BY gain $param
        LIMIT 1";
        return $this->query($query)[0];
    }
    public function selectrow($param = '',$column = '')
    {
        if ($param === 'MIN') {
            $param = 'ASC';
        }else if ($param === 'MAX') {
            $param = 'DESC';
        }
        $query = "SELECT * FROM $this->table ORDER BY $column $param LIMIT 1";
        return $this->query($query)[0];
    }
}
