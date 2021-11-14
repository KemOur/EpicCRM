<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        //if ($request->user()->role_id == 3) {
        if ($request->user()->role_id == 1) {
            //$userList = User::get();
            return view('admin.dashboard');
        } elseif($request->user()->role_id == 2){
            return view('commercial.dashboard');
        }
        //} elseif ($request->user()->role_id == 2) {
        //return redirect()->route('commercial.dashboard');
        //} elseif ($request->user()->role_id == 1) {
        //  return redirect()->route('admin.dashboard');
        //}
    }
}
