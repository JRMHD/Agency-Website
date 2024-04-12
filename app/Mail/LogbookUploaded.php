<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LogbookUploaded extends Mailable
{
    use Queueable, SerializesModels;

    public $fileName;
    public $userName;
    public $userEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fileName, $userName, $userEmail)
    {
        $this->fileName = $fileName;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Logbook Uploaded')->view('emails.logbook_uploaded');
    }
}
