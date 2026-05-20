<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAN-TER GROUP SA</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head> 
<body>
    <header class="hero text-white text-center d-flex align-items-center justify-content-center">
        <div>
            <img src="img/Logo1.png" class="logo" alt="Logo">
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#multimedia">Multimedia</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section id="inicio" class="container py-5">
            <h2 class="text-center mb-4">Quiénes Somos</h2>
            <p class="text-center">
                MAN-TER GROUP es una empresa de manufactura orientada a la fabricación de 
                mangueras, terminales y accesorios para instalaciones hidráulicas, neumáticas 
                y conducción de fluidos en general, que cuenta con más de 10 años de 
                experiencia en el rubro. 
            </p>
        </section>
        <section id="productos" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Nuestros Productos</h2>
                    <div class="autoplay slider">
                        <?php
                            $d = "galeria/";
                            $i = 1;
                            $n = count(glob($d . '*.{jpg,jpeg,png,webp}', GLOB_BRACE));

                            while ($i <= $n) {
                                echo '<div class="px-2">';
                                echo '<img src="' . $d . $i . '.jpg" class="img-fluid rounded shadow" alt="Producto ' . $i . '">';
                                echo '</div>';
                                $i++;
                            }
                        ?>
                    </div>
            </div>        
        </section>
        <section id="multimedia" class="container py-5">
            <h2 class="text-center mb-4">Multimedia</h2>
            <article class="d-flex flex-wrap justify-content-center gap-4">
                <img src="img/mecaniz300x300.gif" class="img-fluid rounded shadow" alt="Proceso de mecanizado">
                <img src="img/robot.gif" class="img-fluid rounded shadow" alt="Robot automatizado">
                <img src="img/brazor.gif" class="img-fluid rounded shadow" alt="Proceso de soldadura">
                <img src="img/traza.gif" class="img-fluid rounded shadow" alt="Trazabilidad">
            </article>
        </section>
        <section id="contacto" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Contacto</h2>
                <form action="https://formspree.io/f/xgoqordg" method="POST" class="contact-form">
                    <div class="mb-3">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="mensaje" rows="5" class="form-control" placeholder="Mensaje" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                </form>
            </div>
        </section>
        <section id="maps" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Ubicación</h2>
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.2739020407453!2d-58.34484666350561!3d-34.6477850453873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a333c23a063a25%3A0xecf03dc3eb2e4fda!2sMAN-TER%20OLEOHIDRAULICA!5e0!3m2!1ses!2sar!4v1622228147242!5m2!1ses!2sar"
                            width="100%"
                            height="350"
                            style="border:0; border-radius: 12px;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="col-lg-6">
                        <div class="h-100 p-4 bg-white rounded shadow d-flex flex-column justify-content-center">
                            <h3 class="mb-4">MAN-TER GROUP S.A.</h3>
                            <p class="mb-3">
                                <strong>Dirección:</strong><br>
                                Núñez 1159, Dock Sud<br>
                                Provincia de Buenos Aires, Argentina
                            </p>
                            <p class="mb-3">
                                <strong>Horario:</strong><br>
                                Lunes a viernes<br>
                                08:00 a 12:00 hs<br>
                                13:00 a 17:00 hs
                            </p>

                            <p class="mb-0">
                                <strong>Teléfono:</strong><br>
                                +54 11 4200-9677
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2026 MAN-TER GROUP SA - Ingeniería en Conducción de Fluidos</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script>
$(document).ready(function () {
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        //variableWidth: true,
        //centerMode: true,
        //fade: true,
        arrows: false,
        dots: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }

            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
</script>