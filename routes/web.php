<?php

use Illuminate\Support\Facades\Route;
use Laravel\Prompts\Prompt;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('dashboard');
});
