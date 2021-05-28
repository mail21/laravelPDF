<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disneyplus;
use PDF;

class DisneyplusController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'show_name' => 'required|max:255',
            'series' => 'required|max:255',
            'lead_actor' => 'required|max:255',
        ]);
        Disneyplus::create($validatedData);
   
        return redirect('disneyplus')->with('success', 'Disney Plus Show is successfully saved');
    }

    public function index()
    {
        $shows = Disneyplus::all();

        return view('list', compact('shows'));
    }

    public function downloadPDF($id) {
        $show = Disneyplus::find($id);
        $pdf = PDF::loadView('pdf', compact('show'));
        // $pdfHtml = PDF::loadView('pdf', compact('show'));
        // $pdf = PDF::loadHTML($pdfHtml)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        $pdf->setPaper('a4', 'landscape');
        // return $pdf->download('disney.pdf');
        return $pdf->download('disney.pdf');
    }
}
