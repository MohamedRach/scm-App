<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo asset('css/home.css')?>" />
    <title>Web Design Mastery | Pathway</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo">EnsiDelivery<span>.</span></div>
      <ul class="nav__links">
        <li class="link"><a href="/">Home</a></li>
        <li class="link"><a href="{{ route('commandes.create') }}">Send a shipment</a></li>
        <li class="link"><a href="#">About Us</a></li>
      </ul>
      <div>
        <button class="btn"><a href="{{ route('login') }}">Login</a></button>
        <button class="btn"><a href="{{ route('userRegister') }}">SignUp</a></button>
      </div>
      
    </nav>
    <header>
      <div class="section__container header__container">
        <div class="header__image">
            <img src="<?php echo asset('Screenshot 2023-05-20 214449.png')?>" alt="header" />
          <img src="<?php echo asset('p2png.png')?>" alt="header" />
        </div>
        <div class="header__content">
          <div>
            <p class="sub__header">Book Now</p>
            <h1>The Smiling 😊<br />agent for travel</h1>
            <p class="section__subtitle">
              Make your travel more enjoyable with us. We are the best travel
              agency and we are providing the best travel services for our
              clients.
            </p>
            <div class="action__btns">
              <button class="btn"><a href="{{ route('commandes.create') }}">Send a shipment</a></button>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section>
        <div class="row">
          <h2 class="section-heading">Our Services</h2>
        </div>
        <div class="row">
          <div class="column">
            <div class="card">
              <div class="icon-wrapper">
                <i class="ri-truck-fill"></i>
              </div>
              <h3>Service Heading</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="icon-wrapper">
                <i class="ri-customer-service-2-fill"></i>
              </div>
              <h3>Service Heading</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="icon-wrapper">
                <i class="ri-price-tag-3-fill"></i>
              </div>
              <h3>Service Heading</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          
        </div>
      </section>

    <section class="trip">
      <div class="section__container trip__container">
        <h2 class="section__title">What our customers say about us</h2>
        <p class="section__subtitle">
          Explore your suitable and dream places around the world. Here you can
          find your right destination.
        </p>
        <div class="trip__grid">
          <div class="trip__card">
            <div class="trip__details">
              <p>Saida Ghassay, Germany</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.2</div>
              <div class="booking__price">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tenetur mollitia voluptatem maxime molestias eum voluptate inventore. Fugit ab non soluta vitae. Delectus officia error iure fugiat beatae atque provident!</p>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <div class="trip__details">
              <p>Saida Ghassay, Argentina and Chile</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.5</div>
              <div class="booking__price">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora ex quo repudiandae culpa itaque eius, quasi natus numquam dolorem consequuntur cupiditate odit eveniet quos molestiae quam perferendis aspernatur eum dolores?</p>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <div class="trip__details">
              <p>hmida rass lmida, Italy</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.7</div>
              <div class="booking__price">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quo accusamus illum veniam ullam porro repellendus quidem eos dolor incidunt suscipit fugit aperiam maxime est perferendis, tenetur illo beatae dolorem.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallary">
      <div class="section__container gallary__container">
        <div class="image__gallary">
          <div class="gallary__col">
            <img src="<?php echo asset('k2.png')?>" alt="gallary" />
          </div>
          <div class="gallary__col">
            <img src="<?php echo asset('k3.png')?>" alt="gallary" />
            
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">
              Our trip gallary that will inspire you
            </h2>
            <p class="section__subtitle">
              Explore your suitable and dream places around the world. Here you
              can find your right destination.
            </p>
            <button class="btn">View All</button>
          </div>
        </div>
      </div>
    </section>

    <section class="subscribe">
      <div class="section__container subscribe__container">
        <div class="subscribe__content">
          <h2 class="section__title">Subscribe to get special prize</h2>
          <p class="section__subtitle">
            Explore your suitable and dream places around the world. Here you
            can find your right destination.
          </p>
        </div>
        <div class="subscribe__form">
          <form>
            <input type="email" placeholder="Your email here" />
            <button class="btn" type="submit">Send</button>
          </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>EnsiDelivery<span>.</span></h3>
          <p>
            Explore your suitable and dream places around the world. Here you
            can find your right destination.
          </p>
        </div>
        <div class="footer__col">
          <h4>Support</h4>
          <p>FAQs</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
          <p>Contact Us</p>
        </div>
        <div class="footer__col">
          <h4>Address</h4>
          <p>
            <span>Address:</span> Ensias, avenue Mohamed Ben Abdellah Rabat, Morocco
          </p>
          <p><span>Email:</span> info@ensidelivery.com</p>
          <p><span>Phone:</span> +212645985689</p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © Ensias IDSIT. All rights reserved.
      </div>
    </footer>
  </body>
</html>