<?php 
$flagEmail = false;
if(isset($_COOKIE['emailSended'])){
    if($_COOKIE['emailSended'] == 'true'){
        $flagEmail = true;
        setcookie('emailSended', 'false', time() - 5, "/"); 

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catapulta</title>
    <script src="https://kit.fontawesome.com/618603446c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/contacto.css">
</head>
<body name="body">
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="../">Inicio</a></li>
                <li><a href="../servicios/">Servicios</a></li>
                <li><a href="../nosotros/">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <section class="bar-top">
            <article>
                <i class="fas fa-bars menu-icon"></i>
            </article>
            <figure>
                <img src="../assets/img/Recurso 10 1.png" alt="">
            </figure>
        </section>
    </header>
    <main>
        <section class="section-1">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6">
                        <article class="container-info-s1">
                            <h2>Un Futuro Brillante<br>Empieza</h2>
                            <p>Escríbenos</p>
                            <article class="social-media">
                                <figure>
                                    <a href="#"><img src="../assets/img/icons/Recurso 3.png" alt=""></a>
                                </figure>
                                <figure>
                                    <a href="#"><img src="../assets/img/icons/Recurso 4.png" alt=""></a>
                                </figure>
                                <figure>
                                    <a href="#"><img src="../assets/img/icons/Recurso 1.png" alt=""></a>
                                </figure>
                                <figure>
                                    <a href="#"><img src="../assets/img/icons/Recurso 2.png" alt=""></a>
                                </figure>
                            </article>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <form class="row form-contacto" action="../assets/modules/send-email.php" method="post">
                            <?php if($flagEmail): ?>
                                <div class="alert-success" style="color: white;">
                                    Email enviado correctamente.!
                                </div>
                            <?php endif; ?>
                            <div class="col-md-6 ">
                                <input type="text" class="place-right form-control" placeholder="Nombre" name="name">
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" class="place-left form-control" placeholder="Apellido" name="lastname">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="place-right form-control" placeholder="Teléfono" name="tel">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="place-left form-control" placeholder="Ciudad" name="city">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col-sm-12">
                                <textarea name="message" class="form-control" placeholder="Mensaje" id="" rows="5"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <label class="cb" for="checkbox"></label>
                                    <label class="letter-cb" for="">Acepto politica de tratamiento de datos <a href="#">(Click para ver)</a></label>
                                </div>
                            </div>
                            <div class="col-sm-12 container-submit">
                                <button type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <article>
            <p>&copy; Catapulta 2020 - Todos los derechos reservados - Términos y condiciones</p>
        </article>
        <article>
            <figure>
                <a href="https://instagram.com/estudio_catapulta" target="_blank"><img src="../assets/img/icons/Recurso 3.png" alt=""></a>
            </figure>
            <figure>
                <a href="https://www.facebook.com/estudiocatapulta1/" target="_blank"><img src="../assets/img/icons/Recurso 4.png" alt=""></a>
            </figure>
            <figure>
                <a href="https://www.youtube.com/channel/UCL6xaWvrT0uwnrhZdmuNrXg" target="_blank"><img src="../assets/img/icons/Recurso 1.png" alt=""></a>
            </figure>
            <figure>
                <a href="https://wa.me/34641650519" target="_blank"><img src="../assets/img/icons/Recurso 2.png" alt=""></a>
            </figure>
        </article>
    </footer>
    <script src="../assets/js/main.js"></script>
</body>
</html>