<?php


class Color extends BaseModel{

    public function gadget(){
        return $this->belongsTo('Gadget');
    }
}