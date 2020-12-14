<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\Http\Request;

class ListPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        $plans = Plan::orderBy('id', 'asc')->paginate(3);//returns db value in descending order with pagination
        return view('admin.plans.list_plans', compact('plans'));
    }

}
