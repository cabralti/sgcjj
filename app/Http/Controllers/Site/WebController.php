<?php

namespace App\Http\Controllers\Site;

use App\Academy;
use App\Support\Seo;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    private $seo;

    public function __construct()
    {
        $this->seo = new Seo();
    }

    public function home()
    {
        $head = $this->seo->render(
            ' Home | ' . env('APP_NAME'),
            'Somos a maior Liga de Jiu-Jitsu do Norte do Brasil',
            url('/'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.home', [
            'head' => $head
        ]);
    }

    public function about()
    {
        $head = $this->seo->render(
            'Sobre | ' . env('APP_NAME'),
            'Somos a Liga Paraense de Jiu-Jitsu, nosso objetivo é adotar uma abordagem diferente para alcançar e ajudar as pessoas ao longo da sua jornada por meio do jiu-jitsu',
            route('site.a-liga.sobre'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.about', [
            'head' => $head
        ]);
    }

    public function information()
    {
        $head = $this->seo->render(
            'Informações | ' . env('APP_NAME'),
            'Informações oficiais que a Liga Paraense de Jiu-Jitsu segue',
            route('site.a-liga.informacoes'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.information', [
            'head' => $head
        ]);
    }

    public function howRegisterAthlete()
    {
        $head = $this->seo->render(
            'Como Registrar Atleta | ' . env('APP_NAME'),
            'A Liga Paraense de Jiu-Jitsu (LPJJ), no ano de 2019, criou um novo processo de Registro on-line para facilitar a inclusão de novos atletas e academias, para realizar seu registro é importante seguir os passos descritos nesta página',
            route('site.atletas.como-registrar-atleta'),
            asset('images/lpjj_oficial.png')
        );

        $academies = Academy::select()->get();

        return view('site.how-register-athlete', [
            'head' => $head,
            'academies' => $academies
        ]);
    }

    public function registerAthlete()
    {
        $head = $this->seo->render(
            'Registrar Atleta | ' . env('APP_NAME'),
            'Realize seu registro de filiação à Liga Paraense de Jiu-Jitsu (LPJJ) preenchendo o formulário com os dados solicitados',
            route('site.atletas.registrar-atleta'),
            asset('images/lpjj_oficial.png')
        );

        $academies = Academy::where('status', '1')->get();
        return view('site.register-athlete', [
            'head' => $head,
            'academies' => $academies
        ]);
    }

    public function howRegisterAcademy()
    {
        $head = $this->seo->render(
            'Como Registrar Academia | ' . env('APP_NAME'),
            'A Liga Paraense de Jiu-Jitsu (LPJJ), no ano de 2019, criou um novo processo de Registro on-line para facilitar a inclusão de novos atletas e academias, para registrar sua academia é importante seguir os passos descritos nesta página',
            route('site.academias.como-registrar-academia'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.how-register-academy', [
            'head' => $head
        ]);
    }

    public function registerAcademy()
    {
        $head = $this->seo->render(
            'Registrar Academia | ' . env('APP_NAME'),
            'Realize seu registro de filiação à Liga Paraense de Jiu-Jitsu (LPJJ) preenchendo o formulário com os dados solicitados',
            route('site.academias.registrar-academia'),
            asset('images/lpjj_oficial.png')
        );

        $teachers = Teacher::where('status', '1')->get();

        return view('site.register-academy', [
            'head' => $head,
            'teachers' => $teachers
        ]);
    }

    public function events()
    {
        $head = $this->seo->render(
            'Eventos | ' . env('APP_NAME'),
            'Confira todos os eventos organizados pela Liga Paranse de Jiu-Jitsu, a LPJJ organiza eventos como campeonatos, seminários, cursos e outros',
            route('site.eventos'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.events', [
            'head' => $head
        ]);
    }

    public function eventsDetails()
    {
        $head = $this->seo->render(
            'Nome do Evento | ' . env('APP_NAME'),
            'Confira as informações do evento Nome do Evento, como data, local, inscrições, checagem, dentre outras',
            route('site.eventos.detalhes', ['uri' => '1']),
            asset('images/lpjj_oficial.png')
        );

        return view('site.events-details', [
            'head' => $head
        ]);
    }

    public function news()
    {
        $head = $this->seo->render(
            'Notícias | ' . env('APP_NAME'),
            'Fique por dentro das últimas notícias ligadas ao jiu-jitsu e a Liga Paraense de Jiu-Jitsu',
            route('site.noticias'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.news', [
            'head' => $head
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            'Contato | ' . env('APP_NAME'),
            'Entre em contato com a Liga Paraense de Jiu-Jitsu',
            route('site.contato'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.contact', [
            'head' => $head
        ]);
    }
}
