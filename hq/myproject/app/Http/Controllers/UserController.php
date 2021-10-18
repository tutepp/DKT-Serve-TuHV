<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = Auth::user()->all();
        return view('backend.user-manager',['users'=>$users]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.create-edit-user',['user'=>$user]);
    }
    public function create()
    {
        return view('backend.create-edit-user');
    }
    public function store(Request $request)
    {
        $user =User::create($request->all());
        $user->save();
        return Redirect::back();
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {

    }
}
