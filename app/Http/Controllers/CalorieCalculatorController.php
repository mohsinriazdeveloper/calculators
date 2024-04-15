<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalorieCalculatorController extends Controller
{
    // Display the form
    public function index()
    {
        return view('calorie-calculator.index');
    }
}
