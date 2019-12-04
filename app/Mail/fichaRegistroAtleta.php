<?php

namespace App\Mail;

use App\Athlete;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class fichaRegistroAtleta extends Mailable
{
    use Queueable, SerializesModels;

    private $athlete, $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Athlete $athlete, $pdf)
    {
        $this->athlete = $athlete;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("Ficha de Solicitação de Registro de Atleta - LPJJ");
        return $this->view('site.mails.registration-athlete')->with([
            'athlete' => $this->athlete
        ])->attachData($this->pdf, 'ficha_de_filiacao_de_atleta.pdf', [
            'mime' => 'application/pdf',
        ]);
    }
}
