<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
