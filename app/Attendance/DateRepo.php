<?php

namespace App\Attendance;

use App\Models\Date;
use Illuminate\Http\Request;

class DateRepo {
    /**
     * @return App\Model\Date
     */
    function create()
    {
        $date = Date::create([
            "date" => date('l jS F Y'),
        ]);
        
        return $date;
    }
}