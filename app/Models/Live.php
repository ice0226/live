<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    use HasFactory;
    
    // public function posts()   
    // {
    //     return $this->hasMany(Post::class);  
    // }
    public function getByLive(int $limit_count = 5)
    {
         return $this->posts()->with('live')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
