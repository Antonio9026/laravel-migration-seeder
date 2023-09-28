<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
class TrainController extends Controller
{
    public function index()
    {
        $trains =  Train::whereDate("data_di_partenza", ">=", "2023-09-27")
        ->OrderBy("data_di_partenza")->get();
        // dd($trains);

        return view('home',["trains"=>$trains]);
    }
}
