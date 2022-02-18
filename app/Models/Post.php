<?php

namespace App\Models;

use App\Http\Controllers\NewsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'users_id',
        'game_id',
        'type_id',
        'title',
        'images',
        'summary',
        'tags',
        'description'

    ];
    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function comment()
    {
        return $this->BelongsTo(Comment::class);
    }
}
