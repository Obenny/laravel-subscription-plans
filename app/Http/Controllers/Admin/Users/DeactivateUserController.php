<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DeactivateUserController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate($id)
    {
        $checker = $id == 1; // checks if user id is that of default admin

        // dd($checker);
        if($checker)
        {
            session()->put('error', 'You cannot deactivate default admin');
            return redirect()->back();
        }
        else
        {
            // check if already exist and returns true or false
            $checker1 = User::where('id', $id)->exists();
            $deactivate_status = 'inactive';

            if ($checker1) {
                $user = User::findOrFail($id);// get this employee details
                $user->status = $deactivate_status;
                $user->save();

                //returns the page for this route
                session()->put('success', 'Successfully Deactivated!');
                return redirect()->back();
            }
            else
            {
                session()->put('error', 'Data Does Not Exist');
                return redirect()->back();
            }
        }

    }

}
