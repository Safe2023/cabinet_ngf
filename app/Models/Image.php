<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Realisation;

class Image extends Model
{
    protected $guarded = ['id'];

    public function realisation()
    {
        return $this->belongsTo(Realisation::class, 'realisation_id');
    }
}