<?php


class Categories extends Model
{
    public function categoriename($id)
    {
        $row = $this->where(array('id'=>$id));
        if (empty($row)) {
            return "not set";
        }else
        return $row[0]['nom'];
    }
}
