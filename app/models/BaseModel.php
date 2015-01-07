<?php
/**
 * Created by PhpStorm.
 * User: kaso
 * Date: 1/7/2015
 * Time: 2:26 PM
 */
    use Eloquent as Model;

    class BaseModel extends Model {

    protected $guarded = ['id'];
}