<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['nom',
                            'content',
                            'Date_de_création',   
                            'Date_de_modification',
                            'Référence',
                        ];
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
