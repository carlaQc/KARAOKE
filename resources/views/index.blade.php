<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cafe Karaoke Ecos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('inicio/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('inicio/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('inicio/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('inicio/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('inicio/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('inicio/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('inicio/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('inicio/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('inicio/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('inicio/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('inicio/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('inicio/css/style.css')}}">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>CAFE KARAOKE<br><small>ECOS</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>

<!--nav-->
	      <div class="collapse navbar-collapse" id="ftco-nav">

          <ul class="navbar-nav ml-auto">

	          <li class="nav-item active"> 
                    <a href="index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item">  
                    <a href="http://localhost/karaoke/public/inicio/menu.html" class="nav-link">Menu</a></li>
	          <li class="nav-item">
                    <a href="http://localhost/karaoke/public/inicio/services.html" class="nav-link">Servicios</a></li>
	          <li class="nav-item">
                    <a href="http://localhost/karaoke/public/inicio/blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item">
                    <a href="http://localhost/karaoke/public/inicio/about.html" class="nav-link">Sobre Nosotros</a></li>
	          <li class="nav-item">
                    <a href="http://localhost/karaoke/public/inicio/contact.html" class="nav-link">Contacto</a></li>
            <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                        <i class="ni ni-circle-08"></i>
                        <span class="nav-link-inner--text">{{ __('Registro') }}</span>
                    </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text">{{ __('Login') }}</span>
                    </a>
            </li>
	        </ul>

	      </div>
		  </div>
	  </nav>
    <!-- end nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(inicio/images/bg_1.jpg);">
      <div class="slider-item" >
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">¡BienvenidoS!</span>
              <h1 class="mb-4"><font face="Showcard Gothic" >CAFE KARAOKE ECOS</font>  </h1>
              <p class="mb-4 mb-md-5">Ir al karaoke con los amigos,vivirlo como si estuvieras en un concierto de verdad...</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Ordena Ahora</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" >
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Amigable</span>
              <h1 class="mb-4"><font face="Showcard Gothic">COMODIDAD</font></h1>
              <p class="mb-4 mb-md-5">Ambientes amigables, comodos. Listos para cualquier evento.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="inicio/images/bg_0.jpg" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" >
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Atencion</span>
              <h1 class="mb-4"><font face="Showcard Gothic">EFICIENCIA</font></h1>
              <p class="mb-4 mb-md-5">"De una u otra manera todos somos clientes y merecemos un buen servicio"</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="inicio/images/nuevo1.jpg" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      
    </section>

    <section class="ftco-intro" >
    	<div class="container-wrap" >
    		<div class="wrap d-md-flex">
	    		<div class="info" >
	    			<div class="row no-gutters" >
	    				<div class="col-md-4 d-flex ftco-animate" >
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (591) 756 7890</h3>
	    						<p>¡Llamanos ya!</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Aeropuerto de El Alto</h3>
	    						<p>calle 5 por la terminal de "El Alto"</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Abierto de Lunes a Viernes</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter">@ECOS</span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook">Karaoke Ecos</span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram">K.ECOS</span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(inicio/images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">¿QUIENES SOMOS?</h2>

        </div>
        <div>
  				<p> Somos una empresa dedicada al entretenimiento por medio del karaoke, mas de 10.000 canciones hacen parte de nuestro repertorio, ademas que contamos con servicio de restaurante en el cual tenemos variedad de comidas y bebidas para disfrutar en familia y amigos en un ambiente comodo y amigable.

         </p>
  			</div>
        
       
        </div>
    </section>

    

    <section class="ftco-gallery">
    	<div class="container-wrap">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><font face="Showcard Gothic">GALERIA ECOS</font></h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p></p>
          </div>
        </div>
    		<div class="row no-gutters">

					<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(inicio/images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(inicio/images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(inicio/images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(inicio/images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><font face="Showcard Gothic">RECIENTES DEL BLOG</font></h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p>La música es el arte más directo; entra por el oido y va al corazon.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('inicio/images/image_1.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Mayo 07, 2019</a></div>
                  <div><a href="#">Administrador</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Delicioso Desayuno Yungueño</a></h3>
                <p>Para un buen paladar , un buen desayuno yungueño</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('inicio/images/image_2.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Mayo 07, 2019</a></div>
                  <div><a href="#">Administrador</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Musicas Actuales de Seleccion</a></h3>
                <p>Variedad de musicas baladas,cumbias,romanticos,regueton,pop y otros generos</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('inicio/images/image_3.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Mayo 07, 2019</a></div>
                  <div><a href="#">Administrador</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Nuevos Ambientes</a></h3>
                <p>Ambientes comodos y amigables, buen sonido, equipos de calidad</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contactenos</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Nombre">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Apellidos">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Mensaje"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre Nosotros</h2>
              <p>Nuestro objetivo es hacer sentir a nuestros clientes que están en un lugar cómodo donde pueden compartir de un momento agradable con su pareja sus amigos o su familia que visiten nuestro restaurante.
</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recientes del Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(inicio/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">"Delicioso" Desayuno Yungueño </a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Mayo 07, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Administrador</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(inicio/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Mas de 10.000 musicas en nuestro reperto</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Mayo 07, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Administrador</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Servicios</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Musica de Seleccion</a></li>
                <li><a href="#" class="py-2 d-block">Ambientes Privados</a></li>
                <li><a href="#" class="py-2 d-block">Alimentos de Calidad</a></li>
                <li><a href="#" class="py-2 d-block">Variedad de Productos</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿TIENE PREGUNTAS?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">calle 5 por la terminal de "El Alto"</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +591  71223435</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">KaraokeEcos@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>Todos los derechos reservados | Esta plantilla está hecha con<i class="icon-heart" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">CarOsJu</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="inicio/js/jquery.min.js"></script>
  <script src="inicio/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="inicio/js/popper.min.js"></script>
  <script src="inicio/js/bootstrap.min.js"></script>
  <script src="inicio/js/jquery.easing.1.3.js"></script>
  <script src="inicio/js/jquery.waypoints.min.js"></script>
  <script src="inicio/js/jquery.stellar.min.js"></script>
  <script src="inicio/js/owl.carousel.min.js"></script>
  <script src="inicio/js/jquery.magnific-popup.min.js"></script>
  <script src="inicio/js/aos.js"></script>
  <script src="inicio/js/jquery.animateNumber.min.js"></script>
  <script src="inicio/js/bootstrap-datepicker.js"></script>
  <script src="inicio/js/jquery.timepicker.min.js"></script>
  <script src="inicio/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="inicio/js/google-map.js"></script>
  <script src="inicio/js/main.js"></script>
    
  </body>
</html>