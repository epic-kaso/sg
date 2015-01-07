<?php

    use Eloquent as Model;

class Color extends Model{

    public function gadget(){
        return $this->belongsTo('Gadget');
    }
}