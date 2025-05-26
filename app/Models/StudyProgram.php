<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    protected $fillable = [
      'name',
      'code',
      'short_name',
      'faculty_id'
    ];

    public function faculty() {
      return $this->belongsTo(Faculty::class);
    }
}
