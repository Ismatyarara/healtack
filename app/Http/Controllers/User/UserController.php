<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function pengingatObat()
    {
        return view('user.pengingat-obat');
    }
}
