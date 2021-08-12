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
* {
  box-sizing: border-box;
}

body {
  background-color: #f87a7a;
  padding: 20px;
  font-family: Arial;
}

.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

.row,
.row > .column {
  padding: 8px;
}

.column {
  float: left;
  width: 33.33%;
  display: none;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.content {
  background-color: white;
  padding: 10px;
}

.show {
  display: block;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: rgb(255, 129, 249);
}

.btn.active {
  background-color: rgb(241, 151, 151);
  color: white;
}
    </style>
    <title>beranda</title>
  </head>
  <body>
      <h2>GALLERY</h2>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
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

<div class="main">
  <h2>MY GALLERY</h2>
  
  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('smk')"> SMK</button>
    <button class="btn" onclick="filterSelection('smp')"> SMP</button>
    <button class="btn" onclick="filterSelection('exo')"> EXO</button>
  </div>
  
  
  <div class="row">
    <div class="column smk">
      <div class="content">
        <img src="https://i.pinimg.com/originals/5d/f9/c0/5df9c0cff24e4ea766f61c9179e809a8.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>
    <div class="column smk">
      <div class="content">
      <img src="https://i.pinimg.com/originals/c3/1a/8b/c31a8ba20b7a4a08df684c82d3ab311b.jpg" style="width:100%; height:150px">
      </div>
    </div>
    <div class="column smk">
      <div class="content">
      <img src="https://i.pinimg.com/originals/7b/94/45/7b9445ac300d5b759383405b1e812dde.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>
    <div class="column smk">
      <div class="content">
      <img src="https://i.pinimg.com/originals/7d/67/d4/7d67d4a62f0c562ef959d46f8e8d460b.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>
    <div class="column smk">
      <div class="content">
        <img src="https://i.pinimg.com/originals/43/c8/4f/43c84fc336f0981cf53e3f95ca46565c.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>
    
    <div class="column smp">
      <div class="content">
      <img src="https://i.pinimg.com/originals/de/39/63/de39638905ab1b987658499ddac9528c.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>
    <div class="column smp">
      <div class="content">
      <img src="https://i.pinimg.com/originals/d2/b9/3c/d2b93c2e5e353dac7c753b88878d5aaa.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>
  
    <div class="column smp">
      <div class="content">
        <img src="https://i.pinimg.com/originals/56/28/6f/56286f9f6d7981544000b5c29d381c7d.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>
    <div class="column smp">
      <div class="content">
      <img src="https://i.pinimg.com/originals/dc/be/8f/dcbe8f2b26cc2338a455f77e0b5d91fc.jpg" alt="" style="width:100%; height:150px">
      </div>
    </div>

    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/ae/77/7c/ae777c895cb940885edfa62de6e5ec1e.jpg" alt="" style="width:auto; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/31/fc/b6/31fcb6b741ca4626819dce85d878c82d.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/ef/3b/29/ef3b291ae170e14774c19c50b7a1452a.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/32/35/d7/3235d70bb6abc5825fa9fe2368337f45.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/92/e0/62/92e0621bb4fc6e144d46dc59f2250c19.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/3a/c4/80/3ac480ac866fa0858ef3903c7638633d.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/bd/e5/c4/bde5c41a2e6899146f1686bcaef453a6.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/b6/a2/4d/b6a24d467d8969b66fc0ae567fd78450.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
    <div class="column exo">
      <div class="content">
      <img src="https://i.pinimg.com/originals/c8/b0/13/c8b0131268aae0508634595894aee9a4.jpg" alt="" style="width:300px; height:300px">
      </div>
    </div>
  </div>
  
  </div>
  
  <script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }
  
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }
  
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
  
  
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>

<!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

  </body>
</html>
