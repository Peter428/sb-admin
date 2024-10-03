<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
