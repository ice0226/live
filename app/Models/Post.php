<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getPaginateByLimit(int $limit_count = 10)
    {
        
        return $this::orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    protected $fillable = [
        'title',
        'body',
        
    ];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function live()
    {
        return $this->belongsTo(Live::class);
    }
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
