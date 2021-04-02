<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;


    public function Category()
    {
       return $this->belongsTo(Category::class,'categories_id');
    }
    public function author()
    {
       return $this->belongsTo(User::class,'users_id');
    }
}
