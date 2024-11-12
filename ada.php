<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ddd</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-AI3wF4oOB2q7kHQPlZlxjv8XeH1kue9O1vG5fHlFn8nQ2mZb0+gt7sDvF6+M/7HfjX6pMEIRJlyFz5qonNwc9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-gray-200">

    <nav id="navbar" class="bg-white w-full py-4 px-8 md:px-16 flex justify-between items-center fixed top-0 z-10">
        <div class="flex items-center">
            <img src="images/img8.png" alt="Logo" class="h-8">
            <span class="text-lg font-bold ml-2 hidden md:block">WG</span>
        </div>
        <div class="hidden md:block">
            <a href="#" class="text-gray-600 hover:text-gray-900 px-4">Inicio</a>
            <a href="#" class="text-gray-600 hover:text-gray-900 px-4">Nosotros</a>
            <a href="#" 
            
            class="text-gray-600 hover:text-gray-900 px-4">Contacto</a>
            <a href="#promotionsSection" class="text-gray-600 hover:text-gray-900 px-4">Promociones</a>
        </div>
        <div class="md:hidden">
            <button id="menuToggle" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>
<!-- MAIN -->
    <header class="bg-gradient-to-r from-gray-700 via-gray-800 to-transparent py-8 h-screen flex justify-center items-center" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('images/img21.jpg'); background-size: cover; background-position: center;">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-white mb-10">Serigrafía WG</h1>
            <h2 class="text-lg text-white mb-4">Una empresa orgullosamente Salvadoreña con más de 35 años de experiencia en el rubro de la Serigrafía.</h2>
            
            <a href="#promotionsSection" class="inline-block bg-gray-800 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:bg-gray-700 hover:scale-105">Ver más</a>
        </div>
    </header>
<!-- PROMOCIONES -->
<section id="promotionsSection" class="my-10 py-20 bg-white border border-white-300 rounded-lg mx-4 md:mx-8 lg:mx-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">Nuestras promociones</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform ">
                    <img src="images/img17.jpeg" alt="Promoción 1" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Camisetas estampadas</h3>
                        <p class="text-gray-600">Disponibles en una variedad de diseños vibrantes y llamativos, estas camisetas son perfectas para expresar tu personalidad 
                            y pasión. Ya sea que busques una declaración audaz o un diseño sutil, nuestras camisetas estampadas ofrecen comodidad y estilo sin compromisos. </p>
                    </div>
                </div>
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform  ">
                    <img src="images/img16.jpg" alt="Promoción 2" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Memorias USB estampadas</h3>
                        <p class="text-gray-600"> USB son perfectas para guardar tus archivos importantes con un toque de creatividad. Desde diseños elegantes hasta
                             divertidos estampados, nuestras unidades USB estampadas te permiten llevar tus datos con estilo dondequiera que vayas.</p>
                    </div>
                </div>
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform  ">
                    <img src="images/img18.jpeg" alt="Promoción 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Pulseras estampadas</h3>
                        <p class="text-gray-600">Desde patrones geométricos hasta motivos florales, nuestras pulseras estampadas son una forma divertida de resaltar tu individualidad
                             y crear un look llamativo.</p>
                    </div>
                </div>
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform  ">
                    <img src="images/img18.jpeg" alt="Promoción 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Pulseras estampadas</h3>
                        <p class="text-gray-600">Desde patrones geométricos hasta motivos florales, nuestras pulseras estampadas son una forma divertida de resaltar tu individualidad
                             y crear un look llamativo.</p>
                    </div>
                </div>
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform  ">
                    <img src="images/img18.jpeg" alt="Promoción 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Pulseras estampadas</h3>
                        <p class="text-gray-600">Desde patrones geométricos hasta motivos florales, nuestras pulseras estampadas son una forma divertida de resaltar tu individualidad
                             y crear un look llamativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section id="promotionsSection" class="my-10 py-20 bg-white border border-white-300 rounded-lg mx-4 md:mx-8 lg:mx-16">
        <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">¿Por qué nosotros?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-8">
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform ">
                     
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Camisetas estampadas</h3>
                        <p class="text-gray-600">Disponibles en una variedad de diseños vibrantes y llamativos, estas camisetas son perfectas para expresar tu personalidad 
                            y pasión. Ya sea que busques una declaración audaz o un diseño sutil, nuestras camisetas estampadas ofrecen comodidad y estilo sin compromisos. </p>
                    </div>
                </div>
                <div class="group bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform  ">
                    
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Memorias USB estampadas</h3>
                        <p class="text-gray-600"> USB son perfectas para guardar tus archivos importantes con un toque de creatividad. Desde diseños elegantes hasta
                             divertidos estampados, nuestras unidades USB estampadas te permiten llevar tus datos con estilo dondequiera que vayas.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
   

