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
                $this->deleteThisRelationship($relations);
            }
            return true;
        }else{
            $relations = $this->{$relationship};
            return $this->deleteThisRelationship($relations);
        }
    }

        /**
         * @param $relations
         */
        private function deleteThisRelationship($relations)
        {
            if (count($relations) > 0) {
                foreach ($relations as $b) {
                    $b->delete();
                }
            }
            return true;
        }
    }