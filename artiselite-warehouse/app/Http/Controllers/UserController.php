<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        return view('manager.users', compact('users'));
    }
}
