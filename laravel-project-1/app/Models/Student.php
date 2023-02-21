<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'students';
    protected $fillable = [
        'name',
        'gender',
        'nim',
        'class_id',
        'image',
        'slug'
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id', 'id');
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id',
        'extracurricular_id');
    }
}
