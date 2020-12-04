<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request\AdminRequest;
use App\Models\User;
use App\Models\Game;
class AdminController extends Controller
{
    
    public function AdminPage()
    {
    	return view('Admin.AdminPage');
    }
    public function LoginPage()
    {
    	return view('Admin.LoginPage');
    }
    public function UsersTable()
    {
        return view('Admin.UsersPage',['users' => User::all()]);
    }
    public function GamesTable()
    {
        return view('Admin.GamesPage',['games' => Game::all()]);
    }
}
