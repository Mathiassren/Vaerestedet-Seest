<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Noto Sans"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/123e803ad1.js"
      crossorigin="anonymous"
      defer
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="styles.css/global.css" />
    <script src="/javascript/redirectedForm.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <title>Værestedet Seest</title>
  </head>
  <body>
    <div class="nav-width">
      <section class="nav-contact">
        <div>
          <i class="fa-solid fa-phone"></i>
          <p>75 50 27 05</p>
        </div>
        <div>
          <a href="mailto:Kamseest@hotmail.dk">
            <i class="fa-solid fa-envelope"></i
          ></a>
          <p>Kamseest@hotmail.dk</p>
        </div>
        <div>
          <a
            href="https://www.facebook.com/groups/2195454857443857?hoisted_section_header_type=recently_seen&multi_permalinks=3433158543673476"
            ><i class="fa-brands fa-facebook"></i
          ></a>
        </div>
      </section>
    </div>
    <!--Nav.css-->
    <nav>
      <div class="logo ml16">Værestedet Seest</div>
      <ul class="nav-links">
        <li class="color-F5B64A" onclick="location.href='/'">
          <a href="/">Forside</a>
        </li>
        <li class="color-FE5225" onclick="location.href='/om-os'">
          <a href="/om-os">Om os</a>
        </li>
        <li class="color-6ACB3A" onclick="location.href='/galleri.html'">
          <a href="/gallery.html">Galleri</a>
        </li>
        <li class="color-3AA3CB" onclick="location.href='/priser.html'">
          <a href="/priser.html">Priser</a>
        </li>
        <li class="color-CB3AA9" onclick="location.href='/contact.html'">
          <a href="/contact.html">Kontakt</a>
        </li>
      </ul>
    </nav>
    <!--Hero-->
    <section id="hero">
      <article class="hero-article">
        <h2 class="ml20">Kontakt<br /></h2>
        <button id="HeroBtn-contact" type="button" name="myButton">
          Se mere
        </button>
      </article>
    </section>
    <main>
      <form class="contactform" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full name" />
        <input type="text" name="mail" placeholder="Your e-mail" />
        <input type="text" name="subject" placeholder="Subject" />
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
      </form>
    </main>
    <footer>
      <p>
        Copyright 1994 Værestedet Seest | Tlf. 75 53 60 09 | CVR.nr: 1750 4533|
        EAN: 5790 0025 84053
      </p>
    </footer>
  </body>
</html>
