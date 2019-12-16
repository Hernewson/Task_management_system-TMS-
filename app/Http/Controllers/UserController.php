<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Adding New Users
    public function addUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $emailCount = User::where('email', $request->email)->count();

            if ($emailCount >= 1) {
                return redirect()->back()->with('toast_error', 'Email Has Been Already Taken Solti');
            }


            $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required|Integer',
            ]);

            $data = $request->all();
            $user = new User;
            $user->name = $data['name'];
            $user->email = strtolower($data['email']);
            $user->address = $data['address'];
            $user->phone = $data['phone'];
            $user->password = $data['password'];
            $user->save();
            return redirect()->route('viewAllUsers')->with('flash_message', 'New User Has Been Added');
        }
        return view('users.add');
    }

    public function viewAllUsers(){
        $user=User::latest()->get();
        return view('users.show',compact('user'));
    }
}
