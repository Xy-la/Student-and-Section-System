<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * This allows creating/updating these fields via mass assignment.
     */
    protected $fillable = [
        'sectionName',
        'course',
        'year_level',
    ];

    /**
     * Get the students for the section.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
