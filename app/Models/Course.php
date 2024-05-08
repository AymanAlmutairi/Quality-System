<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function instructor()
    {

        return $this->belongsTo(User::class);
    }

    public function coordinator()
    {

        return $this->belongsTo(User::class, 'Coordinator_id');
    }

    public function contents()
    {

        return $this->hasMany(Content::class);
    }

    public function clo()
    {

        return $this->hasMany(Clo::class);
    }

    public function requests()
    {

        return $this->hasMany(CourseRequest::class);
    }

    public function Knowledge()
    {

        return $this->hasMany(Clo::class)->where('type', 1);
    }

    public function skills()
    {

        return $this->hasMany(Clo::class)->where('type', 2);
    }
    public function values()
    {

        return $this->hasMany(Clo::class)->where('type', 3);
    }


    public function section()
    {

        return $this->belongsTo(Section::class);
    }
    public function students()
    {

        return $this->belongsToMany(User::class);
    }
}
