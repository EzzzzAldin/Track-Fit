<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\FAQ;
use App\Models\Partner;
use App\Models\TrainingProgram;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $discover = Discover::first();
        $parteners = Partner::get();
        $trainingPrograms = TrainingProgram::orderBy('priority', 'asc')->get();
        $fqas = FAQ::where('is_active', true)->get();
        return view('index', compact('discover', 'parteners', 'trainingPrograms', 'fqas'));
    }

    public function femaleHome()
    {
        $discover = Discover::first();
        $parteners = Partner::get();
        $trainingPrograms = TrainingProgram::orderBy('priority', 'asc')->get();
        $fqas = FAQ::where('is_active', true)->get();
        return view('female-home', compact('discover', 'parteners', 'trainingPrograms', 'fqas'));
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function freePlan()
    {
        return view('free-plan');
    }

    public function jobSummary()
    {
        return view('job-summary');
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function price()
    {
        return view('price');
    }
}
