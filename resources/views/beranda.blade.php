<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
section {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.lnr {
  display: inline-block;
  fill: currentColor;
  width: 1em;
  height: 1em;
  vertical-align: -0.05em;
  stroke-width: 1;
}

.services-icon {
  margin-bottom: 20px;
  font-size: 30px;
}
bgc2, .vLine, .hLine {
    background-color: #0F52BA;
}

.quote-icon {
  font-size: 40px;
  margin-bottom: 20px;
}
.services-icon {
    font-size: 60px;
    margin-left: 2rem;
}
    </style>
    <title>beranda</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">WELLCOME :)</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="beranda">Beranda
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="profil.blade.php">Profil</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="galeri.blade.php">Galeri</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://i.pinimg.com/originals/39/49/01/394901334a9a5db4c6cb1bedfe6d2f64.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead"></p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://i.pinimg.com/originals/66/91/60/6691606ccc30b7079f9e3d9f82c7b776.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead"></p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://i.pinimg.com/originals/77/f2/e1/77f2e1e9d5fe2f979cea3a78700d0891.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead"></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section class="py-5 text-center">
      <div class="container"> 
        <h2 class="text-center">PENGETAHUAN</h2><br>
        <p class="text-muted mb-5 text-center">Tentang Pemrograman</p>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/bf/5d/bf/bf5dbf0f9bc5db275fa215a976f93b69.jpg" alt="" height="100" width="auto">
            <h6>Laravel</h6>
            <p class="text-muted">Framework aplikasi web kontemporer, open source dan digunakan secara luas untuk perancangan aplikasi web yang cepat dan mudah.</p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/cc/0b/ea/cc0bea11ca050fa4e9cff75e6caa674f.jpg" alt="" height="100" width="auto">
            <h6>HTML</h6>
            <p class="text-muted">Bahasa markup yang digunakan untuk membuat struktur halaman website. </p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/20/73/f6/2073f6a6fc3c42a25abd5046d1d563f1.jpg" alt="" height="100" width="auto">
            <h6>CSS</h6>
            <p class="text-muted">Bahasa Cascading Style Sheet dan biasanya digunakan untuk mengatur tampilan elemen yang tertulis dalam bahasa markup, seperti HTML.</p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/70/9b/25/709b25d20af1862d55d2f3bd27dac787.jpg" alt="" height="100" width="auto">
            <h6>JavaScript</h6>
            <p class="text-muted">Bahasa pemrograman yang digunakan dalam pengembangan website agar lebih dinamis dan interaktif.</p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/eb/8c/b7/eb8cb7166421da50026ea21afb0e3b2e.jpg" alt="" height="100" width="auto">
            <h6>Bootstrap</h6>
            <p class="text-muted">Kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web. </p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
           <img src="https://i.pinimg.com/originals/62/78/f4/6278f4dbc6230deb2d3398af7bbbb112.jpg" alt="" height="100" width="auto">
            <h6>Java</h6>
            <p class="text-muted">Bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon genggam.</p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/bb/2a/c1/bb2ac1584c3e84a1a54f4587aa4b9061.jpg" alt="" height="100" width="auto">
             <h6>Codeigniter</h6>
             <p class="text-muted">Aplikasi sumber terbuka yang berupa kerangka kerja PHP dengan model MVC untuk membangun situs web dinamis dengan menggunakan PHP. </p>
           </div>
           <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/28/44/c5/2844c55065d2d39120142288e05aeb99.jpg" alt="" height="100" width="auto">
             <h6>Visual Studio Code</h6>
             <p class="text-muted">Perangkat lunak penyunting kode-sumber buatan Microsoft untuk Linux, macOS, dan Windows.</p>
           </div>
           <div class="col-sm-6 col-lg-4 mb-3">
            <img src="https://i.pinimg.com/originals/36/57/c9/3657c9c40fbc7b9769996fadc3267f0b.jpg" alt="" height="100" width="auto">
             <h6>PHP Myadmin</h6>
             <p class="text-muted">Perangkat lunak bebas yang ditulis dalam bahasa pemrograman PHP yang digunakan untuk menangani administrasi MySQL melalui website Jejaring Jagat Jembar.</p>
           </div>
        </div>
      </div>
</section>
 
<!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

  </body>
</html>