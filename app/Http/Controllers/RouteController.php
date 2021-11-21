<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tools;

class RouteController extends Controller
{    
    public function viewDashboard()
    {
        return view ('dashboard');
    }
    
    public function showUserPage()
    {
        return view('admin.admin-index');
    }

    public function showRolesPermission()
    {
        return view('admin.roles-permission');
    }
}
