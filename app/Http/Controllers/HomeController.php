<?php

namespace App\Http\Controllers;

use App\Notifications\RealTimeNotification;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('welcome');
    }
}
