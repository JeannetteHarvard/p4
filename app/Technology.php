<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    //
    public function partners() {
        return $this->belongsToMany('App\Partner')->withTimestamps();
    }

    public static function getTechnologiesForCheckboxes() {

        $technologies = Technology::orderBy('name','ASC')->get();

        $technologiesForCheckboxes = [];

        foreach($technologies as $technology) {
            $technologiesForCheckboxes[$technology['id']] = $technology->name;
        }

        return $technologiesForCheckboxes;
    }

}
