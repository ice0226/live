<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    // public function posts()   
    // {
    //     return $this->hasMany(Post::class);  
    // }
    public function getByArtist(int $limit_count = 5)
    {
         return $this->posts()->with('artist')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
