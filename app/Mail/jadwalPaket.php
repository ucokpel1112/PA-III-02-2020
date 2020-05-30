<?php

namespace App\Mail;

use App\Kabupaten;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class jadwalPaket extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subject('Jadwal Paket Wisata');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $kabupaten = Kabupaten::all();
        return $this->view('front.paket.jadwalPaket',compact('kabupaten'));
    }
}
