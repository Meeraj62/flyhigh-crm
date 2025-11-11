<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['consultant_id', 'student_id', 'start_at', 'end_at', 'status', 'platform', 'meeting_link', 'notes'];

    protected $casts = ['start_at' => 'datetime', 'end_at' => 'datetime'];

    public function consultant() { return $this->belongsTo(User::class, 'consultant_id'); }
    public function student() { return $this->belongsTo(User::class, 'student_id'); }

}
