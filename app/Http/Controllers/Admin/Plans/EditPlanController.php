<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\Http\Request;

class EditPlanController extends Controller
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
        $checker = Plan::where('id', $id)->exists();

        if($checker)
        {
            $plan = Plan::findOrFail($id);// get this employee details

            //returns the page for this route
            session()->put('success', 'Successfully Retrieved!');
            return view('admin.plans.edit_plan', compact('plan'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }

    }

}
