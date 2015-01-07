<?php
/**
 * Created by PhpStorm.
 * User: kaso
 * Date: 12/20/2014
 * Time: 1:39 PM
 */
    use Eloquent as Model;

class Size extends Model{

    public function gadget(){
        return $this->belongsTo('Gadget');
    }
}