<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifMail extends Mailable
{
    use Queueable, SerializesModels;
    public $kategori;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kategori, $user)
    {
        $this->kategori = $kategori;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@admin.com')->subject('notification')
        ->view('admin.email')->with([
            'data' => $this->kategori,
            'user' => $this->user
        ]);
    }
}
