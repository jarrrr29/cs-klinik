<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Action;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $actions = Action::all();

    $menunggu = Registration::with('patient', 'action')
        ->where('status', 'menunggu')
        ->orderBy('schedule_date')
        ->get();

    $diproses = Registration::with('patient', 'action')
        ->where('status', 'diproses')
        ->orderBy('schedule_date')
        ->get();

    $selesai = Registration::with('patient', 'action')
        ->where('status', 'selesai')
        ->orderBy('schedule_date')
        ->get();

    return view('dashboard', compact('actions', 'menunggu', 'diproses', 'selesai'));
}

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required',
            'address' => 'nullable',
            'birth_date' => 'nullable|date',
            'whatsapp_number' => 'required',
            'action_id' => 'required|exists:actions,id',
            'schedule_date' => 'required|date',
            'schedule_time' => 'required',
        ]);

        // Cek apakah jadwal sudah dipakai
        $exists = Registration::where('schedule_date', $request->schedule_date)
            ->where('schedule_time', $request->schedule_time)
            ->exists();

        if ($exists) {
            return back()->withErrors(['jadwal' => 'Jadwal sudah terisi, pilih jam lain.']);
        }

        // Simpan pasien
        $patient = Patient::create([
            'name' => $request->name,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        // Simpan registrasi
        Registration::create([
            'patient_id' => $patient->id,
            'action_id' => $request->action_id,
            'schedule_date' => $request->schedule_date,
            'schedule_time' => $request->schedule_time,
            'status' => 'menunggu',
        ]);

        return redirect()->route('dashboard')->with('success', 'Pasien berhasil didaftarkan');
    }
}
