<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
