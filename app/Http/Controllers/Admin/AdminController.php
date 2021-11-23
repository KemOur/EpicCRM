<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */


    public function login()
    {
        return view('admin.login');
    }

    public function home()
    {
        return view('admin.login');
    }

    public function index(Request $request)
    {
        //
        //return view('admin.administration.admins');
        if (Auth::guard('admin')) {
            //$userList = User::get();
            return 'Connected';
            //return view('admin.dashboard');
        } else{
            return 'ERROOR';
        }
        //} elseif ($request->user()->role_id == 2) {
        //return redirect()->route('commercial.dashboard');
        //} elseif ($request->user()->role_id == 1) {
        //  return redirect()->route('admin.dashboard');
        //}R

    }

    public function check(Request $request)
    {
        //
        $request -> validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'email existe déjà !!!!!'
        ]);

        if (Auth::user()) {
            return view('admin.dashboard');
        } else{
            return 'ERROOR';
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        return view('admin.administration.addadmin');

        //admin/administration/addadmin
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.administration.editadmin');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
