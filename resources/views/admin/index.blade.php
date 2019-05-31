<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LPJJ | Login</title>

    <link href="{{url(mix('backend/assets/css/bootstrap.min.css'))}}" rel="stylesheet">
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{url('backend/assets/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <link href="{{url(mix('backend/assets/css/animate.css'))}}" rel="stylesheet">
    <link href="{{url(mix('backend/assets/css/style.css'))}}" rel="stylesheet">
</head>

<body class="gray-bg">

<div class="middle-box text-center animated fadeInDown" >
    <div class="mt-5">
        <div>
            <img class="logo-name" width="130" height="180" src="{{ asset('backend/assets/img/liga_oficial.png') }}"
                 alt="">
        </div>
        <form name="formLogin" class="m-t" role="form" action="{{ route('admin.login.do') }}" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="E-mail" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Senha" required="">
            </div>

            <button type="submit" class="btn btn-danger btn-lg block full-width m-b">Login</button>

            <a href="#" class="text-dark">
                <span>Esqueceu a senha?</span>
            </a>
        </form>
        <p class="m-t">
            <span> LPJJ &copy; 2019</span>
        </p>
    </div>
</div>

<!-- js -->
<script src="{{ url(mix('backend/assets/js/jquery-3.1.1.js')) }}"></script>
<script src="{{ url(mix('backend/assets/js/popper.js')) }}"></script>
<script src="{{ url(mix('backend/assets/js/bootstrap.js')) }}"></script>

<!-- Toastr script -->
<script src="{{ url('backend/assets/js/plugins/toastr/toastr.min.js') }}"></script>

<script src="{{ url(mix('backend/assets/js/login.js')) }}"></script>

</body>

</html>
