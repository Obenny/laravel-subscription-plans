<?php

namespace App\Http\Controllers\Admin;
use App\Plan;
use App\Subscription;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::count();// counts total users
        $subscriptions = Subscription::count();// counts total subscriptions
        $plans = Plan::count();// counts total plans

        // pass values to view
        return view('admin.home', compact('users','subscriptions', 'plans'));
    }

}
