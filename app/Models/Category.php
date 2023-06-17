<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    //jaga ini saja, sisanya boleh diisi
    //protected $guarded = ['id'];
    protected function posts()
    {
        return $this->hasMany(Post::class);
    }
}
