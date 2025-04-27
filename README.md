<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda de desplazamiento</title>
    <link rel="stylesheet" href="animate/styles.css">
    <link rel="stylesheet" href="txt/txt.css ">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <!-- Menú y encabezado -->
    <div class="menu">
            <a href="index.html">Casa</a>
            <a href="services.html">Servicios</a>
            <a href="contact.html">Contacto</a>
    </div>
    <div class="bienvenida">
        <h1>Bienvenido a un nuevo futuro en un nuevo hogar</h1>
    </div>
    <div class="texto-bonito">
        <h1>¡Juntos podemos hacer la diferencia!</h1>
        <p>
            Cada día, miles de personas se ven obligadas a abandonar sus hogares por la violencia, los desastres naturales o la falta de oportunidades. 
            Son madres, padres, niños y jóvenes que, como cualquiera de nosotros, sueñan con un futuro seguro y digno.
        </p>
        <h2>¿Cómo podemos ayudar?</h2>
        <p>
            Estamos impulsando un programa de apoyo para desplazados que brinda acceso a alojamiento temporal, alimentación, atención médica, asesoría legal y oportunidades de empleo. 
            Nuestro objetivo es no solo cubrir sus necesidades básicas, sino también devolverles la esperanza y las herramientas para reconstruir sus vidas.
        </p>
    </div>
    </div>

    <!-- Contenedor principal -->
    <div class="container2">
        <h2 class="lead">
            Si se encuentra en situacion de desplazamiento, por favor complete este formulario y le brindaremos asistencia
        </h2>
        <form action="send_email.php" method="POST"></form>
            <input type="text" class="form-control" placeholder="NOMBRE" required>
            <input type="text" class="form-control" placeholder="EMAIL" required>
            <input type="text" class="form-control" placeholder="EDAD" required>
            <input type="text" class="form-control" placeholder="TELEFONO" required>
            <select>
                <option selected>NUMERO DE PERSONAS</option>
                <option>1</option>
                <option>2</option>
                <option>3 O MAS</option>
            </select>
            <select>
                <option>SEXO</option>
                <option>MASCULINO</option>
                <option>FEMENINO</option>
                <option>OTRO</option>
            </select>
            <textarea type="text" class="form-control" placeholder="SITUACION" rows="4" required></textarea>
            <button type="submit" class=" btn-primary">ENVIAR</button>
        </form>
        </div>
    </div>

    <!-- Pie de página -->
    <div class="container3">  
        <span>NUESTRO NUMERO <a href="#">3138935063</a></span>
        <p>© 2018, All Rights Reserved. Designed by
            <a href="https://www.template.net/editable/websites/html5">Template.net</a>
        </p>
    </div>
</body>
</html>
