<?php


namespace App\Attendance;


use App\Models\Attendance;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleRepo
{
    /**
     *@return Attendance
     *
     * @param Request
     */
    public function create(Request $request)
    {
        $attendance = People::create([
            "first_name"=> $request->first_name,
            "middle_name"=> $request->middle_name,
            "last_name"=> $request->last_name,
            "gender"=> $request->gender,
            "date_of_birth"=> $request->date_of_birth,
            "phone_number"=> $request->phone_number,
            "email"=> $request->email,
            "residence"=> $request->residence,
            "zone"=> $request->zone
        ]);

        return $attendance;
    }
}
