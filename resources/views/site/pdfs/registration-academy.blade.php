<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Ficha de Filiação | Academia </title>

    <link rel="stylesheet" href="{{url('frontend/assets/css/style-pdf.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
</head>
<body>

<header>
    <table class="w-100">
        <tr>
            <td class="text-center">
                <img src="{{url('images/site/logomarca_lpjj.jpeg')}}" width="60px" height="80px" alt=""> <br>
                Liga Paraense de Jiu-Jitsu - LPJJ <br>
                <a href="https://lpjj.com.br/">www.lpjj.com.br</a>
            </td>
        </tr>
        <tr>
            <td class="bg-secondary text-center text-white text-uppercase my-2">
                Ficha de registro de academia
            </td>
        </tr>
    </table>
</header>

<main>
    <table class="table table-striped table-sm w-100">
        <tbody>
        <tr>
            <th>Nome da Academia:</th>
            <td class="text-left" colspan="3">{{$academy->name}}</td>
        </tr>
        <tr>
            <th>Razão Social:</th>
            <td class="text-left" colspan="3">{{$academy->social_name}}</td>
        </tr>
        <tr>
            <th>CNPJ:</th>
            <td>{{$academy->academy_document}}</td>
            <th>E-mail:</th>
            <td>{{$academy->email}}</td>
        </tr>
        <tr>
            <th>Telefone:</th>
            <td colspan="3">{{$academy->telephone ?? '-'}}</td>
        </tr>
        <tr>
            <th>CEP:</th>
            <td colspan="3">{{$academy->zipcode}}</td>
        </tr>
        <tr>
            <th>Endereço:</th>
            <td colspan="3">{{$academy->street}}</td>
        </tr>
        <tr>
            <th>Bairro:</th>
            <td>{{$academy->neighborhood}}</td>
            <th>Estado:</th>
            <td>{{$academy->state}}</td>
        </tr>
        <tr>
            <th>Cidade:</th>
            <td colspan="3">{{$academy->city}}</td>
        </tr>
        <tr>
            <th>Responsável:</th>
            <td>{{$academy->teacher()->first()->name}}</td>
            <th>Faixa:</th>
            <td>{{$academy->teacher()->first()->band}}</td>
        </tr>
        <tr>
            <th>CPF:</th>
            <td>{{$academy->teacher()->first()->document}}</td>
            <th>RG:</th>
            <td>{{$academy->teacher()->first()->document_secondary}}</td>
        </tr>
        <tr>
            <th>Celular:</th>
            <td>{{$academy->teacher()->first()->cell}}</td>
            <th>E-mail:</th>
            <td>{{$academy->teacher()->first()->email}}</td>
        </tr>
        </tbody>
    </table>

    <table class="table table-bordered table-sm w-100">
        <tr>
            <td class="font-italic text-justify">
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

</body>
</html>
