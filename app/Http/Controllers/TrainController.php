<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    function index(){
        $currentDate = Carbon::now()->format('d-m-Y');
        $trainsToday = Train::where("departure_time", $currentDate)->get();

        return view("index", compact("currentDate", "trainsToday"));
    }
}