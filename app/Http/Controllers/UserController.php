<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Adding New Users
    public function addUser(Request $request)
    {
        $users = User::all();
        if ($request->isMethod('post')) {
            $emailCount = User::where('email', $request->email)->count();

            if ($emailCount >= 1) {
                return redirect()->back()->with('toast_error', 'Email Has Been Already Taken');
            }

            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'address' => 'required',
                'phone' => 'required|Max:15',
                'username' => 'required|unique:users',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ]);

            $data = $request->all();
            $users = new User;
            $users->name = $data['name'];


            $users->image = $request->image->store('users');


            $users->email = strtolower($data['email']);
            $users->username = strtolower($data['username']);
            $users->address = $data['address'];
            $users->phone = $data['phone'];
            $users->password = Hash::make($data['password']);



            $users->save();
            // dd($data);

            return redirect()->route('viewAllUsers');
        }
        return view('users.add');
    }

    // View All Users
    public function viewAllUsers()
    {
        // dd('hello');
        $users = User::all();
        return view('users.show', compact('users'));
    }

    //View User Profile
    public function viewProfile()
    {

        return view('profile.showUser');
    }
    // Edit User
    public function editUser(Request $request, $id)
    {
        $users = User::findOrFail($id);
        // $users_email = $users->email;
        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required',
                // 'email' => 'required',
                'address' => 'required',
                'phone' => 'required|Max:15',
                'username' => 'required',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            // if ($users_email != $request->email) {
            //     $count_email = User::where('email', $request->email)->count();
            //     if ($count_email > 0) {
            //         return redirect()->back()->with('Email Has Been Already Taken');
            //     }
            // }

            $data = $request->all();
            $users->name = $data['name'];


            $users->image = $request->image->store('users');


            // $users->email = strtolower($data['email']);
            $users->username = strtolower($data['username']);
            $users->address = $data['address'];
            $users->phone = $data['phone'];
            $users->password = Hash::make($data['password']);



            $users->save();

            return redirect()->route('viewAllUsers');
        }
        return view('users.edit', compact('users'));
    }

    // Delete User
    public function deleteUser($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $user = auth()->user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required|Max:15',
            'username' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);


        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->image->store('users'),
            'address' => $request->address,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => $request->password

        ]);
        // dd($request->image);

        // $file   = $request->file("image");
        // if ($request->hasfile("image")) {
        //     $file->move("public/storage/users", $file->getClientOriginalName());
        //     $update['image'] = $file->getClientOriginalName();
        //     DB::table('users')->where('id', $id)->update($update);
        // }


        Session()->flash('success', 'User updated successfully');

        return \redirect()->back();
    }
}
