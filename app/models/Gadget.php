<?php

    class Gadget extends BaseModel{

    public function sizes(){
        return $this->hasMany('Size');
    }

    public function colors(){
        return $this->hasMany('Color');
    }

    public function base_line_prices(){
        return $this->hasMany('BaseLinePrice');
    }

    static $belongs_to = array(
        array('gadget_maker','class_name'=>'GadgetMaker')
    );

    public function gadget_maker(){
        return $this->belongsTo('GadgetMaker');
    }

    public function destroyEveryData(){
        $this->deleteRelationships(array('colors','sizes','base_line_prices'));
        $this->delete();

    }
    private function deleteRelationships($relationship){
        if(is_array($relationship)){
            foreach($relationship as $r){
                $relations = $this->{$r};
                foreach($relations as $b){
                    $b->delete();
                }
            }
        }else{
            $relations = $this->{$relationship};
            foreach($relations as $b){
                $b->delete();
            }
        }
    }
}