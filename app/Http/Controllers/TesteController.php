<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $r)
    {
        $user = User::find(1);
        return [
            'user' => $user,
            'Tasks' => $user->Tasks,
            'categories' => $user->Categories
        ];
    }
}
