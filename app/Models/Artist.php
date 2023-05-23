<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Artist extends Model
{
    use HasFactory;

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }
    public function musics(): BelongsToMany
    {
        return $this->belongsToMany(Music::class);
    }
}
