<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Academy extends Model
{
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
