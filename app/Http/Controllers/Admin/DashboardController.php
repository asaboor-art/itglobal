<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{
    //
    public function index(){
        return view('admin.dashboard',[
            'title' => 'Admin',
        ]);
    }
}
