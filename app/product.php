<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $guarded = [];
    
    public function attributes()
    {

        return $this->hasMany(Attribute::class);

    }

    public function addAttribute($attribute)
    {
      //  dd($attribute);

        $this->attributes()->create($attribute);
        
    }

}


