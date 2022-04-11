<!DOCTYPE html>
<html lang="pt-br">
  <?php echo file_get_contents('components/head.html') ?>
  
  <body>
    <?php echo file_get_contents('components/header.html') ?>
    
    <main>
      <!-- <section>
        <div class="banner">
          <img src="https://blog.tzviagens.com.br/wp-content/uploads/2020/01/espirito-santo-descubra-as-melhores-paisagens-para-visitar7.jpg" alt="espirito-santo-descubra-as-melhores-paisagens-para-visitar7" />
        </div>
      </section> -->

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://blog.tzviagens.com.br/wp-content/uploads/2020/01/espirito-santo-descubra-as-melhores-paisagens-para-visitar7.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://miro.medium.com/max/1000/0*tH0xbnsXbfenBGs7.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://blog.tzviagens.com.br/wp-content/uploads/2020/01/espirito-santo-descubra-as-melhores-paisagens-para-visitar7.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container">
        <section>
          <div>
            <h2>Categorias</h2>
          </div>
        </section>

        <section>
          <div>
            <h2>Destaques</h2>
          </div>
          <div class="spotlight">
            <div class="card" style="width: 18rem; border-radius: 20px">
              <img class="card-img-top" src="https://s3.amazonaws.com/dreampass-app/experiencias/905/rodrigo-viana-3.jpg" alt="rodrigo-viana">
              <div class="card-body">
                <div>
                  <h5 class="card-title">Pico da bandeira</h5>
                  <p class="card-text">A experiência de trilhar sob a luz da lua e céu estrelado é única! Iniciamos 00:30, e em boa parte da trilha não era necessário o uso de lanterna.</p>
                </div>
                <div class="heart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.419c-2.826-5.695-11.999-4.064-11.999 3.27 0 7.27 9.903 10.938 11.999 15.311 2.096-4.373 12-8.041 12-15.311 0-7.327-9.17-8.972-12-3.27z"/></svg>
                </div>
              </div>
            </div>

            <div class="card" style="width: 18rem; border-radius: 20px">
              <img class="card-img-top" src="https://s3.amazonaws.com/dreampass-app/experiencias/905/rodrigo-viana-3.jpg" alt="rodrigo-viana">
              <div class="card-body">
                <div>
                  <h5 class="card-title">Pico da bandeira</h5>
                  <p class="card-text">A experiência de trilhar sob a luz da lua e céu estrelado é única! Iniciamos 00:30, e em boa parte da trilha não era necessário o uso de lanterna.</p>
                </div>
                <div class="heart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.419c-2.826-5.695-11.999-4.064-11.999 3.27 0 7.27 9.903 10.938 11.999 15.311 2.096-4.373 12-8.041 12-15.311 0-7.327-9.17-8.972-12-3.27z"/></svg>
                </div>
              </div>
            </div>

            <div class="card" style="width: 18rem; border-radius: 20px">
              <img class="card-img-top" src="https://s3.amazonaws.com/dreampass-app/experiencias/905/rodrigo-viana-3.jpg" alt="rodrigo-viana">
              <div class="card-body">
                <div>
                  <h5 class="card-title">Pico da bandeira</h5>
                  <p class="card-text">A experiência de trilhar sob a luz da lua e céu estrelado é única! Iniciamos 00:30, e em boa parte da trilha não era necessário o uso de lanterna.</p>
                </div>
                <div class="heart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.419c-2.826-5.695-11.999-4.064-11.999 3.27 0 7.27 9.903 10.938 11.999 15.311 2.096-4.373 12-8.041 12-15.311 0-7.327-9.17-8.972-12-3.27z"/></svg>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div>
            <h2>Mapa interativo</h2>
          </div>
          <div>
          <div id="map"></div>
          </div>
        </section>
      </div>
    </main>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWmqMNElrDYemBdpIvzqH7xHlhXPj3xFk&callback=initMap&v=weekly" async ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
