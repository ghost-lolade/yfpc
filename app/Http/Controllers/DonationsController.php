<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use Illuminate\Http\Request;
use App\User;
use App\Mail\yfpcMail;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hello world";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        return view('donate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mail::to($email)->send(new yfpcMail());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function show(Donations $donations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function edit(Donations $donations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donations $donations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donations $donations)
    {
        //
    }
}
