<!DOCTYPE html>
<html lang="es">
  <head>
    <title>CSS Desde Cero - Proyecto final</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>               
    <header><a class="logo--main" href="/PruebasCSS/public/"><img src="img/logo.png"></a>
    </header>
    <nav>
      <ul class="menu--main">
        <li class="menu__item"><a class="menu__link" href="#home">Inicio</a></li>
        <li class="menu__item"><a class="menu__link" href="#gallery">Galeria</a></li>
        <li class="menu__item"><a class="menu__link" href="#about">Sobre mi</a></li>
        <li class="menu__item"><a class="menu__link" href="#contact">Contacto</a></li>
      </ul>
    </nav>
    <div class="banner-container">
      <div class="banner">
        <div class="banner__copy">
          <h2 class="banner__title">Imágenes</h2>
          <p class="banner__subtitle">Que cuentan historias</p>
        </div>
      </div>
    </div>
    <div class="gallery-container">
      <div class="gallery">
        <h2 class="gallery_title section_title"></h2>
        <nav class="gallery_nav">
          <ul class="menu--section">
            <li class="menu__item"><a class="menu__link" href="#">Todo</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Gente</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Lugares</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Naturaleza</a></li>
          </ul>
        </nav>
        <div class="img-gallery">
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/01.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/02.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/03.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/04.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/05.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/06.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/07.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/08.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/09.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/10.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/11.jpg">
          </div>
          <div class="img-gallery__item"><img class="img-gallery__img" src="img/12.jpg">
          </div>
        </div>
      </div>
    </div>
    <div class="about">
      <div class="about">
        <div class="about__img"><img src="img/about.jpg"></div>
        <p class="about_description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis 
          aliquam vestibulum. Pellentesque non arcu fringilla felis vehicula 
          egestas a eget libero. Nam porta, purus dignissim gravida mollis, 
          diam felis pharetra mauris, in porta lorem dui non orci. Praesent 
          venenatis dolor et suscipit consectetur. Mauris facilisis neque sem, 
          laoreet tristique libero ornare in. Etiam volutpat commodo lacus, quis 
          volutpat lectus dictum vitae. Maecenas maximus pretium vehicula. 
          Suspendisse eleifend, augue id fermentum vestibulum, felis nisl blandit 
          nulla, ut convallis elit neque a lacus. Maecenas bibendum scelerisque 
          magna in placerat. Vivamus at ipsum eu quam commodo euismod. Maecenas 
          ornare, ex vel eleifend semper, justo massa tempor leo, sed bibendum 
          nibh lorem sed mauris.     
        </p>
      </div>
    </div>
    <div class="contact"> 
      <div class="contact">
        <h2 class="contact__title section__title">Contacto</h2>
        <p class="contact__description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis 
          aliquam vestibulum. Pellentesque non arcu fringilla felis vehicula 
          egestas a eget libero. Nam porta, purus dignissim gravida mollis, 
          diam felis pharetra mauris, in porta lorem dui non orci. Praesent 
          venenatis dolor et suscipit consectetur. Mauris facilisis neque sem, 
          laoreet tristique libero ornare in.
        </p>
        <form class="form--contact">
          <input name="name" id="name" placeholder="Nombres">
          <input type="email" name="email" id="email" placeholder="Correo electronico">
          <textarea name="message" id="massage"></textarea>
          <input type="submit" value="Contratame">
        </form>
      </div>
    </div>
    <footer>
      <div class="l-firts">Alex Palma</div>
      <div class="l-last"> 
        <div class="social-networks"><a class="icon-facebook" href="/PruebasCSS/public/"></a><a class="icon-twitter" href="/PruebasCSS/public/"></a><a class="icon-youtube" href="/PruebasCSS/public/"></a></div>
      </div>
    </footer>
  </body>
</html>