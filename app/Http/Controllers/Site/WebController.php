<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' | Home',
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
            env('APP_NAME') . ' | Sobre',
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
            env('APP_NAME') . ' | Informações',
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
            env('APP_NAME') . ' | Como Registrar Atleta',
            'A Liga Paraense de Jiu-Jitsu (LPJJ), no ano de 2019, criou um novo processo de Registro on-line para facilitar a inclusão de novos atletas e academias, para realizar seu registro é importante seguir os passos descritos nesta página',
            route('site.atletas.como-registrar-atleta'),
            asset('images/lpjj_oficial.png')
        );
        return view('site.how-register-athlete', [
            'head' => $head
        ]);
    }

    public function registerAthlete()
    {
        return view('site.register-athlete');
    }

    public function howRegisterAcademy()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' | Como Registrar Academia',
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
        return view('site.register-academy');
    }

    public function events()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' | Eventos',
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
            env('APP_NAME') . ' | Nome do Evento',
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
            env('APP_NAME') . ' | Notícias',
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
            env('APP_NAME') . ' | Contato',
            'Entre em contato com a Liga Paraense de Jiu-Jitsu',
            route('site.contato'),
            asset('images/lpjj_oficial.png')
        );

        return view('site.contact', [
            'head' => $head
        ]);
    }
}
