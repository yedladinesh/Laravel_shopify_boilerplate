<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AgeController extends Controller
{
    //
    public function dashboard(){
        return Inertia::render("Dashboard");
    }
}
