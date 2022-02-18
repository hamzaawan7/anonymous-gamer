<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'post_id',
        'type_id',
        'parent_id',
        'text'
    ];
    public function game()
    {
        return $this->BelongsTo(Game::class);
    }
}
