<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function setSlugAttribute( $value )
    {
    	$this->attributes['slug'] = str_slug($value);
    }
}
