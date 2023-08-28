<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'Album_type',
        'singer_name',
        'title',
        'slug',
        'genres',
        'songs_number',
        'image'
    ];

    public function albumType()
    {
        return $this->belongsTo(AlbumType::class);
    }
}
