<?php

namespace App\Http\Controllers\Admin\Subscriptions;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;

class ActivateSubscriptionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate($id)
    {
        // check if already exist and returns true or false
        $checker = Subscription::where('id', $id)->exists();
        $activate_status = 'active';

        if($checker)
        {
            $user = Subscription::findOrFail($id);// get this employee details
            $user->status = $activate_status;
            $user->save();

            //returns the page for this route
            session()->put('success', 'Successfully Activated!');
            return redirect()->back();
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }
    }

}
