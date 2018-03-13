<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $dates = [
    	'post_on', 'event_start_date', 'event_end_date', 'registration_start_date', 'registration_end_date'
    ];

    protected $fillable = [
        'event_title', 'event_description', 'uid', 'event_type', 'event_start_date', 
        'event_end_date', 'registration_start_date', 'registration_end_date', 'slug', 'live',
        'post_on', 'niit_center'
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
