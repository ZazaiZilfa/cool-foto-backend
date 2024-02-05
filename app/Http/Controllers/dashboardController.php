<?php

namespace App\Http\Controllers;

use App\Models\postModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = DB::table('users')->get();

        // foreach ($users as $user) {
        //     echo $user->name;
        // }

        return view('pages.dashboard');
    }
}
