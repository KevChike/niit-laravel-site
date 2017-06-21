<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $dates = [
    	'post_on', 'event_date'
    ];

    public function setSlugAttribute( $value )
    {
    	$this->attributes['slug'] = str_slug($value);
    }

    public function getshortContentAttribute()
    {
    	return substr($this->event_description, 0, random_int(300, 350)) . ' ...';
    }
}
