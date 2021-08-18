<?php

namespace App\Http\Controllers\Users\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.user.dashboard');
    }
}