<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'payable_type', 'payable_id', 'amount', 'currency', 'gateway', 'transaction_id', 'status'];

    protected $casts = ['amount' => 'decimal:2'];

    public function user() { return $this->belongsTo(User::class); }
    public function payable() { return $this->morphTo(); }

}
