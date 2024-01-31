<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::id()) {
            $role_type = Auth()->user()->role_id;

            switch ($role_type) {
                case 1:
                    return view('manager.dashboard');
                    break;
                case 2:
                    return view('operator.dashboard');
                    break;
                default:
                    return redirect()->back()->with('error', 'You are not authorized to access this page');
                    break;
            }
        }
    }
}
