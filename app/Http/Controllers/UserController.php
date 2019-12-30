<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Adding New Users
    public function addUser(Request $request)
    {
        // $users = User::all();
        if ($request->isMethod('post')) {
            // $emailCount = User::where('email', $request->email)->count();

            // if ($emailCount >= 1) {
            //     return redirect()->back()->with('toast_error', 'Email Has Been Already Taken');
            // }

            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'address' => 'required',
                'phone' => 'required|Max:15'
            ]);

            $data = $request->all();
            $users = new User;
            $users->name = $data['name'];
            $users->email = strtolower($data['email']);
            $users->address = $data['address'];
            $users->phone = $data['phone'];
            $users->password = $data['password'];

            // $random = str_random(20);
            // if ($request->hasFile('image')) {
            //     $image_tmp = Input::file('image');
            //     if ($image_tmp->isValid()) {
            //         $extension = $image_tmp->getClientOriginalExtension();
            //         $filename = $random . '.' . $extension;
            //         $image_path = 'public/uploads/profile/' . $filename;
            //         // Resize Image Code
            //         Image::make($image_tmp)->save($image_path);
            //         // Store image name in products table
            //         $users->image = $filename;
            //     }
            // }

            $users->save();


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
        $users_email = $users->email;
        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required|Max:15',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($users_email != $request->email) {
                $count_email = User::where('email', $request->email)->count();
                if ($count_email > 0) {
                    return redirect()->back()->with('Email Has Been Already Taken');
                }
            }

            $data = $request->all();
            $users->name = $data['name'];
            $users->email = strtolower($data['email']);
            $users->address = $data['address'];
            $users->phone = $data['phone'];
            $users->password = $data['password'];
            $users->save();


            return redirect()->route('viewAllUsers');
        }
        // return view('users.edit', compact('users', 'users_email'));
        return view('users.edit', compact('users', 'users_email'));
    }

    // Delete User
    public function deleteUser($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }
}
