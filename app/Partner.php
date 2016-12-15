<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    public function technologies()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Technology')->withTimestamps();
    }

    public function users()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public static function getPartnersForCheckboxes() {

        $partners = Partner::orderBy('name','ASC')->get();

        $partnersForCheckboxes = [];

        foreach($partners as $partner) {
            $partnersForCheckboxes[$partner['id']] = $partner->name;
        }

        return $partnersForCheckboxes;
    }
}
