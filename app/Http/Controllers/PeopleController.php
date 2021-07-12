<?php

namespace App\Http\Controllers;

use App\Attendance\PeopleRepo;
use App\Http\Requests\StorePeopleRequest;
use Illuminate\Http\Request;

class PeopleController extends BaseController
{
    //


    public function store(StorePeopleRequest $request, PeopleRepo $peopleRepo) {

        try {
            $people = $peopleRepo->create($request);

            return $this->sendResponse($people, "Person Added Successfully");

        } catch (\Exception $exception) {

            return $this->sendError($exception->getMessage(), [], 500);
        }
    }
}
