<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'picture_name',
        'title',
        'content',
        'picture'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
