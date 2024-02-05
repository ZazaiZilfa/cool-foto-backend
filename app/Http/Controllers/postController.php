<?php

namespace App\Http\Controllers;

use App\Models\postModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(postModel $postModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(postModel $postModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, postModel $postModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(postModel $postModel)
    {
        //
    }
}
