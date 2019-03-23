<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
	use Sluggable;


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
