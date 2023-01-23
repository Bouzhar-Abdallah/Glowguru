<?php


class Photos extends Model
{
    public function productPhoto($id)
    {
        $photos = new Photos();
        $photo = $photos->where(array('id_produit' => $id,'photo_order'=>1),'photo');
        return $photo[0]['photo'];
    }
    public function productPhotos($id)
    {
        $photos = new Photos();
        $photo = $photos->where(array('id_produit' => $id),'photo');
        return $photo;
    }
}
