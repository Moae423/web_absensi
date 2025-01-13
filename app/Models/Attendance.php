<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'start_time',
        'batas_start_time',  
        'end_time',
        'batas_end_time',
        'code',
    ];
        public function presences()
    {
        return $this->hasMany(Presences::class);
    }
}
