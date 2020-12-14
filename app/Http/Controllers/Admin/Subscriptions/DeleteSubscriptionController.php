<?php

namespace App\Http\Controllers\Admin\Subscriptions;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;

class DeleteSubscriptionController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // deletes data using id
        $subscription = Subscription::find($id);
        $delete = $subscription->delete(); //delete the client
        if($delete)
        {
            session()->put('success', 'Successfully Deleted!');
            return redirect()->route('admin.subscriptions.list');
        }
        else
        {
            session()->put('error', 'There was an error deleting this data!');
            return redirect()->back();
        }

    }

}
