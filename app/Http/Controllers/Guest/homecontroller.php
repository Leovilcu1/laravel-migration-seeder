<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;


class homecontroller extends Controller
{
    public function index() {
        $trains = train::all();
            return view('welcome',[
                "trains" => $trains
            ]);
        }
}
