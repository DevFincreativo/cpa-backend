<?php

namespace App\Http\Controllers;

use App\Models\ExchangeOffice;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserProfileController extends Controller
{
    public function index() {
        $users = User::paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function create() {

        return view('admin.users.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function show()
    {
        return view('pages.user-profile');
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'name' => ['required','max:255', 'min:2'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::find($id);

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email') ,
            'password' => $request->get('password'),
        ]);


        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy(String $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
