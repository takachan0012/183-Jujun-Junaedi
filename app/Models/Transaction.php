<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;
    use HasUuids;


    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'status_id',
        'customer_id',
        'category_id',
        'amount',
        'note',
        'updated_at',
        'created_at',
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
