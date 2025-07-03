<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Image extends Model
{
    protected $fillable = [
        'url',
        'hotel_id',
    ];

    public function hotel(): BelongsTo {
        return $this->belongsTo(Hotel::class);
    }

    public function images(): HasMany {
        return $this->hasMany(Image::class);
    }
}
