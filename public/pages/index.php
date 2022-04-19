<!DOCTYPE html>
<html lang="pt-br">
  <?php echo file_get_contents('components/head.html') ?>

  <body>
    <?php echo file_get_contents('components/header.html') ?>

    <main>
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div id="banner_1"></div>
          </div>

          <div class="carousel-item">
            <div id="banner_2"></div>
          </div>

          <div class="carousel-item">
            <div id="banner_3"></div>
          </div>

          <div class="carousel-item">
            <div id="banner_4"></div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section id="categorie">
        <div class="container">
          <div>
            <h2>Categorias</h2>
          </div>
        </div>

        <div class="items">
          <div>
            <div class="col" id="cat_1"><a href="categoria.php/?religioso">RELIGIOSO</a></div>
            <div class="col" id="cat_2"><a href="categoria.php/?gastronomia">GASTRONOMIA</a></div>
            <div class="col" id="cat_3"><a href="categoria.php/?nautico">NÁUTICO</a></div>
            <div class="col" id="cat_4"><a href="categoria.php/?praia">PRAIA</a></div>
            <div class="col" id="cat_5"><a href="categoria.php/?evento">EVENTOS</a></div>
            <div class="col" id="cat_6"><a href="categoria.php/?agroturismo">AGROTURISMO</a></div>
            <div class="col" id="cat_7"><a href="categoria.php/?ecoturismo">ECOTURISMO</a></div>
            <div class="col" id="cat_8"><a href="categoria.php/?cultura">CULTURA</a></div>
          </div>
        </div>
      </section>

      <div class="container">
        <section id="spotlight">
          <div style="padding-bottom: 30px">
            <h2>Destaques</h2>
          </div>
          <div class="spotlight">
            <div class="card" style="width: 18rem; border-radius: 20px">
              <img class="card-img-top" src="https://s3.amazonaws.com/dreampass-app/experiencias/905/rodrigo-viana-3.jpg" alt="rodrigo-viana" />
              <div class="card-body">
                <div>
                  <h5 class="card-title">Pico da bandeira</h5>
                  <p class="card-text">A experiência de trilhar sob a luz da lua e céu estrelado é única! Iniciamos 00:30, e em boa parte da trilha não era necessário o uso de lanterna.</p>
                </div>
                <div class="heart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.419c-2.826-5.695-11.999-4.064-11.999 3.27 0 7.27 9.903 10.938 11.999 15.311 2.096-4.373 12-8.041 12-15.311 0-7.327-9.17-8.972-12-3.27z" /></svg>
                </div>
              </div>
            </div>

            <div class="card" style="width: 18rem; border-radius: 20px">
              <img class="card-img-top" src="https://s3.amazonaws.com/dreampass-app/experiencias/905/rodrigo-viana-3.jpg" alt="rodrigo-viana" />
              <div class="card-body">
                <div>
                  <h5 class="card-title">Pico da bandeira</h5>
                  <p class="card-text">A experiência de trilhar sob a luz da lua e céu estrelado é única! Iniciamos 00:30, e em boa parte da trilha não era necessário o uso de lanterna.</p>
                </div>
                <div class="heart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.419c-2.826-5.695-11.999-4.064-11.999 3.27 0 7.27 9.903 10.938 11.999 15.311 2.096-4.373 12-8.041 12-15.311 0-7.327-9.17-8.972-12-3.27z" /></svg>
                </div>
              </div>
            </div>

            <div class="card" style="width: 18rem; border-radius: 20px">
              <img class="card-img-top" src="https://s3.amazonaws.com/dreampass-app/experiencias/905/rodrigo-viana-3.jpg" alt="rodrigo-viana" />
              <div class="card-body">
                <div>
                  <h5 class="card-title">Pico da bandeira</h5>
                  <p class="card-text">A experiência de trilhar sob a luz da lua e céu estrelado é única! Iniciamos 00:30, e em boa parte da trilha não era necessário o uso de lanterna.</p>
                </div>
                <div class="heart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.419c-2.826-5.695-11.999-4.064-11.999 3.27 0 7.27 9.903 10.938 11.999 15.311 2.096-4.373 12-8.041 12-15.311 0-7.327-9.17-8.972-12-3.27z" /></svg>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="interactive">
          <div>
            <h2>Mapa interativo</h2>
          </div>
        </section>
      </div>

      <div>
        <div id="map"></div>
      </div>
    </main>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWmqMNElrDYemBdpIvzqH7xHlhXPj3xFk&callback=initMap&v=weekly" async></script>

    <?php echo file_get_contents('components/footer.html') ?>
  </body>
</html>
