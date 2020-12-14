<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ListUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        $users = User::orderBy('role', 'asc')->paginate(3);//returns db value in descending order with pagination
        return view('admin.users.list_users', compact('users'));
    }

}
