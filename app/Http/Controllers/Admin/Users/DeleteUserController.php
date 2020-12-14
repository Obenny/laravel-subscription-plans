<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checker = $id == 1; // checks if user id is that of default admin

        // dd($checker);
        if($checker)
        {
            session()->put('error', 'You cannot delete default admin');
            return redirect()->back();
        }
        else
        {
            // deletes data using id
            $user = User::find($id);
            $delete = $user->delete(); //delete the client
            if($delete)
            {
                session()->put('success', 'Successfully Deleted!');
                return redirect()->route('admin.users.list');
            }
            else
            {
                session()->put('error', 'There was an error deleting this data!');
                return redirect()->back();
            }
        }

    }

}
