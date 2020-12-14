<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\Http\Request;

class DeletePlanController extends Controller
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
        $plan = Plan::find($id);
        $delete = $plan->delete(); //delete the client
        if($delete)
        {
            session()->put('success', 'Successfully Deleted!');
            return redirect()->route('admin.plans.list');
        }
        else
        {
            session()->put('error', 'There was an error deleting this data!');
            return redirect()->back();
        }
    }

}
