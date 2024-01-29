<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< Updated upstream
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{asset('images/auth.jpg')}}"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{ route('register') }}" 
                    class="bg-white rounded shadow-5-strong p-5"
                    enctype="multipart/form-data"
                    >
                        
                        @csrf
                        <!-- Email input -->

                        {{-- avatar  --}}
                        <div class="form-outline mb-4">
                            {{-- input file  --}}
                            <input type="file" id="avatar" name="avatar" class="form-control form-control-lg" />
                        <label class="form-label" for="avatar">Avatar</label>

                        <div class="form-outline mb-4">
                            <input type="text" id="name" value="{{ old('name') }}" name="name" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Nombre</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg" value="{{ old('email') }}" name="email"  />
                            <label class="form-label" for="form1Example13">Correo</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Contraseña</label>
                        </div>

                         <!-- Password input -->
                         <div class="form-outline mb-4">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Confirmar contraseña</label>
                        </div>

                        <!-- Submit button -->
                        <div class="divider d-flex align-items-center my-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                        </div>
                    </form>
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    
    <title>Registro</title>
</head>
<style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <p>Registrate</p>

                                        <div class="form-outline mb-2">
                                            
                                            <label class="form-label" for="name">Nombre</label>
                                            <input type="text" id="name" class="form-control"
                                                placeholder="Ingresa tu nombre" name="name" />
                                        </div>
                                        <div class="form-outline mb-2">
                                            
                                            <label class="form-label" for="email">Correo</label>
                                            <input type="email" id="email" class="form-control"
                                                placeholder="Ingresa tu correo" name="email" />
                                        </div>
                                        <div class="form-outline mb-2">
                                           
                                            <label class="form-label" for="password" >Contraseña</label>
                                            <input type="password" id="password" class="form-control" name="password" />
                                        </div>
                                        <div class="form-outline mb-2">
                                            
                                            <label class="form-label" for="password" >Confirmar contraseña</label>
                                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" />
                                        </div>
                                        
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrar</button>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </section>
</body>

<<<<<<< Updated upstream
</html>
=======
</html>
>>>>>>> Stashed changes
