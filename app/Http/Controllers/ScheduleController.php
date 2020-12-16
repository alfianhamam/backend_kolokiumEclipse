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

    public function updateSchedule($nim_mahasiswa, Request $request)
    {
        $mahasiswa = Schedule::find($nim_mahasiswa);
        $mahasiswa->update($request->all());
        return $mahasiswa;
    }
}
