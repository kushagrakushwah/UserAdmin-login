<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show table of all users
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Other resource methods (create/store/edit/update/destroy) if needed...
    public function create()    { return view('admin.users.create'); }
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'role'     => 'user',
        ]);

        return redirect()->route('admin.users.index');
    }
    public function edit(User $user) { return view('admin.users.edit', compact('user')); }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password
                            ? bcrypt($request->password)
                            : $user->password,
        ]);

        return redirect()->route('admin.users.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
