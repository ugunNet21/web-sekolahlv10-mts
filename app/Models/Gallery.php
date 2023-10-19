<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'uploader_id',
        'uploaded_at',
        'status',
    ];
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function uploader()
    {
        return $this->belongsTo('App\Models\User', 'uploader_id');
    }
}
