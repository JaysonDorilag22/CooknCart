<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description'];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}

