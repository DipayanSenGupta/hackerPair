<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Event extends Model
{
	use Sluggable;
    use SoftDeletes;

protected $fillable = [
'venue','city','description','published','max_attendees','name'
];

    protected $dates = [
        'created_at',
        'deleted_at',
        'started_at',
        'updated_at'
    ];

		public function Sluggable(){
			return [
				'slug' => [
					'source' => 'name'
				]
			];
		}

    public function getNameAttribute($value){
        $ignore = ['a', 'and', 'at', 'but', 'for', 'in', 'the', 'to', 'with'];
        $name = explode(' ', $value);
        $modifiedName = [];

    foreach($name as $word){

        if(! in_array(strtolower($word),$ignore))
        {
            $modifiedName[] = ucfirst($word);
        }
        else{
            $modifiedName[] = strtolower($word);
        }
    }
    
    return join(' ',$modifiedName);

    }

}
