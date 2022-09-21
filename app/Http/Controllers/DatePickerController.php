<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatePickerController extends Controller
{
    public function index()
    {
        return view('datepicker.index');
    }
}
