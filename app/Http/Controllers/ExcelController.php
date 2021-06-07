<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excel;
use App\Exports\ExcelExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {
        $shows = Excel::all();

        return view('list', compact('shows'));
    }

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
        Excel::create($validatedData);

        return redirect('/excel')->with('success', 'Excel file is successfully saved');
    }

    public function export()
    {
        return Excel::download(new ExcelExport, 'excel1.xlsx');
    }
}
