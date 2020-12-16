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

    public function updateSchedule($id, Request $request)
    {
        $mahasiswa = Schedule::find($id);
        $mahasiswa->update($request->all());
        return $mahasiswa;
    }

    public function showSchedule($id)
    {
        $mahasiswa = Schedule::find($id);
        return $mahasiswa;
    }
}
