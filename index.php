<?php

$aside_contenido = array(
    '0' => array(
        'link' => 'http://rolandocaldas.com/php/primera-toma-de-contacto-php-paso-a-paso',
        'titulo' => 'Primera toma de contacto',
    ),
    '1' => array(
        'link' => 'http://rolandocaldas.com/php/html5-estructura-basica',
        'titulo' => 'HTML5 estructura b&aacute;sica',
    ),
);
$aside_titulo = 'Art&iacute;culos relacionados';
$descripcion = 'Nuestra primera p&aacute;gina realizada en PHP con HTML5';
$pie = 'Creado por rolandocaldas.com';
$subtitulo = 'Nuestra primera p&aacute;gina PHP';
$titulo = 'Hola mundo!';

function imprimir($aside_contenido, $aside_titulo, $descripcion, $pie, $subtitulo, $titulo) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8" />
            <title><?php echo $titulo; ?></title>
            <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" id="global-css" href="./style.css" type="text/css" media="all" />
        </head>
        <body>
            <header>
                <h1><?php echo $titulo; ?></h1>
                <!-- <nav>El men&uacute; si procediese</nav> --> <!-- Etiqueta comentada al no tener men&uacute; -->
            </header>
            <section>
                <article>
                    <h2><?php echo $subtitulo; ?></h2>
                    <?php echo $descripcion; ?>
                </article>
            </section>
            <aside>
                <h3><?php echo $aside_titulo; ?></h3>
                <ul>
                    <li><a href="<?php echo $aside_contenido['0']['link']; ?>" target="_blank"><?php echo $aside_contenido['0']['titulo']; ?></a></li>
                    <li><a href="<?php echo $aside_contenido['1']['link']; ?>" target="_blank"><?php echo $aside_contenido['1']['titulo']; ?></a></li>
                </ul>
            </aside>
            <footer>
                <?php echo $pie; ?>
            </footer>
        </body>
    </html>
    <?php
}

imprimir($aside_contenido, $aside_titulo, $descripcion, $pie, $subtitulo, $titulo);