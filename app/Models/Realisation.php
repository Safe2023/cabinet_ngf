<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Realisation extends Model
{
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(Image::class, 'realisation_id');
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;
     protected $guarded=['id'];

     public function images()
    {
        return $this->hasMany(Images::class);
>>>>>>> d75851da67972809a7dfdb66abdaee1966f90223
    }
}
