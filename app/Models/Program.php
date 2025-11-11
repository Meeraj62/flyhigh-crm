<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['university_id', 'title', 'slug', 'description', 'degree_type', 'duration', 'tuition_fee', 'currency', 'fees_breakdown', 'intake_dates', 'requirements', 'is_featured', 'is_active'];

    protected $casts = ['fees_breakdown' => 'array', 'intake_dates' => 'array', 'tuition_fee' => 'decimal:2', 'is_featured' => 'boolean', 'is_active' => 'boolean'];

    public function university() { return $this->belongsTo(University::class); }
    public function scholarships() { return $this->hasMany(Scholarship::class); }
    public function applications() { return $this->hasMany(Application::class); }

}
