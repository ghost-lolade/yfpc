<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\User;
use App\Mail\yfpcMail;
use App\Mail\yfpcAdminMail;
use Session;
use Mail;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "hello world";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function contactUs(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $messages = $request->message;

        
        // return $message;

        Mail::to($email)->send(new yfpcMail($messages));

        // Mail::to($admins)->send(new yfpcMail());

        Session::flash('words', 'We will get in touch with you');
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = Donor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
          ]);
          $donor_name = $request->first_name;
          $donor_details = $request->all();
          $donor->save();
          $admin = [
              'elishaayantokun@yfpc.ca',
              'somorin@yfpc.ca'
          ];
        Mail::to($request->email)->send(new yfpcMail($donor_name));
        Mail::to($admin)->bcc(['admin@yfpc.ca', 'olanrewaju@yfpc.ca'])->send(new YfpcAdminMail($donor_details));

        Session::flash('thanks', 'We appreciate your concern and we will get back you');
        return redirect('/form');
    }
    public function volunteer(Request $request)
    {
        $volunteer = Volunteer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
          ]);
          $donor_name = $request->first_name;
          $volunteer_details = $request->all();
          $volunteer->save();
          $admin = [
            'elishaayantokun@yfpc.ca',
            'somorin@yfpc.ca'
        ];
        Mail::to($request->email)->send(new yfpcMail($donor_name));
        Mail::to($admin)->bcc(['admin@yfpc.ca', 'olanrewaju@yfpc.ca'])->send(new YfpcAdminMail($volunteer_details));

        Session::flash('thanks', 'We appreciate your concern and we will get back you');
        return redirect('/');
    }

    public function admin() {

        $donors = Donor::OrderBy('created_at', 'DESC')->paginate(5, ['*'], 'donors');
        $volunteers =Volunteer::OrderBy('created_at', 'DESC')->paginate(5, ['*'], 'volunteers');
        
        return view('admin', compact('volunteers', 'donors'));
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
