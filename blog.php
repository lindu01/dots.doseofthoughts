<!DOCTYPE html>
<html>
  <head>
    <title>Dots - Blog</title>

    <?php include('heading.php'); ?>
    <link href="assets/css/blog.css" rel="stylesheet">

  </head>

  <body>

  <?php 
  $page= 'blog';
  include('menu.php'); 
  ?>

  <!------------HERO SECTION--------------->

  <section id="hero" class="hero">

    <div class="titles">
            <h1>Dots Blog</h1>
            <h2>your daily dose of thoutghts. Learn, Share, Be inspired with others</h2> 
    </div>  

<div class="container d-flex" data-aos="fade-up">
        
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col-lg-3">
      <!-----card 1------>
          <div class="card" data-aos="fade-up">
            <div class="cont">
                <img src="assets/img/gallery/paper.jpg" class="card-img-top" alt="...">
            </div>
            
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below.</p>
            </div>
          </div>
        <!-----card 2------>    
          <div class="card" data-aos="fade-up">
            <div class="cont">
                <img src="assets/img/gallery/brain.jpg" class="card-img-top" alt="...">
            </div>
            
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below.</p>
            </div>
          </div>

      </div>
    <!-----card main------>
      <div class="col-lg-5">
          <div class="card" data-aos="fade-up">
                <img src="assets/img/gallery/topic.jpg"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below.</p>
                </div>
          </div>
      </div>

      <div class="col-lg-3">
        <!-----card 1------>
        <div class="card" data-aos="fade-up">
            <div class="cont">
                <img src="assets/img/gallery/yellow2.jpg" class="card-img-top" alt="...">
            </div>
            
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below.</p>
            </div>
          </div>
        <!-----card 2------>    
          <div class="card" data-aos="fade-up">
            <div class="cont">
                <img src="assets/img/gallery/telephone.jpg" class="card-img-top" alt="...">
            </div>
            
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below.</p>
            </div>
          </div>

        </div>
      </div>
</div>

    <!------Div con il numero degli articoli------->
        <nav aria-label="article-nav" class="article-nav">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
        
  </section>

<!-------------MAIN CONTENT---------------->

<div class="cursor"></div>

  <main id="main">

    <!-- ======= Gallery Section UTILE PER GLI ARTICOLI DEL BLOG ======= --->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="titles">
          <h2>Articles</h2>
          <p>ultimi aggiornamenti dal mondo</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="grid">
          <!-- Primi 4 articoli visibili -->
          <div class="article">
            <img src="assets/img/gallery/journalism.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
          </div>

          <div class="article">
            <img src="assets/img/gallery/talks.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
          </div>

          <div class="article">
            <img src="assets/img/gallery/topic.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
          </div>

          <div class="article">
            <img src="assets/img/gallery/wine.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
          </div>
          
          <!-- Altri 4 articoli nascosti inizialmente -->
          <div class="article hidden">
            <img src="assets/img/gallery/works.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
          </div>

          <div class="article hidden">
            <img src="assets/img/gallery/landing.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
          </div>
          
          <div class="article hidden">
            <img src="assets/img/gallery/plants.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
          </div>

          <div class="article hidden">
            <img src="assets/img/gallery/land3.jpg" class="img-fluid" alt="">
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read</a>
          </div>
        </div><!------fine griglia------->

    <!---    <div class="gallery-slider swiper">

          <div class="swiper-wrapper">

            <div class="swiper-slide"><a href="" class="gallery-lightbox" data-gall="gallery-carousel">
                <img src="assets/img/gallery/journalism.jpg" class="img-fluid" alt=""></a>
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
            </div>

            <div class="swiper-slide"><a href="" class="gallery-lightbox" data-gall="gallery-carousel">
                <img src="assets/img/gallery/talks.jpg" class="img-fluid" alt=""></a>
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
            </div>

            <div class="swiper-slide"><a href="" class="gallery-lightbox" data-gall="gallery-carousel">
                <img src="assets/img/gallery/submarine.jpg" class="img-fluid" alt=""></a>
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
            </div>

            <div class="swiper-slide"><a href="" class="gallery-lightbox" data-gall="gallery-carousel">
                <img src="assets/img/gallery/learn.jpg" class="img-fluid" alt=""></a>
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
            </div>

            <div class="swiper-slide"><a href="" class="gallery-lightbox" data-gall="gallery-carousel">
                <img src="assets/img/gallery/paper.jpg" class="img-fluid" alt=""></a>
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
            </div>

            <div class="swiper-slide"><a href="" class="gallery-lightbox" data-gall="gallery-carousel">
                <img src="assets/img/gallery/telephone.jpg" class="img-fluid" alt=""></a>
                <h5>Article Title</h5>
                <p>small description</p>
                <a class="button" href="#articles" target="">read more</a>
            </div>



          </div>
          <div class="swiper-pagination"></div>
        </div>-->

      </div>

      <div class="show-button"><button onclick="showHiddenArticle()">load more</button></div>
    </section> 



<!--------------TODAY INTERVIEWS  ----------------------------->
<section id="interview" class="interview">
        
  <div class="titles">
      <h2>Lastest Interviews</h2>
      <p>Here You'll find some interview</p>
  </div>
      

<div class="container align-items-center">

    <div class="row">
          <div class="col-lg-7">

            <div class="main-video">
              <img src="assets/img/gallery/video1.png" class="img-fluid interview" alt="about us">
              <a href="https://www.youtube.com/watch?v=LqME1y6Mlyg" target="_blank"><i class="play-btn"></i></a>
            </div>

            <div class="body-text">
              <h5>Dots Introduction</h5>
              <p>in questo video potrai avere un piccolo estratto di ciò che rappresenta Dots.
              This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
              </p>
              <br>
              <p>in questo video potrai avere un piccolo estratto di ciò che rappresenta Dots.
              This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
          
          <div class="col-lg-5">
          <!----interview 1---->  
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/gallery/land3.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">23 giungo 2023</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!----interview 2---->
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/gallery/wine.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">12 maggio 2023</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!----interview 3---->
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/gallery/talks.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">7 gennaio 2023</small></p>
                  </div>
                </div>
              </div>
            </div>

          </div>
    </div>

</div>
</section><!-- End TODAY videos Section -->

    
<!--------------- CONTACTS SECTION -------------->
  <section id="contact" class="contact">
    
    <div class="container" data-aos="fade-up">
  
        <div class="titles">
            <h2>Our Newsletter</h2>
            <p></p>
          </div>

          <div class="card-2 mb-12">
        <div class="card mb-12" data-aos="fade-right">
          <div class="row g-0">
            
            <div class="col-md-4">
              <div class="card-body">
                  <h3 class="card-title">WRITE US <BR>  YOUR <br> THOUGHTS </h3>
            
                </div>
              </div>
              <div class="col-md-8">
                      <div class="mb-2">
                        <label for="formGroupExampleInput" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="nome">
                      </div>
                      <div class="mb-2">
                        <label for="formGroupExampleInput2" class="form-label">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="username">
                      </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label-2">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your@email.com">
            </div>                    
        </div>

        </div>
      </div>  
      </div>

    </div>
  </section><!-- End Contact Section -->




  </main><!-- End #main -->


  <br><br><br>

  <?php include('footer.php'); ?>

  <?php include('scripts.php'); ?>

  </body>
</html>