<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    /**
     * Genre
     *
     * @return 
     */
    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    /**
     * Refresh rate cache
     *
     * @return 
     */
    public function refreshRate() {
        $rate = Rate::query()
            ->whereBelongsTo($this)
            ->get(['count(rate) as count', 'sum(rate) / count(rate) as rate']);

        if($rate->count == 0) {
            $rate->rate = 0;
        }

        $this->update([
            'rate_count' => $rate->count,
            'rate' => $rate->rate
        ]);
    }
}
