<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Gestion de Equipos</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/font-awesome/css/all.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/login.css" rel="stylesheet">
        
        
    </head>
    <body class="hold-transition login-page">
    
        <!-- ======= Header ======= -->
        <header id="header" class="header-top">
            <div class="container">
                <h1><img src="img/mi.png" width="8%"> <i>SEDES Potosi</i> </h1>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                            <li ><a class="navbar-brand" href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="#register">Register</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->
    
            <!-- ======= login Section ======= -->
    
            <div class="modal-dialog text-center">
                <div class="col-sm-10 main-section">
                    <div class="modal-content">
                        <div class="col-12 user-img">
                            <img src="/img/register.png" th:src="@{/img/user.png}"/>
                        </div>
                        
                      <form class="col-12" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group" id="user-group">
                                <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group" id="user-group">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                          
                            <div class="form-group" id="contrasena-group"> 
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group" id="contrasena-group">
                                <input id="password-confirm" type="password" placeholder="Re Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt"></i> {{ __('Register') }}
                            </button>
                        </form>  
                    </div>
                </div>
            </div> 
        <!-- End login Section -->
        <div class="credits">
            <a> <i>Servicio Departamental De Salud</i> </a> POTOSI
        </div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/font-awesome/js/all.js"></script>
        <script src="assets/vendor/typed/typed.min.js"></script>
        
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        
    </body>
</html>

