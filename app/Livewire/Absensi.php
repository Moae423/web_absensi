<?php

namespace App\Livewire;

use App\Models\Attendance;
use Livewire\Component;

class Absensi extends Component
{
public function render()
{
    // $absensis = Attendance::all();
    $absensis = Attendance::latest()->get();
    // dd($absensis); // Debug data sebelum dikirim ke view
    return view('livewire.absensi', compact('absensis'));
}

}
