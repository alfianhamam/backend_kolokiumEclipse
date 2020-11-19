<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function storeSchedule(Request $request)
    {
        return Schedule::create($request->all());
    }
}
