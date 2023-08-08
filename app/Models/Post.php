<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getByLimit(int $limit_count = 10)
    {
        
        return $this::with('artist')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        return $this::with('live')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        
    }
    protected $fillable = [
        'title',
        'body',
        'artist_id',
        'live_id',
        'event_id',
        'user_id'
    ];
    
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    public function live()
    {
        return $this->belongsTo(Live::class);
    }
}
