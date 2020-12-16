<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    // mengambil semua mahasiswa
    public function getAll()
    {
        $mahasiswa = Student::all();
        $mahasiswa->load('schedule');
        return $mahasiswa;
    }

    // mengambil mahasiswa by nim
    public function showMahasiswa($nim)
    {
        $mahasiswa = Student::find($nim);
        $mahasiswa->load('schedule');
        return $mahasiswa;
    }

    // menambah data Mahasiswa
    public function storeMahasiswa(Request $request)
    {
        return Student::create($request->all());
    }

    // mengubah data Mahasiswa
    public function updateMahasiswa($nim, Request $request)
    {
        $mahasiswa = Student::find($nim);
        $mahasiswa->update($request->all());
        return $mahasiswa;
    }

    // menghapus data mahasiswa
    public function deleteMahasiswa($nim)
    {
        $mahasiswa = Student::find($nim);
        $mahasiswa->delete();
        return 204;
    }
}