<!-- SLIDER -->
    <section class="max-w-7xl mx-auto py-8 bg-yellow">
      <div class="slider-container bg-yellow h-120">
        <div class="slider bg-yellow">
          <div class="slider-item group bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="images/img19.jpeg" alt="Promoción 3" class="w-full h-full object-cover">  
          </div>
          <div class="slider-item group bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="images/img2.jpg" alt="Promoción 3" class="w-full h-full object-cover">
          </div>
          <div class="slider-item group bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="images/img3.jpg" alt="Promoción 3" class="w-full h-full object-cover"> 
          </div>
          <div class="slider-item group bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="images/img4.jpg" alt="Promoción 3" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-4">
        <button onclick="prevSlide()" class="mr-2 px-4 py-2 border border-gray-700 text-gray-700 rounded hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Anterior</button>
        <button onclick="nextSlide()" class="px-4 py-2 border border-gray-700 text-gray-700 rounded hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Siguiente</button>
      </div>
    </section>

    

<!-- NOSOTROS -->

  <section class="bg-gray-900 text-gray-100">
    <div class="container mx-auto py-16 px-4">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Imagen o Video de la Empresa -->
            <div class="md:w-1/2">
                <img src="images/img17.jpeg" alt="Nosotros" class="w-full rounded-lg shadow-lg">
                <!-- Si prefieres usar un video en lugar de una imagen, puedes reemplazar el elemento <img> con un reproductor de video -->
                <!-- <video src="video_nosotros.mp4" controls class="w-full rounded-lg shadow-lg"></video> -->
            </div>
            <!-- Información sobre la Empresa -->
            <div class="md:w-1/2 md:pl-8">
                <h2 class="text-3xl font-semibold mb-4">Conoce más sobre nosotros</h2>
                <p class="text-lg mb-6">Somos una empresa de serigrafía comprometida con la calidad y la creatividad en cada proyecto que realizamos. Desde camisetas personalizadas hasta carteles y productos promocionales, nos esforzamos por ofrecer soluciones de impresión que superen las expectativas de nuestros clientes.</p>
                <p class="text-lg mb-6">Con años de experiencia en la industria, nuestro equipo de expertos en serigrafía está aquí para ayudarte a dar vida a tus ideas. Nos enorgullecemos de nuestro servicio al cliente excepcional y nos esforzamos por establecer relaciones duraderas con cada cliente.</p>
                <a href="/nosotros" class="inline-block bg-gray-700 hover:bg-gray-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">Saber Más</a>
            </div>
        </div>
    </div>
 </section>
 <!-- FOOTER -->
 <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-center items-center">
        <div class="mb-4 md:mb-0 text-center">
            <img src="images/img8.png" alt="Logo" class="h-12">
        </div>
        <div class="mb-4 md:mb-0 text-center">
            <a href="#" class="text-gray-400 hover:text-white mx-4">Enlace 1</a>
            <a href="#" class="text-gray-400 hover:text-white mx-4">Enlace 2</a>
            <a href="#" class="text-gray-400 hover:text-white mx-4">Enlace 3</a>
        </div>
    </div>
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center mt-4">
        <div class="text-center md:text-left">
            <p class="text-gray-400">© 2024 Empresa. Todos los derechos reservados</p>
        </div>
        <div class="text-center md:text-right">
            <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>

<!-- FORMULARIO -->

<div class="max-w-md mx-auto mt-10 bg-white p-5 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-5">Contáctanos</h2>
        <form id="contactForm" action="contacto.php" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-bold mb-2">Mensaje</label>
                <textarea id="message" name="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
            </div>
        </form>
    </div>

  <script src="js/navbar.js"></script>
</body>
</html>
