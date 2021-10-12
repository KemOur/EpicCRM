<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $leads = Lead::all();
        /*
        dd($leads);
        die();
        */
        return view('admin.leads', compact('leads'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addlead (Request $request)
    {
        //
        if ($request->user()->is_admin) {
            $user = User::get();
            return view('admin.addlead', ['userlist' => $user]);
        } else {
            return redirect()->route('commercial.dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'date' => 'required|date|max:255',
            'client' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'coast' => 'required|string|max:255',
            'origin' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:10',
            'description' => 'required|string|max:255',

        ]);

         $lead = Lead::create([
            'date' => $request->input('date'),
            'client' => $request->input('client'),
            'company' => $request->input('company'),
            'coast' => $request->input('coast'),
            'origin' => $request->input('origin'),
            'state' => $request->input('state'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'description' => $request->input('description'),

         ]);

        return redirect()->route('admin.leads')->with('success', 'Un lead viens d\'être ajouté avec succés');
        //return redirect(route('admin/users'));
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
