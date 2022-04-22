<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cadastro - Club do Dev</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .gradient {
            background: rgb(7, 7, 223);
            background: linear-gradient(90deg, rgba(7, 7, 223, 1) 0%, rgba(3, 3, 154, 1) 50%, rgba(0, 0, 113, 1) 100%);
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4">

                                <h2 class="fw-bold mb-2 text-uppercase">Cadastro</h2>
                                <p class="text-white-50">Preencha os campos abaixo para se cadastrar!</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-outline form-white mb-4 text-start">
                                        <label for="name" class="col-md-4 col-form-label">{{ __('Nome') }}</label>

                                        <div>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline form-white mb-4 text-start">
                                        <label for="email" class="col-md-4 col-form-label">{{ __('Email ') }}</label>

                                        <div>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline form-white mb-4 text-start">
                                        <label for="password" class="col-md-4 col-form-label">{{ __('Senha') }}</label>

                                        <div>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline form-white mb-4 text-start">
                                        <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirme sua Senha') }}</label>
                                        <div>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <p class="mb-0 text-end">Já possui uma conta? <a href="/login" class="text-white-50 fw-bold">Faça o login!</a>
                                </p>
                            </div>

                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        {{ __('Cadastrar-se') }}
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>