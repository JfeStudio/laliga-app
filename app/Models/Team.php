<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_club',
        'city_club',
    ];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
