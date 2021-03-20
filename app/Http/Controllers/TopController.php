<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function top() {
        $user = Auth::user();
        return view('top.top', ['user' => $user]);
    }
}
