<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
include 'menu.php';
include '../processadores/conexao.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>FLORICULTURA</title>
</head>
<body>
    <header class="cbl">
    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="#" href="index.php">home</a></li>
          <li><a href="login.php">login</a></li>
          <li><a href="cadastro.php">cadastro</a></li>
          <li><a href="contato.php">contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </header>
   <main class="menu">
    
   </main>
   <section id="menu1" class="menu1">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Catálogo de flores</h2>
          <p>ESCOLHA SUA FLOR</p>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p class="p1">Catálogo</p>
              <h3>FLORES</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="../assets/imagens/flor1.jpg" class="glightbox"><img src="../assets/imagens/flor1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../assets/imagens/tulipa.jpg" class="glightbox"><img src="../assets/imagens/tulipa.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tulipas brancas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../assets/imagens/buque.jpg" class="glightbox"><img src="../assets/imagens/buque.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Buquê de rosas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../assets/imagens/flor4.jpg" class="glightbox"><img src="../assets/imagens/flor4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

    </section><!-- End Menu Section -->
    <footer class="rodape"></footer>
</body>
</html>