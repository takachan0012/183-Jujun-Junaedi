<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusTransaction extends Model
{
    use HasFactory;

    function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
