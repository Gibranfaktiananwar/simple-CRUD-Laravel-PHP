<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    function admin()
    {
        return view('superadmin.admin_view');
    }
}
