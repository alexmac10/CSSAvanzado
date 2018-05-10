<!DOCTYPE html>
<html lang="es">
  <head>
    <title>CSS Desde Cero - Proyecto final</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link href="css/icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>               
    <header class="l-container"><a href="/CSSAvanzado/public/"><img class="logo--main" src="img/logo.png"></a>
    </header>
    <nav class="l-container">
      <ul class="menu--main">
        <li class="menu__item"><a class="menu__link active" href="#home">Inicio</a></li>
        <li class="menu__item"><a class="menu__link" href="#gallery">Galeria</a></li>
        <li class="menu__item"><a class="menu__link" href="#about">Sobre mi</a></li>
        <li class="menu__item"><a class="menu__link" href="#contact">Contacto</a></li>
      </ul>
    </nav>
    <div class="banner-container l-container--full">
      <div class="banner">
        <div class="banner__copy l-container">
          <h2 class="banner__title">Imágenes</h2>
          <p class="banner__subtitle">Que cuentan historias</p>
        </div>
      </div>
    </div>
    <div class="gallery-container l-container l-section">
      <div class="gallery">
        <h2 class="gallery_title section__title">Galería</h2>
        <nav class="gallery_nav">
          <ul class="menu--section">
            <li class="menu__item"><a class="menu__link active" href="#">Todo</a></li>
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
    <div class="about-container l-container--full l-section">
      <div class="about">
        <div class="about__img"><img src="img/camara.png"></div>
        <p class="about__description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis 
          aliquam vestibulum. Pellentesque non arcu fringilla felis vehicula 
          egestas a eget libero. Nam porta, purus dignissim gravida mollis, 
          diam felis pharetra mauris, in porta lorem dui non orci. Praesent 
          venenatis dolor et suscipit consectetur. Mauris facilisis neque sem, 
          laoreet tristique libero ornare in.
        </p>
      </div>
    </div>
    <div class="contact l-container l-section"> 
      <div class="contact">
        <h2 class="contact__title section__title">Contacto</h2>
        <p class="contact__description section__description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis 
          aliquam vestibulum. Pellentesque non arcu fringilla felis vehicula 
          egestas a eget libero. Nam porta, purus dignissim gravida mollis, 
          diam felis pharetra mauris, in porta lorem dui non orci. Praesent 
          venenatis dolor et suscipit consectetur. Mauris facilisis neque sem, 
          laoreet tristique libero ornare in.
        </p>
        <form class="form--contact">
          <input class="form__item" name="name" id="name" placeholder="Nombres">
          <input class="form__item" type="email" name="email" id="email" placeholder="Correo electronico">
          <textarea class="form__item" name="message" id="massage" placeholder="Escribe tu mensajes" rows="8"></textarea>
          <input class="form__item form__submit" type="submit" value="Contratame">
        </form>
      </div>
    </div>
    <footer class="footer l-container--full">
      <div class="l-container--row">
        <div class="l-firts">Alex Palma</div>
        <div class="l-last"> 
          <div class="social-networks"><a class="icon-facebook" href="/CSSAvanzado/public/"></a><a class="icon-twitter" href="/CSSAvanzado/public/"></a><a class="icon-youtube" href="/CSSAvanzado/public/"></a></div>
        </div>
      </div>
    </footer>
  </body>
</html>