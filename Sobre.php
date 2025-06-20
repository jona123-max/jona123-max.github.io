<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sobre la IA</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Animate.css para animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="estilos.css" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Contenedor de partículas */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -2;
            top: 0;
            left: 0;
        }

        /* Capa oscura encima de las partículas */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(18, 18, 18, 0.75);
            z-index: -1;
        }
    </style>
</head>

<body>

    <!-- Partículas -->
    <div id="particles-js"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">IA en el Aprendizaje</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="inicioIA.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link active" href="Sobre.php">Sobre la IA</a></li>
            <li class="nav-item"><a class="nav-link" href="aplicaciones.php">Aplicaciones</a></li>
            <li class="nav-item"><a class="nav-link" href="beneficios.php">Beneficios</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Sección con imagen -->
    <section class="position-relative mt-5">
      <img src="https://telesintese.com.br/wp-content/uploads/2023/04/Inteligencia-Artificial-IA-AI-freepik-2023.jpg" 
           alt="Sobre la IA" 
           class="img-fluid w-100 rounded" 
           style="height: 400px; object-fit: cover; filter: brightness(70%)" />
      
      <div class="position-absolute top-50 start-50 translate-middle text-white text-center px-3 animate__animated animate__fadeInDown">
        <h1 class="display-4 fw-bold">¿Qué es la IA?</h1>
        <p class="lead">La inteligencia artificial (IA) es la capacidad de una máquina para imitar la inteligencia humana, como aprender, razonar y resolver problemas.</p>
      </div>
    </section>

    <!-- Contenido -->
    <section class="container my-5 bg-white p-4 rounded shadow-sm animate__animated animate__fadeInUp">
      <h2>Sobre la Inteligencia Artificial</h2>
      <p>La IA está cambiando muchas industrias y especialmente la educación, permitiendo experiencias de aprendizaje más personalizadas y eficientes.</p>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
      <p class="mb-0">&copy; 2025 - La Inteligencia Artificial en el Aprendizaje</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- tsParticles CDN -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>
    <script>
        tsParticles.load("particles-js", {
            fpsLimit: 60,
            particles: {
                number: {
                    value: 60,
                    density: { enable: true, value_area: 800 }
                },
                color: { value: "#00ffff" },
                shape: {
                    type: "circle",
                    stroke: { width: 0, color: "#000000" }
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: { enable: false }
                },
                size: {
                    value: 6,
                    random: {
                        enable: true,
                        minimumValue: 4
                    },
                    anim: { enable: false }
                },
                move: {
                    enable: true,
                    speed: 1,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out"
                }
            },
            interactivity: {
                detectsOn: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                },
                modes: {
                    repulse: { distance: 100 },
                    push: { particles_nb: 4 }
                }
            },
            detectRetina: true
        });
    </script>

</body>
</html>
