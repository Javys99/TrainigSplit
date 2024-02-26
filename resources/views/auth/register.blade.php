<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BootZard - Bootstrap Wizard Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{asset('assets/ico/favicon.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('assets/ico/apple-touch-icon-57-precomposed.png')}}">

    </head>

    <body>

		<!-- Top menu -->

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="{{route('register')}}" method="POST" class="f1">
                            @csrf
                    		<h3>Registrate</h3>
                    		<p>Llena el formulario para tener acceso</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Sobre ti</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Cuenta</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-pencil-square-o"></i></div>
                    				<p>Actividades</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Cuentanos sobre ti:</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" for="name">Nombre</label>
                                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Nombre" class="f1-first-name form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="last_name">Apellidos</label>
                                    <input type="text" value="{{ old('last_name') }}" name="last_name" placeholder="Apellidos" class="f1-last-name form-control" id="last_name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="age">Edad</label>
                                    <input type="date" value="{{ old('age') }}" name="age" placeholder="Edad" class="f1-last-name form-control" id="age">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="weight">Peso</label>
                                    <input type="number" value="{{ old('weight') }}" name="weight" placeholder="Peso" class="f1-last-name form-control" id="weight">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="height">Altura</label>
                                    <input type="number" value="{{ old('height') }}" name="height" placeholder="Altura" class="f1-last-name form-control" id="height">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="gender">Genero</label>
                                    <select id="gender" value="{{ old('gender') }}" class="f1-last-name form-control" id="gender" name="gender" required>
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="phone_number">Telefono</label>
                                    <input type="tel" value="{{ old('phone_number') }}" name="phone_number" placeholder="Numero de telefono" class="f1-last-name form-control" id="phone_number">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Crea tu cuenta</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Correo</label>
                                    <input type="text" value="{{ old('email') }}" name="email" placeholder="Correo" class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Contraseña</label>
                                    <input type="password" value="{{ old('password') }}" name="password" placeholder="Contraseña" class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Confirmar Contraseña</label>
                                    <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" 
                                                        class="f1-repeat-password form-control" id="password_confirmation">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Regresar</button>
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Reseña brevemente tus actividades cotidianas como a que hora te levantas, horarios de tus comidas, trabajas y duermes,
                                asi como alimentos que no puedas consumir/disgusten o te provoquen alergia y por ultimo si tienes algun padecimiento, lesion,
                                operacion o enfermedad cronico degenerativa.
                            </h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Sobre ti</label>
                                    <textarea name="activity_details" value="{{ old('activity_details') }}" placeholder="Cuentanos un poco de tu dia a dia" 
                                    	                 class="f1-about-yourself form-control" id="activity_details"></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Regresar</button>
                                    <button type="submit" class="btn btn-submit">Registrar</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
        <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>