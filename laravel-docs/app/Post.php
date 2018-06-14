<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    use SoftDeletes;
    protected $table = "posts";
    protected $dates = ['deleted_at'];
    //protected $primaryKey = "post_id"; //Eloquent will also assume that each table has a primary key column named id. You may define a protected $primaryKey property to override this convention.
    //public $incrementing = false; //If you wish to use a non-incrementing or a non-numeric primary key you must set the public $incrementing property on your model to false.
    //protected $keyType = "string"; //If your primary key is not an integer, you should set the protected $keyType property on your model to string.
    //public $timestamps = false; //By default, Eloquent expects created_at and updated_at columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the  $timestamps property on your model to false
    //protected $dateFormat = 'U'; //If you need to customize the format of your timestamps, set the $dateFormat property on your model. This property determines how date attributes are stored in the database, as well as their format when the model is serialized to an array or JSON

    /*If you need to customize the names of the columns used to store the timestamps, you may set the CREATED_AT and UPDATED_AT constants in your model: */
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';
}
