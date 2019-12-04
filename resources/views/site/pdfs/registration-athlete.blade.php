<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Ficha de Filiação | Atleta </title>
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
</head>
<body>

<header>
    <table class="w-100">
        <tr>
            <td class="text-center">
                <img src="{{url('images/site/logo_pdf.jpeg')}}" width="65px" height="85px" alt=""> <br>
                Liga Paraense de Jiu-Jitsu - LPJJ <br>
                <a href="https://lpjj.com.br/" target="_blank">www.lpjj.com.br</a>
            </td>
        </tr>
        <tr>
            <td class="bg-secondary text-center text-white text-uppercase my-2">
                Ficha de registro de atleta
            </td>
        </tr>
    </table>
</header>

<main>
    <table class="table table-striped table-sm w-100">
        <tbody>
        <tr>
            <th>Nome do Atleta:</th>
            <td class="text-left" colspan="3">{{$athlete->name}}</td>
        </tr>
        <tr>
            <th>Razão Social:</th>
            <td class="text-left" colspan="3">{{$athlete->social_name}}</td>
        </tr>
        <tr>
            <th>CNPJ:</th>
            <td>{{$athlete->academy_document}}</td>
            <th>E-mail:</th>
            <td>{{$athlete->email}}</td>
        </tr>
        <tr>
            <th>Telefone:</th>
            <td colspan="3">{{$athlete->telephone ?? '-'}}</td>
        </tr>
        <tr>
            <th>CEP:</th>
            <td colspan="3">{{$athlete->zipcode}}</td>
        </tr>
        <tr>
            <th>Endereço:</th>
            <td colspan="3">{{$athlete->street}}</td>
        </tr>
        <tr>
            <th>Bairro:</th>
            <td>{{$athlete->neighborhood}}</td>
            <th>Estado:</th>
            <td>{{$athlete->state}}</td>
        </tr>
        <tr>
            <th>Cidade:</th>
            <td colspan="3">{{$athlete->city}}</td>
        </tr>
        <tr>
            <th>Responsável:</th>
            <td>{{$athlete->teacher()->first()->name}}</td>
            <th>Faixa:</th>
            <td>{{$athlete->teacher()->first()->band}}</td>
        </tr>
        <tr>
            <th>CPF:</th>
            <td>{{$athlete->teacher()->first()->document}}</td>
            <th>RG:</th>
            <td>{{$athlete->teacher()->first()->document_secondary}}</td>
        </tr>
        <tr>
            <th>Celular:</th>
            <td>{{$athlete->teacher()->first()->cell}}</td>
            <th>E-mail:</th>
            <td>{{$athlete->teacher()->first()->email}}</td>
        </tr>
        </tbody>
    </table>

    <table class="table table-bordered table-sm w-100">
        <tr>
            <td class="font-italic text-justify" style="font-size: 15px;">
                Solicitamos a Inscrição e Registro de nossa Academia (Associação, Clube, Academia, etc.) de
                Jiu-Jitsu na LPJJ, declarando-nos cientes das condições as quais nos submeteremos,
                obedecendo a <b>Códigos, Estatutos, Provimentos</b> etc., e acatando quaisquer decisões tomadas
                pelas autoridades da LPJJ, baseando-se no seu Estatuto e Regimento, bem como na Legislação
                Brasileira reguladora da matéria. Estamos remetendo os diversos documentos necessários e
                obrigatórios, que constam do anexo, no prazo de 30 dias a contar desta data. Esperando
                com isto, a devida homologação e inscrição como oficialmente filiada à Liga Paraense de Jiu-Jitsu.
                Afirmamos, outrossim, que as declarações acima são verdadeiras. Do contrário temos ciência do
                indeferimento do registro, com as consequências legais.
            </td>
        </tr>
        <tr>
            <th>Assinatura do Responsável:</th>
        </tr>
        <tr>
            <th>Data:</th>
        </tr>
    </table>

    <table class="table table-sm w-100" style="font-size: 14px;">
        <tr class="bg-secondary text-white">
            <th>Documentos necessários para o registro:</th>
        </tr>
        <tr>
            <td> * Ficha de registro de academia devidamente assinada pelo professor responsável</td>
        </tr>
        <tr>
            <td> * Certificado de faixa do professor responsável</td>
        </tr>
    </table>
</main>

<footer class="border-top text-right" style="font-size: 12px; bottom: 0; position: fixed;">
    Gerado em: {{ date('d/m/Y H:i:s') }}
</footer>

</body>
</html>
