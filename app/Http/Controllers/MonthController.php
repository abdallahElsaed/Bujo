<?php

namespace App\Http\Controllers;

use App\Models\month;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class MonthController extends Controller
{
    public function index()
    {
        $months = month::all();

        return view('pages.months' , compact('months'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'jan' => 'required',
        // ]);

        month::create($request->all());
// dd($request->all());
        return redirect()->back();

    }

    // public function show(Request $request)
    // {
    //     $months = month::get();

    //     return view('pages.months', compact('months'));
    // }

}
