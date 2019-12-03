<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	
	<title>RJD Construction</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo_contact.css">
	<link rel="stylesheet" href="fonts/fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon1.ico" />
	<script src="js/main.js"></script>
</head>


<body>


<!//---- Contenedor Principal ----//>

<div class="contenedor">
	<div class="register">RBQ# 5766-5127-01</div>
<!//----loguera ----//>

	<div class="loguera">

		<div class="logo"><a href="index.html"><img src="img/logo.png" width="" height=""></a></div>
		

	</div>

<!//---- Fin de loguera----//>

<!//---- header----//>

<header>

		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu2"></span></a>
		</div>
 
				<nav>
					<ul>
						<li><a href="index.html"><span class="icon-home3"></span>Home</a></li>
						<li><a href="about.html"><span class="icon-Msomos2"></span>About Us</a></li>
						<li class="submenu">
							<a href="#"><span class="icon-casco"></span>Services</a>
							<ul class="children">
								<li><a href="renovation.html">Renovations<span class="icon-dot-single"></span></a></li>
								<li><a href="turnkey.html">Turnkey Solutions<span class="icon-dot-single"></span></a></li>
								<li><a href="design.html">Design and Architecture<span class="icon-dot-single"></span></a></li>

								<li><a href="proyect.html">Project Management<span class="icon-dot-single"></span></a></li>
						
							</ul>
						</li>
						<li><a href="contact.php"><span class="icon-mail"></span>Contact Us</a></li>
					</ul>
				</nav>


</header>


<!//---- Fin de header ----//>


<!//------Contenedor---------//>

	<div class="contenedor">
    <div class="foto">
    <img src="img/foto_contacto.jpg">
    </div>


<div class="contacto">

    <h1>Contact Us</h1>
         
        <p>Our responsibility is to provide you with the confidence you need to work with SOMOS, for foremost quality, professionalism, design and construction; from concept to delivery. If you want to discuss your project with us, or you have any questions about our services, please contact us. This is the first step to ensure success.</p>

        <div class="direccion">
        
            
            <br><p><strong>ADDRESS: </strong> <br>RJD CONSTRUCTION, INC.</br>
                                              1001 Rue Lenoir, Suite A227<br>
            Montreal, Quebec, H4C 2Z6<br /></p>
            <p><strong>PHONE:</strong> <br>+1 (514) 447-7484<br/></p>
            <p><strong>MAIL:</strong> <br>info@somosconstruction.ca</p></br>
            
           
        </div>
        
</div>


<div class="formulario">
    <form id="form" name="form" method="post" action="enviar.php">
    	<h1>Write us</h1>
    	<input type="text" name="nombre" id="nombre" max-length="20" placeholder="Name" />
    	<input type="text" name="correo" id="correo" max-length="30" placeholder="Mail" />
    	<input type="text" name="telefono" id="telefono" max-length="20" placeholder="Cell phone" />
    	<textarea name="comentario" id="comentario" cols="3" rows="10" placeholder="Message"></textarea>
    	<button type="submit"><span class="icon-mail"></span>Send</button>
    </form>
</div>



<!//--------------- fin de contacto-----------------//>







<!//---- footer ----//>

	<div class="pie">
			
			<div class="logofoot"><span class="icon-Msomos"></span></div>
	

			<div class="iconoredes">	

				<div class="redesa">
					<ul>
        				<div id="icono1"><li><a href="https://instagram.com/groupesomos/" target="_blank" class="icon-instagram"></a></li></div> 
        	      
            			<div id="icono2"><li><a href="https://www.facebook.com/groupesomos" target="_blank" class="icon-facebook"></a></li></div>
            
            			<div id="icono3"><li><a href="https://twitter.com/groupesomos" target="_blank" class="icon-twitter"></a></li></div>
              
        			</ul>
        		</div>

        	</div>


        	<div class="vineta">

    			<div class="textonovic">RJD Construction. All Rights Reserved. 2020 | <a href="https://www.optiwebmarketing.ca/">OptiWeb Marketing</a> </div>

    		</div>

    </div>


<!//---- Fin de footer----//>












<!//---- Jquery Slide----//>


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/jquery.slides.js"></script>
<script>
 
	$(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 6000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 1000
        // [number] restart delay on inactive slideshow
    }
  });
});
 
	</script>


<!//---- Fin de body----//>
</body>