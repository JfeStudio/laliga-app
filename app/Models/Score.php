<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'played',
        'win',
        'draw',
        'lose',
        'goal_for',
        'goal_against',
        'points',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
