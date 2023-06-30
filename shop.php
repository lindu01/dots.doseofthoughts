<!DOCTYPE html>
<html>
<head>
    <title>Dots - Shop</title>

    <?php include('heading.php'); ?>
    <link href="assets/css/shop.css" rel="stylesheet">

  </head>


  <body>

    <header id="header" class="fixed-top header-trasparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="container">
      <a class="navbar-brand" href="#index.php">
        <img src="assets/img/testimonials/orizz_white.png" alt="Dots-logo" width="100" height="auto">
      </a>
    </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto">Home</a></li>
          <li><a href="blog.php" class="nav-link" target="_blank">blog</a></li>
          <li><a href="shop.php" class="nav-link scrollto">shop</a></li>
          <li><a href="poadcast.php" class="nav-link scrollto">poadcast</a></li>
          <li><a href="about.php" class="nav-link scrollto">about</a></li>
          <li><a href="profile.php" class="nav-link scrollto"><i class="bi bi-person-circle"></i></a></li>     
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
<!------------HERO SECTION--------------->

<section id="hero" class="d-flex justify-content-center align-items-center">
      <div id="heroCarousel" class="container carousel carousel-fade" 
        data-bs-ride="carousel" data-bs-interval="5000">
        <!-- slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Dots<span> Shop</span></h2>
            <p class="animate__animated animate__fadeInUp">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
            </p>
            <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp">Read more</a>
          </div>
        </div>

        <!-- slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Graphics</h2>
            <p class="animate__animated animate__fadeInUp">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
            </p>
            <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp">Read more</a>
          </div>
        </div>

        <!-- slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Dots streetwear</h2>
            <p class="animate__animated animate__fadeInUp">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
            </p>
            <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp">Read more</a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>
      </div> 
    </section>
    <!-- HERO END -->

<!---------------------------------------------------
--------------------MAIN CONTENT--------------------
----------------------------------------------------->

<div class="cursor"></div> 

<main id="main">

<section id="shop" class="shop"> 
  <div class="container" data-aos="fade-up">

    <div class="titles">
      <h2>Shop</h2>
      <p>dai un'occhiata ai nostri prodotti!</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-80">
          <img src="assets/img/shop/borraccia.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Borraccia</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <small class="text-body-secondary">$20</small>
          </div>
          <div class="card-footer">
            
            <a href="" target="_self" class="button">buy now</a> 
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-80">
          <img src="assets/img/shop/felpa.jpg" class="card-img-top" alt="felpa">
          <div class="card-body">
            <h5 class="card-title">Hoodie</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-body-secondary">$20</small>
          </div>
          <div class="card-footer">
            <a href="" target="_self" class="button">buy now</a> 
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-80">
          <img src="assets/img/shop/totebag.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tote Bag</h5>
            <p class="card-text">
              Questa Tote Bag è realizzata in materiali riciclati e da giovani artisti emergenti!
            </p>
            <small class="text-body-secondary">$20</small>
          </div>
          <div class="card-footer">
            <a href="" target="_self" class="button">buy now</a> 
          </div>
        </div>
      </div>
      
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-80">
          <img src="assets/img/shop/grigiafelpa.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Felpa Grigia</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <small class="text-body-secondary">35$</small>
          </div>
          <div class="card-footer">
            <a href="" target="_self" class="button">buy now</a> 
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-80">
          <img src="assets/img/shop/poster.png" class="card-img-top" alt="felpa">
          <div class="card-body">
            <h5 class="card-title">Posters</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-body-secondary">12$</small>
          </div>
          <div class="card-footer">
            <a href="" target="_self" class="button">buy now</a> 
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-80">
          <img src="assets/img/shop/hat.png" class="card-img-top" alt="tote bag">
          <div class="card-body">
            <h5 class="card-title">Hat</h5>
            <p class="card-text">
              Questa Tote Bag è realizzata in materiali riciclati e da giovani artisti emergenti!
            </p>
            <small class="text-body-secondary">17$</small>
          </div>
          <div class="card-footer">
            <a href="" target="_self" class="button">buy now</a> 
          </div>
        </div>
      </div>
      
    </div>

  </div>
</section>

