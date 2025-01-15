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
        protected $casts = [
        'start_time' => 'datetime',
        'batas_start_time' => 'datetime',
        'end_time' => 'datetime',
        'batas_end_time' => 'datetime',
    ];
        public function generateCode()
    {
        $this->code = substr(md5(time()), 0, 8);
        $this->save();
    }
        public function presences()
    {
        return $this->hasMany(Presences::class);
    }
}
