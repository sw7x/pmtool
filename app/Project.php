<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


    //customize the names of the columns used to store the timestamps,
    const CREATED_AT = 'creationDate';
    const UPDATED_AT = 'lastUpdate';


    /* tell Eloquent which table to use for model.  */
    protected $table = 'project';


    /* By default, Eloquent expects created_at and updated_at columns to exist on your tables.
    If you do not wish to have these columns automatically managed by Eloquent, set the
    $timestamps property on your model to false: */
    //public $timestamps = false;
}
