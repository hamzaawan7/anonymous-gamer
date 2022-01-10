<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'id';

    protected $fillable = [
        'post_id',
        'rating',
        'comment',
        'name',
        'email',

    ];
}
