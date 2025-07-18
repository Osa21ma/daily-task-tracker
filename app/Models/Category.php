<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
        protected $guarded = [];

    
     public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
