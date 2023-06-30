<!DOCTYPE html>
<html>
<head>
    <title>Dots - Poadcast</title>

    <?php include('heading.php'); ?>
    <link href="assets/css/poadcast.css" rel="stylesheet">

    <style>
      #footer .container {
      border-radius: 25px; 
      background-color: #a5bbb8;
      }


    </style>

  </head>


  <body>

  <?php 
  $page= 'poadcast';
  include('menu.php'); 
  ?>

<!------------HERO SECTION--------------->

<section id="hero" class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-lg-column justify-content-center align-items-stretch order-1 order-lg-1 hero-img" data-aos="fade-right">
          <img src="assets/img/poadcast.png" class="img-fluid">
        </div>

        <div class="col-lg-6 flex-lg-column align-items-stretch order-2" data-aos="fade-left">
          <div class="titles">
            <h1>Poadcast</h1>
            <h2>daily Dose Of Thoughts</h2>
          </div>

          <div class="body-audio">
                <div class="container-audio">
                    <audio controls loop autoplay>
                              <source src="" type="audio/ogg">
                    </audio>
                </div>

                <div class="container-audio">
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
                    <div class="colum1">
                        <div class="row"></div>
                    </div>
              
                </div>

            </div>
                             
          </div>
   
        </div>

      </div>
    </div>
    
</section>
<div class="spoty"><a href="" target="_blank" class="button"><i class="bi bi-spotify"></i>
              Spotify</a></div>
    <!-- HERO END -->
    <div class="cursor"></div>

<main id="main">

<!-----GRAFICO CON BOLLE 
<div>
  <canvas id="myChart"></canvas>
</div>----->

<!----------bubble POADCAST----------->
<section id="nav-bubble">
    <nav class="bubble container">
        <input type="checkbox" href="#" class="bubble-open" name="bubble-open" id="bubble-open" />
        <label class="bubble-open-button" for="bubble-open"><i class="bi bi-plus"></i></label>

        <a href="#" class="bubble-item blue"><i class="bi bi-spotify"></i></a>
        <a href="#" class="bubble-item green"></a>
        <a href="#" class="bubble-item red"><i class="bi bi-youtube"></i> </a>
        <a href="#" class="bubble-item purple"></a>
        <a href="#" class="bubble-item orange"><i class="bi bi-pinterest"></i></a>
        <a href="#" class="bubble-item lightblue"><i class="bi bi- "></i> </a>
    </nav>
</section>
<!----------FINE bubble POADCAST----------->
 
 <!--------------------------------------------------
 ---------------------SECTION VIDEO----------------------->

<section id="videos" data-aos="fade-right">
<div class="container">
  <div class="carousel slide" data-aos="fade-left" data-aos-delay="100">

    <div class="carousel-inner">

      <div class="carousel-item active">
        <video controls><source src="assets/img/video/Dots-DoseOfThoughts.mp4" type="video/mp4"></video></div>

      <div class="carousel-item">
        <video controls><source src="assets/img/video/Dots-DoseOfThoughts.mp4" type="video/mp4"></video></div>

      <div class="carousel-item">
        <video controls><source src="assets/img/video/Dots-DoseOfThoughts.mp4" type="video/mp4"></video></div>
    </div>

    <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>-->

  </div>
    </div>
</section>


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


  <br><br><br>

<?php include('footer.php'); ?>

<?php include('scripts.php'); ?>



  </body>
</html>