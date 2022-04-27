<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameHistory extends Model
{
    use HasFactory;

    protected $table = 'game_history';
    protected $primaryKey = 'history_id';

    protected $fillable = ['total_score', 'played_date', 'user_id'];
}
