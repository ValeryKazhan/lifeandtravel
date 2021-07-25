<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Middleware\MustBeAdmin;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    public function create()
    {
        return view('user.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => ['required','max:255'],
            'username'=> ['required','min:3','max:255'/*, Rule::unique('users', 'username')*/],
            'email' => ['required','email','max:255'/*, Rule::unique('users', 'email')*/],
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
        if(MustBeAdmin::isAdmin()){
            return view('admin.users', [
                'users' => User::all()
            ]);
        } else
            abort(403);
    }

    public function destroy($id){
        if(MustBeAdmin::isAdmin()){


            DB::table('users')->where('id', '=', $id)->delete();
            return redirect('/admin/menu')->with('user deleted', "User with id $id is deleted");
        }


    }

    public function update($id){
        if(MustBeAdmin::isAdmin()){

        $attributes = request()->validate([
            'name' => ['required','max:255'],
            'username'=> ['required','min:3','max:255', Rule::unique('users', 'username')->ignore($id)],
            'email' => ['required','email','max:255', Rule::unique('users', 'email')->ignore($id)]
        ]);
            DB::table('users')->where('id', '=', $id)->update($attributes);
            return redirect('/admin/menu')->with('user updated', "User with id $id is updated");
        }


    }


}
