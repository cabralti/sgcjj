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

    private $academy, $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Academy $academy, $pdf)
    {
        $this->academy = $academy;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("Ficha de Solicitação de Registro de Academia - LPJJ");
        return $this->view('site.mails.registration-academy')->with([
            'academy' => $this->academy
        ])->attachData($this->pdf, 'ficha_de_filiacao_de_academia.pdf', [
            'mime' => 'application/pdf',
        ]);
    }
}
