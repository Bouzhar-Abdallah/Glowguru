<?php


class Categories extends Model
{
    public function categoriename($id)
    {
        $row = $this->where(array('id'=>$id));
        return $row[0]['nom'];
    }
}
