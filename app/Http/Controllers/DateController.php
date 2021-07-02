<?php

namespace App\Http\Controllers;

use App\Attendance\DateRepo;
use App\Models\Date;
use Exception;
use Illuminate\Http\Request;

class DateController extends BaseController
{

    public function create()
    {
        
        try {
            $date = new DateRepo();
            $date = $date->create();
            return $this->sendResponse($date, "Date Created Successfully");

        } catch (Exception $th) {

            return $this->sendError($th, [], 400);
        }
    }


    /**
     * @return bool
     */
    public function validator() {
        return $this->sendError("You can only take attendance once a day");
    }
}
