<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'lead_id', 'student_id', 'passport_number', 'passport_expiry', 'nationality', 'date_of_birth', 'address', 'emergency_contact_name', 'emergency_contact_phone', 'academic_history', 'visa_info', 'profile'];

    protected $casts = ['academic_history' => 'array', 'visa_info' => 'array', 'profile' => 'array', 'passport_expiry' => 'date', 'date_of_birth' => 'date'];

    public function user() { return $this->belongsTo(User::class); }
    public function lead() { return $this->belongsTo(Lead::class); }
    public function applications() { return $this->hasMany(Application::class); }
    public function documents() { return $this->morphMany(Document::class, 'documentable'); }

}
