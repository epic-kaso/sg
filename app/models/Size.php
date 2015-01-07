<?php
/**
 * Created by PhpStorm.
 * User: kaso
 * Date: 12/20/2014
 * Time: 1:39 PM
 */
    class Size extends BaseModel{

    public function gadget(){
        return $this->belongsTo('Gadget');
    }
}