<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GamePost extends Model
{
    protected $guarded = [];

    // Logika pendaran cahaya otomatis berdasarkan rating
    public function getGlowColorAttribute()
    {
        if ($this->rating >= 9) return 'shadow-[0_0_20px_rgba(251,191,36,0.5)] border-amber-400';
        if ($this->rating >= 7) return 'shadow-[0_0_20px_rgba(168,85,247,0.5)] border-purple-500';
        return 'shadow-[0_0_20px_rgba(34,211,238,0.5)] border-cyan-400';
    }
}