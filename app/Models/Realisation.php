<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Realisation extends Model
{
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(Image::class, 'realisation_id');
    }
}
