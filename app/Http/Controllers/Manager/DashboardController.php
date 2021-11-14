<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->user()->role_id == 3) {
        $userList = User::get();
        return view('manager.dashboard', ['userlist' => $userList]);

         } else {
            return redirect()->route('commercial.dashboard');
        }

    }
}
