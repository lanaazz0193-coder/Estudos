<?php

$livros = [
    [
        "titulo" => "A Metamorfóse",
        "autor" => "Franz Kafka",
        "paginas" => 120,
        "genero" => "Novela",
        "imagem" => "https://m.media-amazon.com/images/I/71mFnG3Bn3L._SL1500_.jpg",
        "status" => "Lido",
        "nota" => 4
    ],
    [
        "titulo" => "A Morte de Ivan Ilitch",
        "autor" => "Liev Tolstói",
        "paginas" => 90,
        "genero" => "Novela",
        "imagem" => "https://m.media-amazon.com/images/I/61CpTX3QbFL._SL1335_.jpg",
        "status" => "Lido",
        "nota" => 5
    ],
    [
        "titulo" => "Ilíada",
        "autor" => "Homero",
        "paginas" => 200,
        "genero" => "Épico",
        "imagem" => "https://m.media-amazon.com/images/I/81iCk4r43AL._SL1500_.jpg",
        "status" => "Lido",
        "nota" => 4
    ],
    [
        "titulo" => "Noites Brancas",
        "autor" => "Dostoiévski",
        "paginas" => 90,
        "genero" => "Romance",
        "imagem" => "https://m.media-amazon.com/images/I/7143D7foVmL._SL1500_.jpg",
        "status" => "Lido",
        "nota" => 4
    ],
    [
        "titulo" => "O Gato Preto",
        "autor" => "Edgar Allan Poe",
        "paginas" => 120,
        "genero" => "Terror",
        "imagem" => "https://m.media-amazon.com/images/I/61djfYXtO9L._SL1360_.jpg",
        "status" => "Lido",
        "nota" => 4
    ],
    [
        "titulo" => "Coraline",
        "autor" => "Neil Gaiman",
        "paginas" => 300,
        "genero" => "Terror",
        "imagem" => "https://m.media-amazon.com/images/I/91DZobBc1BL._SL1500_.jpg",
        "status" => "Lido",
        "nota" => 5
    ],
    [
        "titulo" => "Onde as Árvores Cantam",
        "autor" => "Laura Gallego",
        "paginas" => 400,
        "genero" => "Fantasia",
        "imagem" => "https://m.media-amazon.com/images/I/A1lMJgU+90L._SL1500_.jpg",
        "status" => "Relendo",
        "nota" => 4
    ],
    [
        "titulo" => "Eragon",
        "autor" => "Christopher Paolini",
        "paginas" => 400,
        "genero" => "Fantasia",
        "imagem" => "https://m.media-amazon.com/images/I/911dPGW1jrL._SL1500_.jpg",
        "status" => "Para ler",
        "nota" => null // 'nulo' convertido para o tipo null do PHP
    ],
    [
        "titulo" => "O Ladrão de Raios",
        "autor" => "Rick Riordan",
        "paginas" => 300,
        "genero" => "Fantasia",
        "imagem" => "https://m.media-amazon.com/images/I/611qVLzatFL._SL1030_.jpg",
        "status" => "Lido",
        "nota" => 5
    ],
    [
        "titulo" => "A Casa de Hades",
        "autor" => "Rick Riordan",
        "paginas" => 500,
        "genero" => "Fantasia",
        "imagem" => "https://m.media-amazon.com/images/I/51testziHzL._SY445_SX342_ML2_.jpg",
        "status" => "Lido",
        "nota" => 4
    ],
    [
        "titulo" => "O Labirinto do Fauno",
        "autor" => "Guilerme Del Toro",
        "paginas" => 300,
        "genero" => "Fantasia",
        "imagem" => "https://m.media-amazon.com/images/I/51epGsQvSaL._SY445_SX342_ML2_.jpg",
        "status" => "Lido",
        "nota" => 4
    ],
    [
        "titulo" => "Dungeons e Drama",
        "autor" => "Kristy Boyce",
        "paginas" => 300,
        "genero" => "Romance",
        "imagem" => "https://m.media-amazon.com/images/I/81RPg8jp8QL._SL1500_.jpg",
        "status" => "Lendo",
        "nota" => 3
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

  <script type="module" src="./assets/js/Lib.js"></script>

  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- fontes -->

  <!-- f-playfair -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Alien+Block&family=Ballet:opsz@16..72&family=Fira+Code:wght@300..700&family=Monsieur+La+Doulaise&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Prata&family=Rouge+Script&display=swap"
    rel="stylesheet">

</head>

<body class="c-preto">

  <!-- Cabeçalho -->
  <header>
    </nav><b-navbar></b-navbar>
  </header>

  <main>

    <!-- Banner -->
    <b-banner endereco-imagem="./assets/img/banner.jpg" titulo-banner="Conhecimento ao seu alcance"></b-banner>



    <!-- Cards -->
    <div style="min-height: 600px;" class="container mt-5 mb-5">
      <div class="row">


      <?php foreach ($livros as $livro): ?>

        <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
          <b-card 

            endereco-imagem= "<?php echo $livro['imagem'];  ?>" 
            titulo-card= "<?php echo $livro['titulo'];  ?>"
          
        ></b-card>
    
        </div>

      <?php endforeach; ?>

      </div>

    </div>




    <!-- Carrossel -->
    <div class="container my-5 py-4">
      <div class="row align-items-center">

        <div class="col-md-6 d-none d-md-flex">
          <div
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?q=80&w=800'); background-size: cover; background-position: center; height: 500px;"
            class="w-100 rounded-4 shadow"></div>
        </div>

        <div class="col-md-6 col-sm-12">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner rounded-4">
              <div class="carousel-item active">
                <svg class="bd-placeholder-img d-block w-100" height="500" preserveAspectRatio="xMidYMid slice"
                  focusable="false">
                  <rect width="100%" height="100%" fill="#2c3e50"></rect>
                </svg>
                <div class="carousel-caption">
                  <h5>Clube do Livro</h5>
                  <p>Participe dos nossos encontros mensais sobre literatura clássica.</p>
                </div>
              </div>

              <div class="carousel-item">
                <svg class="bd-placeholder-img d-block w-100" height="500" preserveAspectRatio="xMidYMid slice"
                  focusable="false">
                  <rect width="100%" height="100%" fill="#34495e"></rect>
                </svg>
                <div class="carousel-caption">
                  <h5>Novas Aquisições</h5>
                  <p>Confira os títulos de ficção científica que acabaram de chegar.</p>
                </div>
              </div>

              <div class="carousel-item">
                <svg class="bd-placeholder-img d-block w-100" height="500" preserveAspectRatio="xMidYMid slice"
                  focusable="false">
                  <rect width="100%" height="100%" fill="#1a252f"></rect>
                </svg>
                <div class="carousel-caption">
                  <h5>Espaço de Estudos</h5>
                  <p>Ambientes reservados para leitura silenciosa e pesquisas acadêmicas.</p>
                </div>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Próximo</span>
            </button>
          </div>
        </div>


      </div>
    </div>

  </main>

  <!-- Rodapé -->
  <footer>
    <b-footer></b-footer>
  </footer>

</body>

</html>