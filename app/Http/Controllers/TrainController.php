<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function filter(Request $request)
    {
        $date = $request->input('date');
        $trains = Train::whereDate('data_partenza', $date)->get();

        return view('home', compact('trains'));
    }
}
