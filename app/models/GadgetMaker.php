<?php
    use Eloquent as Model;

class GadgetMaker extends Model{


    //Conditions
    //1. scratched_condition
    //2. bad_condition
    //3. normal_condition


    public function gadgets(){
        return $this->hasMany('Gadget');
    }

}