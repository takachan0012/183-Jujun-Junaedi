<?php

namespace App\Models;

use App\Models\StatusTransaction;
use App\Models\CategoryTransaction;

use App\Models\CustomerTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    function statusTransaction(): BelongsTo
    {
        return $this->belongsTo(StatusTransaction::class, 'status_id');
    }
    function customerTransaction(): BelongsTo
    {
        return $this->belongsTo(CustomerTransaction::class, 'customer_id');
    }
    function categoryTransaction(): BelongsTo
    {
        return $this->belongsTo(CategoryTransaction::class, 'category_id');
    }
}
