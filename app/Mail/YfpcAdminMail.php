<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YfpcAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $donor_details;
    public $volunteer_details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($donor_details)
    {
        $this->donor_details = $donor_details;
        // $this->volunteer_details = $volunteer_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Donor/Volunteer')->view('admin_mail');
    }
}
