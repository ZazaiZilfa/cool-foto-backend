<?php

namespace App\Http\Controllers;

use App\Models\postModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class userController extends Controller
{
    public function index(): View
    {
        $users = DB::table('users')->get();

        // foreach ($users as $user) {
        //     echo $user->name;
        // }

        return view('pages.users', ['users' => $users]);
    }
}
