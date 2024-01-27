<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                </div>
            </div>
        </div>
    </section>
</body>

</html>