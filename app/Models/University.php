<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'description', 'country', 'state', 'city', 'website', 'logo', 'gallery', 'ranking', 'is_featured', 'is_active', 'metadata'];

    protected $casts = ['gallery' => 'array', 'metadata' => 'array', 'is_featured' => 'boolean', 'is_active' => 'boolean'];

    public function programs() { return $this->hasMany(Program::class); }

}
