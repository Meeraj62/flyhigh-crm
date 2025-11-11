<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'first_name', 'last_name', 'email', 'phone', 'source', 'status', 'assigned_to', 'country', 'city', 'metadata', 'notes', 'score', 'last_contacted_at', 'next_follow_up_at'];

    protected $casts = ['metadata' => 'array', 'last_contacted_at' => 'datetime', 'next_follow_up_at' => 'datetime'];

    public function user() { return $this->belongsTo(User::class); }
    public function assignedTo() { return $this->belongsTo(User::class, 'assigned_to'); }
    public function notes() { return $this->hasMany(LeadNote::class); }
    public function tags() { return $this->morphToMany(Tag::class, 'taggable'); }

}
