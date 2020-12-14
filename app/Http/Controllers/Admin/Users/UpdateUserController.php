<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validates fields in form
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|min:7|max:50',
            'password' => 'required|min:3|max:20|confirmed',
            'role' => 'required|min:4|max:6',
        ]);

        $user = User::find($id);
        $user->name = $request->Input(['name']);
        $user->email = $request->Input(['email']);
        $user->password = Hash::make($request->Input(['password']));
        $user->role = $request->Input(['role']);
        $user->save();

        session()->put('success', 'Data Successfully Updated!');
        return redirect()->route('admin.users.list');
    }

}
