<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion de Equipos</title>
        
        <link rel="stylesheet" type="text/css" href="css/welcome.css" media="screen" />
        
        
    </head>
    <body>
      

      
        <!-- ======= Header ======= -->
        <header id="header" class="header-tops">
          <div class="container">

          <h1><img src="img/mi.png" width="8%"> <i>Servicio Departamental De Salud Potosi</i> </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
     
          <!-- Forma #2 -->
						<h2 class="titulo">
							<span class="typed"></span>
						</h2> 
					<div class="titulo" id="cadenas-texto">
						<p> Gestion y Mantenimiento  De: <i class="mascota"><span>EQUIPOS INFORMATICOS</span></i></p>
						<p> Gestion y Mantenimiento  De: <i class="mascota"><span>IMPRESORAS</span> </i></p>
						<p> Gestion y Mantenimiento  De: <i class="mascota"><span>TELEFONOS</span> </i></p>
					</div>
          

          <nav class="nav-menu d-none d-lg-block">
              <ul>
              <li class="active"><a href="#header"><i class="fas fa-home"></i></a></li>
              <li><a href="#contact">Login</a></li>
              <li><a href="#resume">Register</a></li>
              
              </ul>
          </nav><!-- .nav-menu -->

         

          </div>
      </header><!-- End Header -->


   <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
          <div class="modal-content">
              <div class="col-12 user-img">
                  <img src="/img/login.png" th:src="@{/img/user.png}"/>
              </div>
              <form class="col-12" th:action="@{/login}" method="get">
                  <div class="form-group" id="user-group">
                      <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                  </div>
                  <div class="form-group" id="contrasena-group">
                      <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
              </form>
              <div class="col-12 forgot">
                  <a href="#">Recordar contrasena?</a>
              </div>
              <div th:if="${param.error}" class="alert alert-danger" role="alert">
              Invalid username and password.
          </div>
          <div th:if="${param.logout}" class="alert alert-success" role="alert">
              You have been logged out.
          </div>
          </div>
      </div>
  </div>
  </section><!-- End Contact Section -->

   <!-- ======= Contact Section ======= -->
   <section id="resume" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div> 
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->
  <div class="credits">
     <a> <i>Servicio Departamental De Salud</i> </a> POTOSI
  </div>
  <script src="{{ asset('welcome/welcome.js') }}"></script>

    </body>
</html>
