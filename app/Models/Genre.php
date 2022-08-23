<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    /**
     * Get musics
     *
     * @return 
     */
    public function musics() {
        return $this->hasMany(Music::class);
    }
}
