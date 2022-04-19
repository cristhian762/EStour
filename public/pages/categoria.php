<!DOCTYPE html>
<html lang="pt-br">
  <?php echo file_get_contents('components/head.html') ?>

  <body>
    <?php echo file_get_contents('components/header.html') ?>

    <main>
      <div class="container">
        <section>
          <div>
            <h1 class="title-page">Categoria</h1>
          </div>

          <div class="row">
            <div class="col-3">
              <div id="filter">
                <div>
                  <div>
                    <h2>Ordernar por</h2>
                  </div>
                  <div>
                    <input id="filser_search" type="text" placeholder="Buscar" />
                  </div>
                  <div style="padding: 30px 0 40px 0">
                    <hr />
                  </div>
                  <div>
                    <h2>Filtros</h2>
                  </div>
                  <div style="text-align: left; padding-left: 20px">
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_religioso" name="filter-categorie" />
                      <label for="checkbox_religioso">Religioso</label>
                    </div>
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_gastronomia" name="filter-categorie" />
                      <label for="checkbox_gastronomia">Gastronomia</label>
                    </div>
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_nautico" name="filter-categorie" />
                      <label for="checkbox_nautico">Nautico</label>
                    </div>
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_praia" name="filter-categorie" />
                      <label for="checkbox_praia">Praia</label>
                    </div>
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_cultura" name="filter-categorie" />
                      <label for="checkbox_cultura">Cultura</label>
                    </div>
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_ecoturismo" name="filter-categorie" />
                      <label for="checkbox_ecoturismo">Ecoturismo</label>
                    </div>
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_eventos" name="filter-categorie" />
                      <label for="checkbox_eventos">Eventos</label>
                    </div>
                    <div class="checkbox-filter">
                      <input type="radio" id="checkbox_agroturismo" name="filter-categorie" />
                      <label for="checkbox_agroturismo">Agroturismo</label>
                    </div>
                  </div>
                  <div>
                    <button id="clear_filter">Limpar</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-9">
              <div class="categorie-items ecoturismo">
                <a href="?pedra-da-cebola">
                  <div>
                    <div class="col-auto">
                      <div class="categorie-image">
                        <img style="border-radius: 20px" width="100%" height="100%" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/a2/77/5e/photo0jpg.jpg?w=1200&h=-1&s=1" alt="imagem" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="categorie-desc">
                        <div>
                          <h3>Parque Pedra da Cebola</h3>
                        </div>
                        <div>
                          <p style="text-align: justify">O Parque Pedra da Cebola está localizado no município brasileiro de Vitória, entre os bairros Jardim da Penha e Mata da Praia, na zona continental do município, no estado do Espírito Santo. O parque possui 100.005 metros quadrados e conta com uma vegetação típica de restinga.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="categorie-items ecoturismo">
                <a href="?pico_da_bandeira">
                  <div>
                    <div class="col-auto">
                      <div class="categorie-image">
                        <div id="pico_da_bandeira"></div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="categorie-desc">
                        <div>
                          <h3>Pico da Bandeira</h3>
                        </div>
                        <div>
                          <p style="text-align: justify">O pico da Bandeira é o ponto mais alto dos estados do Espírito Santo e de Minas Gerais, e também de toda a Região Sudeste do Brasil. É também o terceiro ponto mais alto do país, com 2891,32 metros de altitude (medição feita por GPS pelo Projeto Pontos Culminantes do Brasil.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="categorie-items religioso">
                <a href="?pico_da_bandeira">
                  <div>
                    <div class="col-auto">
                      <div class="categorie-image">
                        <img style="border-radius: 20px" width="100%" height="100%" src="https://setur.es.gov.br/Media/Setur/_Profiles/c4d8c6e6/6562af78/FP%20-%20Foto%20Prociss%C3%A3o%20Fotogr%C3%A1fica%20Faesa%20(4).jpg?v=637841482876817040" alt="imagem" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="categorie-desc">
                        <div>
                          <h3>Festa da Penha</h3>
                        </div>
                        <div>
                          <p style="text-align: justify">A principal festa religiosa do Espírito Santo, a Festa da Penha, depois de dois anos exclusivamente on-line, volta a ser presencial. Missas no campinho, romarias e shows fazem parte da programação divulgada na manhã dessa segunda-feira (28), pela Comissão Organizadora do evento....</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="categorie-items gastronomia">
                <a href="?pico_da_bandeira">
                  <div>
                    <div class="col-auto">
                      <div class="categorie-image">
                        <img style="border-radius: 20px" width="100%" height="100%" src="https://descubraoespiritosanto.es.gov.br/Media/DescubraOEspiritoSanto/Fotos/maior%20moqueca.jpg" alt="imagem" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="categorie-desc">
                        <div>
                          <h3>Dia da Moqueca</h3>
                        </div>
                        <div>
                          <p style="text-align: justify">O prato típico mais tradicional da gastronomia do Espírito Santo, a moqueca capixaba, tem seu dia especial de comemoração e degustação. A homenagem foi criada através da Lei Municipal 8.213/2012, que instituiu o Dia da Moqueca no município de Vitória em 30 de setembro. A Lei teve inspiração na frase do jornalista e escritor Cacau Monjardim: “Moqueca é capixaba. O resto é peixada”.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="categorie-items nautico">
                <a href="?pico_da_bandeira">
                  <div>
                    <div class="col-auto">
                      <div class="categorie-image">
                        <img style="border-radius: 20px" width="100%" height="100%" src="https://descubraoespiritosanto.es.gov.br/Media/DescubraOEspiritoSanto/Fotos/Escunas%20%20%20005%20-%20%20Foto%20Sagrilo.png" alt="imagem" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="categorie-desc">
                        <div>
                          <h3>Pesca Oceânica</h3>
                        </div>
                        <div>
                          <p style="text-align: justify">A pesca oceânica e os esportes náuticos são destaques no Espírito Santo. Pescadores do mundo inteiro são atraídos pela quantidade e tamanho dos peixes do litoral do Estado. Velejadores de Laser, Hobbie Cat e pequenas embarcações encontram raias privilegiadas por correntes e ventos no litoral capixaba.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <?php echo file_get_contents('components/footer.html') ?>
  </body>

  <script>
    $("input[name='filter-categorie']").on("click", function () {
      $(".categorie-items").css({ display: "none" });
      $("." + $(this).attr("id").replace("checkbox_", "")).css({ display: "block" });
    });

    $("#clear_filter").on("click", function () {
      $(".categorie-items").css({ display: "block" });

      $("input[name='filter-categorie']").prop("checked", false);
    });
  </script>
</html>
