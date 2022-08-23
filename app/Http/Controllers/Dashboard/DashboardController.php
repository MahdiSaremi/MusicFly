<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    /**
     * Show dashboard
     *
     * @return 
     */
    public function dashboard() {
        return view('dashboard.dashboard');
    }

}
