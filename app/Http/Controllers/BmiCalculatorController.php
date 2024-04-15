<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiCalculatorController extends Controller
{
    // Display the BMI form
    public function index()
    {
        return view('bmi-calculator.index');
    }
}
