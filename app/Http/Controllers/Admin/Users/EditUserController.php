<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // check if already exist and returns true or false
        $checker = User::where('id', $id)->exists();

        if($checker)
        {
            $user = User::findOrFail($id);// get this employee details

            //returns the page for this route
            session()->put('success', 'Successfully Retrieved!');
            return view('admin.users.edit_user', compact('user'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }

    }

}
