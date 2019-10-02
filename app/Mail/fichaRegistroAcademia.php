<?php

namespace App\Mail;

use App\Academy;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class fichaRegistroAcademia extends Mailable
{
    use Queueable, SerializesModels;

    private $academy;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Academy $academy)
    {
        $this->academy = $academy;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("Ficha de Solicitação de Registro - LPJJ");
        return $this->view('site.mails.registration-academy')->with([
            'academy' => $this->academy
        ]);
    }
}
