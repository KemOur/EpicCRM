<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if ($request->user()->is_admin) {
            $userList = User::get();
            return view('admin.dashboard', ['userlist' => $userList]);
        } else {
            return redirect()->route('commercial.dashboard');
        }
    }

    public function users(Request $request)
    {
        if ($request->user()->is_admin) {
            $userList = User::get();
            return view('admin.users', ['userlist' => $userList]);
        } else {
            return redirect()->route('commercial.dashboard');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function adduser(Request $request)
    {
        if ($request->user()->is_admin) {
            $user = User::get();
            return view('admin.adduser', ['userlist' => $user]);
        } else {
            return redirect()->route('commercial.dashboard');
        }
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => "required|min:8|confirmed",
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('dashboard/admin/users')->with('success', 'Utilisateur àjouté avec succés');
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Request $request, $id)
    {
        if ($request->user()->is_admin) {
            $user = User::find($id);
            return view('admin.edituser', compact('user'));
        } else {
            return redirect()->route('commercial.dashboard');
        }
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
        //dd($request);
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,id,' .$id,
            'password' => "required|min:8|confirmed",
        ]);
        //$user = User::find($id);

        if ($request->user()->id == $id || $request->user()->is_admin) {
            $user = User::where('id', $id);
            if ($request->user()->is_admin && $request->is_admin) {
                $is_admin = $request->is_admin == "on" ? 1 : 0;
            } else {
                $is_admin = 0;
            }
            $user->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => $is_admin
            ]);
        }

        if ($request->user()->is_admin) {
            return redirect('dashboard/admin/users')->with('success', 'Les informations on été changé avec succés');
        } else {
            return redirect()->route('commercial.dashboard');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user ->delete();
        return redirect('dashboard/admin/users')->with('success', 'L\'utilisateur à bien été supprimé !');
    }
}
