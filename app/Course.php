<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['name', 'level_id'];

    public function level() 
    {
        return $this->belongsTo(Level::class);
    }

    public function advantages() 
    {
        return $this->hasMany(Advantage::class);
    }

    public function courseTypes() 
    {
        return $this->hasMany(CourseType::class);
    }

    public function graduationStaffs() 
    {
        return $this->hasMany(GraduationStaff::class);
    }

    public function prices() 
    {
        return $this->hasMany(Price::class);
    }

    public function classRates() 
    {
        return $this->hasMany(ClassRate::class);
    }
}
