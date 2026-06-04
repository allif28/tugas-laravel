<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Matpel;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\GuruExport;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('guru.list', compact('guru'));
    }

    public function create()
    {
        $matpels = Matpel::all();

        return view('guru.form', compact('matpels'));
    }

    public function store(Request $request)
    {
        $guru = Guru::create([
            'nama_guru' => $request->nama_guru,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        if($request->matpels){
            $guru->matpels()->attach($request->matpels);
        }

        return redirect('/guru');
    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        $matpels = Matpel::all();

        return view('guru.edit', compact('guru', 'matpels'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);

        $guru->update([
            'nama_guru' => $request->nama_guru,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        $guru->matpels()->sync($request->matpels);

        return redirect('/guru');
    }

    public function destroy($id)
    {
        $guru = Guru::find($id);

        $guru->delete();

        return redirect('/guru');
    }

    public function exportExcel()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(
            new \App\Exports\GuruExport,
            'data_guru.xlsx'
        );
    }

    public function exportPDF()
    {
        $guru = Guru::all();

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('guru.pdf', compact('guru'));

        return $pdf->download('data_guru.pdf');
    }
}