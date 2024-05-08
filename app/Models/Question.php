<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getQuestionsCountAttribute()
    {
        $count = 0;
        for ($i = 1; $i < 7; $i++) {
            $q = 'q' . '' . $i . '_total';
            if ($this->$q) {
                $count++;
            }
        }


        return $count;
    }
}
