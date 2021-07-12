<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendanceRequest;
use Attendance\AttendanceRepo;
use Illuminate\Http\Request;

class AttendanceController extends BaseController
{
    //
    public function create(StoreAttendanceRequest $request, AttendanceRepo $attendanceRepo)
    {
        $attendance = $attendanceRepo->create($request);

        return $this->sendResponse($attendance, "Attendance Created Successfully");
    }
}
