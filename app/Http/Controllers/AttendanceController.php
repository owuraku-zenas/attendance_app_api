<?php

namespace App\Http\Controllers;

use Attendance\AttendanceRepo;
use Illuminate\Http\Request;

class AttendanceController extends BaseController
{
    //
    public function store(Request $request)
    {
        $attendance = new AttendanceRepo($request);
    }
}
