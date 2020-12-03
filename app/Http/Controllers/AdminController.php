<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request\AdminRequest;
class AdminController extends Controller
{
    
    public function AdminPage()
    {
    	
    }
    public function LoginPage()
    {
    	return view('Admin.LoginPage');
    }
    public function LoginAdmin(AdminRequest $request)
    {
    	# code...
    }
}
