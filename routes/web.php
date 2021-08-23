<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// admin routes
require_once __DIR__ . '/admin/auth_routes.php';
require_once __DIR__ . '/admin/dashboard_routes.php';
require_once __DIR__ . '/admin/ajax_routes.php';
require_once __DIR__ . '/admin/system_users_routes.php';


// user routes
require_once __DIR__ . '/user/dashboard_routes.php';
require_once __DIR__ . '/nobel-ui_routes.php';


Route::view('/', 'index');
Auth::routes();

