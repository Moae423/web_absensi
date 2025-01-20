<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //
    public function index()
    {
        # code...
        $title = 'Absensi';
        return view('karyawan.attendance', compact('title'));
    }
}
