<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'TahunAjaran' => 'required',
            'NamaLengkap' => 'required',
            'JenisKelamin' => 'required',
            'Tempat/TanggalLahir' => 'required',
            'Status' => 'required',
            'AnakKe' => 'required|numeric',
            'JumlahSaudara' => 'required|numeric',
            'Hobi' => 'required',
            'Cita-cita' => 'required',
            'Email' => 'required|email',
            'Alamat' => 'required',
            'Nomor' => 'required',
            'NamaAyah' => 'required',
            'NamaIbu' => 'required',
            'filepembayaran' => 'required|file|max:2048', 
        ]);

        if ($request->hasFile('filepembayaran')) {
            $file = $request->file('filepembayaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName); 
        }

        $registration = new Registration();
        $registration->TahunAjaran = $validatedData['TahunAjaran'];
        $registration->NamaLengkap = $validatedData['NamaLengkap'];
        $registration->JenisKelamin = $validatedData['JenisKelamin'];
        $registration->Tempat_TanggalLahir = $validatedData['Tempat/TanggalLahir'];
        $registration->Status = $validatedData['Status'];
        $registration->AnakKe = $validatedData['AnakKe'];
        $registration->JumlahSaudara = $validatedData['JumlahSaudara'];
        $registration->Hobi = $validatedData['Hobi'];
        $registration->CitaCita = $validatedData['Cita-cita'];
        $registration->Email = $validatedData['Email'];
        $registration->Alamat = $validatedData['Alamat'];
        $registration->Nomor = $validatedData['Nomor'];
        $registration->NamaAyah = $validatedData['NamaAyah'];
        $registration->NamaIbu = $validatedData['NamaIbu'];
        $registration->filepembayaran = $filePath ?? '';

        $registration->save();

        return redirect()->route('registration.confirmation');
    }

    public function showConfirmation() {
        return view('confirmation');
    }
}
