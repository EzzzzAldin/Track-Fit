<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DietPlan extends Controller
{
    public function index()
    {
        return view('diet-plan');
    }
}
