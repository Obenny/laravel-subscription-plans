<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        //$plans = Plan::orderBy('id')->get();//returns db value in descending order with pagination
        $plans = Plan::orderBy('id', 'asc')->paginate(3);//returns db value in descending order with pagination
        return view('plans', compact('plans'));
    }

}
