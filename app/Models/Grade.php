<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function getTotalAttribute()
    {
        return $this->q1 + $this->q2 + $this->q3 + $this->q4 + $this->q5 + $this->q6;
    }

    public function getQuestionsCountAttribute()
    {
        $count = 0;
        for ($i = 1; $i < 7; $i++) {
            $q = 'q' . '' . $i;
            if ($this->$q) {
                $count++;
            }
        }
        return $count;
    }
}
