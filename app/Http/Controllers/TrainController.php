<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function checkStatus()
    {
        $delay = false;
        $suppressed = false;

        if (!$delay && !$suppressed) {
            return "Il treno è in orario";
        } elseif ($delay) {
            return "Il treno è in ritardo";
        } elseif ($suppressed) {
            return "Il treno è stato soppresso";
        };
    }
}
