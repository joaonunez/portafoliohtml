<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" class="imagenventana" type="image/png" href="assets\img\image2.png">
    <meta property="og:title" content="Mi Portafolio">
    <meta property="og:description"
        content="Bienvenid@ a mi portafolio. Aquí encontrarás información sobre mis proyectos y habilidades.">
    <meta property="og:image" content="https://joaodev.cl/assets/img/logo.jpg">
    <meta property="og:url" content="https://joaodev.cl/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mi Portafolio">
    <meta name="twitter:description"
        content="Bienvenid@ a mi portafolio. Aquí encontrarás información sobre mis proyectos y habilidades.">
    <meta name="twitter:image" content="https://joaodev.cl/assets/img/logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <nav class="sidebar">
            <div class="profile">
                <img src="assets/img/logo.jpg" alt="Perfil">
                <h1>Joao Nuñez</h1>
            </div>
            <ul>
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#educacion">Educación</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <button class="hamburger" onclick="toggleSidebar()">☰</button>
        <main class="content">
            <section id="sobre-mi">
                <?php include ('assets/includes/sobreMi.html'); ?>
            </section>
            <section id="proyectos">
                <?php include ('assets/includes/proyectos.html'); ?>
            </section>
            <section id="educacion">
                <?php include ('assets/includes/educacion.html'); ?>
            </section>
            <section id="skills">
                <h2>Habilidades & Conocimientos</h2>
                <div class="contenedor-skills">
                <div class="oneskill">
                        <img src="assets/includes/includes-img/git(1).png" class="imagen-skill" alt="HTML5">
                        <p>Collaboratibe Git</p>
                    </div>
                    <div class="oneskill">
                        <img src="assets/includes/includes-img/python.png" class="imagen-skill" alt="python">
                        <p>Python</p>
                    </div>
                    <div class="oneskill">
                        <img src="assets/includes/includes-img/react.png" class="imagen-skill" alt="HTML5">
                        <p>React</p>
                    </div>
                    <div class="oneskill">
                        <img src="assets/includes/includes-img/nodejs.png" class="imagen-skill" alt="HTML5">
                        <p>Node.js</p>
                    </div>
                    <div class="oneskill">
                        <img src="assets/includes/includes-img/html.png" class="imagen-skill" alt="HTML5">
                        <p>HTML</p>
                    </div>
                    <div class="oneskill">
                        <img src="assets/includes/includes-img/css.png" class="imagen-skill" alt="CSS">
                        <p>CSS</p>
                    </div>
                    <div class="oneskill">
                        <img src="assets/includes/includes-img/js.png" class="imagen-skill" alt="JS">
                        <p>JavaScript</p>
                    </div>
                    <div class="oneskill">
                    <img src="assets/includes/includes-img/php.png" class="imagen-skill" alt="PHP">
                        <p>PHP</p>
                    </div>
                    <div class="oneskill">
                    <img src="assets/includes/includes-img/mysql.png" class="imagen-skill" alt="MYSQL">
                        <p>MySQL</p>
                    </div>
                    <div class="oneskill">
                    <img src="assets/includes/includes-img/sql.png" class="imagen-skill" alt="SQL">
                        <p>Oracle & SQL Server</p>
                    </div>
                    <div class="oneskill">
                    <img src="assets/includes/includes-img/technical-support (1).png" class="imagen-skill" alt="PCTECH">
                        <p>Soporte IT</p>
                    </div>
                    
                </div>


            </section>
            <section id="contacto">
                <?php include ('assets/includes/contacto.html'); ?>
            </section>
            <footer class="mi-footer">
            <p>&copy; 2024 joaodev.cl Todos los derechos reservados.</p>
            </footer>
        </main>
       
    </div>
    <script src="assets/scripts/sidebar.js"></script>
</body>

</html>