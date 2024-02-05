<?php

namespace App\Http\Controllers;

use App\Models\PaymentModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.payment');
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
    public function show(PaymentModel $PaymentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentModel $PaymentModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaymentModel $PaymentModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentModel $PaymentModel)
    {
        //
    }
}
