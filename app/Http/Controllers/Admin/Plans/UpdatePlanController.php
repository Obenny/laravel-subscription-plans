<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Plan;
use App\User;
use Illuminate\Http\Request;

class UpdatePlanController extends Controller
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
            'type' => 'required|min:5|max:7',
            'price' => 'required|min:1|max:3',
            'duration' => 'required|min:1|max:3',
            'description' => 'required|min:20|max:200',
        ]);

        // store user input
        $user = Plan::find($id);
        $user->name = $request->Input(['name']);
        $user->type = $request->Input(['type']);
        $user->price = $request->Input(['price']);
        $user->duration = $request->Input(['duration']);
        $user->description = $request->Input(['description']);
        $saved = $user->save();

        // check if value is saved
        if($saved)
        {
            session()->put('success', 'Successfully Created!');
            return redirect()->route('admin.plans.list');
        }
        else
        {
            //the else part
            session()->put('error', 'There was an error creating this data!');
            return redirect()->route('admin.plans.list');
        }

    }

}
