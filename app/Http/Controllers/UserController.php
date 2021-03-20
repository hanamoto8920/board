<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        $users = User::all();
        return view('user.index', ['users' => $users, 'user' => $user]);
    }
}
