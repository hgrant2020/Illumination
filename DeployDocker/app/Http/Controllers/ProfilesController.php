<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findorFail($user);
        //dd(User::findorFail($user));

        return view('home',['user' => $user,]);
    }
}
?>