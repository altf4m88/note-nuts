<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'note',
        'tags',
        'user_id'
    ];

    protected $casts = [
        'tags' => 'array',
    ];
    
    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
