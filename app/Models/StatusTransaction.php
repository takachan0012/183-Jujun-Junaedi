<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusTransaction extends Model
{
    use HasFactory;

    function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