<!------------------ ICON BOXES START-------------------------- -->
<section id="icon-boxes" class="icon-boxes">

          <div class="titles">
            <h2>Dots Products: why so special?</h2>
            <p>dalle persone, per le persone</p>
          </div>

      <div class="container">
        <div class="row">
          <!-- 1 box -->
          <div class="col-md-6 col-lg-3 flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brush"></i></div>
              <h4 class="title"><a href="#">Artistic</a></h4>              
              <p class="description">
              Tutti i prodotti sono frutto di collaborazioni con artisti emergenti e non, 
              questo li rende autentici, unici ed esalta la passione che le persone mettono in ciò che amano. 
              
              <p>
            </div>
          </div>
          <!-- 2 box -->
          <div class="col-md-6 col-lg-3 flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gender-ambiguous"></i></div>
              <h4 class="title"><a href="#">Genderless</a></h4>              
              <p class="description">
              Tutto il concept aziendale e dei nostri prodotti segue la filosofia genderless,
              ogni prodotto dev'essere per tutti, che si tratti di abbigliamento, utilità o 
              arte 
              <p>
            </div>
          </div>
          <!-- 3 box -->
          <div class="col-md-6 col-lg-3 flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-camera"></i></div>
              <h4 class="title"><a href="#">Visibility</a></h4>              
              <p class="description">
              Dots cura in ogni dettaglio i prodotti, qualsiasi foto o produzione visiva
              con i nostri articoli sarà pubblicata sui nostri profili social!
              <p>
            </div>
          </div>
          <!-- 4 box -->
          <div class="col-md-6 col-lg-3 flex align-items-center align-items-stretch mb-5 mb-lg-0" 
            data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-emoji-smile"></i></div>
              <h4 class="title"><a href="#">Green</a></h4>              
              <p class="description">
              Cerchiamo di utilizzare materiali riciclati e con basso impatto ambientale,
              inoltre promuoviamo l'uso di prodotti e stili di vita che rispettino l'ambiente
              <p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ICON BOXES  END -->


    <!--------------- WRITE US SECTION -------------->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="titles">
            <h2>Write Us!</h2>
            <p></p>
          </div>
  
        <div class="card mb-12" data-aos="fade-right">
          <div class="row g-0">
            
            <div class="col-md-4">
              <div class="card-body">
                  <h3 class="card-title">WRITE US <BR>  YOUR <br> THOUGHTS </h3>
            
                </div>
              </div>
              <div class="col-md-8">
                      <div class="mb-2">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="your name">
                      </div>
                      <div class="mb-2">
                        <label for="formGroupExampleInput2" class="form-label">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="your username">
                      </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label-2">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your e-mail">
            </div>                    
        </div> 
      </div>  
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

    

<!-------------------------FOOTER------------------->
<br><br><br>

<footer id ="footer" class="text-center text-md-start">
<!-- Grid container -->
<div class="container">
  <!--Grid row-->
  <div class="row">
    <!--Grid column-->
    <div class="col-lg-3 col-md-12 mb-4 mb-md-0">

      <a href="#!" class="text"><img src="assets/img/testimonials/vert_white.png" alt="logo"></a>
      <p>
      Your daily dose of thoughts, <br> everywhere with you
      </p>
    </div>
    <!--Grid column-->

    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <div class="social-container">
                  <div id="social-icons">
                      <a href="" class="social"><i class="bi bi-youtube"></i></a>
                      <a href="" class="social"><i class="bi bi-instagram"></i></a>
                      <a href="" class="social"><i class="bi bi-tiktok"></i></a>
                      <a href="" class="social"><i class="bi bi-spotify"></i></a>
                </div>
      </div>
    </div>

    <div class="col-lg-1 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">LOOK</h5>

          <ul class="list-unstyled mb-0">
          <li><a href="blog.php" class="text-white">Blog</a></li>
            <li><a href="shop.php" class="text-white">Shop</a></li>
            <li><a href="poadcast.php" class="text-white">Poadcast</a></li>
            <li><a href="about.php" class="text-white">About</a></li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Contacts</h5>

          <ul class="list-unstyled">
            <li><a href="#!" class="text-white">Where are we</a></li>
            <li><a href="#!" class="text-white">email</a></li>
            <li><a href="#!" class="text-white">phone</a></li>
            <li><a href="#!" class="text-white">social</a></li>
       
          </ul>
        </div>
    <!--Grid column-->
  </div>
  <!--Grid row-->
</div>
</footer>
<!-- Footer -->
</section>

  <?php include('scripts.php'); ?>

  </body>
</html>