<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\
 */
class GameRequirement extends Model
{
    use HasFactory;

    protected $table = 'game_req';
    protected $primaryKey = 'id';

    protected $fillable = [


        'users_id',
        'game_id',
        'min_cpu',
        'min_ram',
        'min_gpu',
        'min_dx',
        'min_os',
        'min_sto',
        'min_sound',
        'max_cpu',
        'max_ram',
        'max_gpu',
        'max_dx',
        'max_os',
        'max_sto',
        'max_sound'

    ];
    /**
     * @var mixed
     */
    private $game_id;

    public function game()
    {
        return $this->BelongsTo(Game::class);
    }
}
