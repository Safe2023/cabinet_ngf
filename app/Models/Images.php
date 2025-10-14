<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    protected $guarded=['id'];

   public function realisation()
    {
        return $this->belongsTo(Realisation::class);
    }
}
