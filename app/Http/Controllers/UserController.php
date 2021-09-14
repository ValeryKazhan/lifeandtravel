<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except(['create', 'store']);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => ['required','max:255'],
            'username'=> ['required','min:3','max:255', Rule::unique('users', 'username')],
            'email' => ['required','email','max:255', Rule::unique('users', 'email')],
            'password' => ['required','max:255','min:7']
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');  //session()->flash('success', 'Your account has been created.');

    }

    public function adminEdit(User $user){
        return view('user.edit', [
           'user' => $user
        ]);
    }

    public function adminUsers(){
        return view('admin.users', [
            'users' => User::all()
        ]);
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('/admin/menu')->with('user deleted', "User with id $user->id is deleted");
    }

    public function update(User $user){

        $attributes = \request()->validate([
            'name' => ['required','max:255'],
            'username'=> ['required','min:3','max:255', Rule::unique('users', 'username')->ignore($user->id)],
            'email' => ['required','email','max:255', Rule::unique('users', 'email')->ignore($user->id)]
        ]);
            $user->update($attributes);
            return redirect('/admin/menu')->with('user updated', "User with id $user->id is updated");
    }


}
