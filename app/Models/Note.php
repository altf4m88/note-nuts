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
        $this->belongsTo('user', 'id', 'user_id');
    }
}
