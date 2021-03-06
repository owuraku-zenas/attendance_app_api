<?php

namespace Attendance;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceRepo {

    function create(Request $request)
    {

        $attendance = Attendance::create([
            "people_id" => $request->people_id,
            "date_id" => $request->date_id,
        ]);

        return $attendance;
    }
}
