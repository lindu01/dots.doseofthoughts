<!DOCTYPE html>
<html>
  <head>
    <title>Dots - Dose Of Thoughts</title>
    <?php include('heading.php'); ?>

    <link href="assets/css/landing.css" rel="stylesheet">
    
  </head>

  <body>
  <?php 
  $page= 'home';
  include('menu.php'); 
  ?>

  
  <!------------HERO SECTION--------------->

  <section id="hero" class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch order-2 order-lg-1" data-aos="fade-right">

          <div class="titles">
            <h1>Dots <br> <span><!--Dose Of Thoughts--></span></h1>
            <h2>your daily dose of thoutghts. <br>Learn, Share, Be inspired with others.</h2>
          </div>  

          <a href="#whoarewe" target="_self" class="button">What is Dots?</a>     
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2
         hero-img" data-aos="fade-left">
          <img src="assets/img/testimonials/vert_black.png" class="img-fluid">
        </div>
    </div>
  </section>


  <div class="cursor"></div>

<main id="main">

 
<!---------------TODAY NEWS ----------------------------->
<section id="news" class="news">
        
  <div class="titles">
      <h2>Today News</h2>
      <p>Here You'll find some News</p>
  </div>
      

<div class="container align-items-center">

  <div class="card mb-12" data-aos="fade-left">

    <div class="row g-0">
          <div class="col-md-4">
            <img class="img-fluid news" src="assets/img/gallery/works.jpg" alt="about us">
          </div>

          <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">Le professioni del futuro in un mercato in continua evoluzione</h3>
                  <p class="card-text">Quali sono i mestieri del futuro e quali saranno i titoli di laurea più
                     richiesti nei prossimi 5 anni? Quali nuove competenze servirà acquisire
                      per una carriera luminosa e all’avanguardia, che sia pronta a cogliere 
                      nuove sfide e brillanti opportunità?</p>

                <p class="card-text"><small class="text-body-secondary">15 giugno 2023</small></p>

                <a href="blog.php" target="_self" class="button">read more</a>  
              </div>
            </div>
      </div>
  </div>

  <div class="card mb-12" data-aos="fade-right">

        <div class="row g-0">
          
          <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">Che è successo al Titan?</h3>
                  <p class="card-text">Un'implosione catastrofica” 
                    ha distrutto il sommergibile Titan e provocato 
                    la morte rapidissima dei 5 passeggeri che puntavano 
                    a raggiungere il relitto del Titanic. 
                    Il sottomarino è scomparso domenica, poco dopo l'inizio della missione.</p>
                <p class="card-text"><small class="text-body-secondary">20 giugno 2023</small></p>
                <a href="blog.php" target="_self" class="button">read more</a>  
              </div>
            </div>

            <div class="col-md-4">
            <img class="img-fluid news"  src="assets/img/gallery/submarine.jpg"alt="about us">
          </div>

          </div>
        </div>
  </div>
</section><!-- End TODAY NEWS Section -->


<!--------------- SECTION WHO ARE WE -------------->
    <section id="whoarewe" class="whoarewe">
      <div class="container-fluid align-items-center" data-aos="fade-up">

        <div class="titles">
          <h2>Cos'è Dots?</h2>
          <p>Qui trovi tutto ciò che è Dots. Un luogo d'incontro e di scoperta, che si evolve ogni giorno.</p>
        </div>

        <div class="row content">

          <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up">

            <div class="card">
                <img src="assets/img/testimonials/round_yellow.png" class="card-img" alt="blog cover">
                <div class="card-body">
                  <h5 class="card-title">Blog</h5>
                  <p class="card-text">
                    Sul nostro Blog ogni giorno ci saranno news, aggiornamenti
                    sul mondo che ci circonda, ma anche curiosità e possibilità di condividere
                    i propri pensieri.
                  </p> 
                </div>
                <a href="blog.php" target="_self" class="button">blog</a>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up" data-aos-delay="150">

            <div class="card">
                <img src="assets/img/testimonials/round_black.png" class="card-img" alt="shop cover">
                <div class="card-body">
                  <h5 class="card-title">Shop</h5>
                  <p class="card-text">Lo shop di Dots ti permette di ammirare i lavori di 
                    artisti contemporanei, che imprimiamo per te su felpe, oggetti e grafiche.
                  </p>
                </div>
                <a href="shop.php" class="button">take a look</a>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up" data-aos-delay="250">

            <div class="card">
                <img src="assets/img/testimonials/round_blue.png" class="card-img" alt="poadcast cover">
                <div class="card-body">
                  <h5 class="card-title">Poadcast</h5>
                  <p class="card-text">Daily Dose Of Thoughts è il poadcast che 
                    ti accompagna nelle tue giornate, in cui si scontrano la vita di tutti i gionri,
                    fino alla discussione di tematiche attuali ed interessanti.
                  </p>
                  
                </div>
                <a href="poadcast.php" class="button">listen now</a>
            </div>
          </div>
        
        </div>
      </div>
    </section>

<!--------------- FINE SECTION WHO ARE WE -------------->


<!--------------- WRITE US SECTION -------------->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="titles">
            <h2>Our Newsletter</h2>
            <p></p>
          </div>
  
        <div class="card mb-12" data-aos="fade-right">
          <div class="row g-0">
            
            <div class="col-md-4">
              <div class="card-body">
                  <h3 class="card-title">WRITE<BR>  YOUR <br> THOUGHTS </h3>
            
                </div>
              </div>
              <div class="col-md-8">
                      <div class="mb-2">
                        <label for="formGroupExampleInput" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nome">
                      </div>
                      <div class="mb-2">
                        <label for="formGroupExampleInput2" class="form-label">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="username">
                      </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label-2">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="e-mail">
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