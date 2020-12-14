<?php

namespace App\Http\Controllers\Admin\Subscriptions;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;

class ShowSubscriptionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // check if already exist and returns true or false
        $checker = Subscription::where('id', $id)->exists();

        if($checker)
        {
            $subscription = Subscription::findOrFail($id);

            //returns the page for this route
            session()->put('success', 'Successfully Retrieved!');
            return view('admin.subscriptions.view_subscription', compact('subscription'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }

    }

}
