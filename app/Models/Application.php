<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['student_id', 'program_id', 'application_number', 'status', 'stage', 'applied_date', 'decision_date', 'documents_checklist', 'notes'];

    protected $casts = ['documents_checklist' => 'array', 'applied_date' => 'date', 'decision_date' => 'date'];

    public function student() { return $this->belongsTo(Student::class); }
    public function program() { return $this->belongsTo(Program::class); }

}
