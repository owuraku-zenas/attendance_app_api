<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPeople() {
        return $this->belongsTo(People::class, 'people_id');
    }

    public function getDate() {
        return $this->belongsTo(Date::class);
    }
}
