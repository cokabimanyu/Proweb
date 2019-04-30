<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/landingpage.css') }}">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet">


    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active warna" href="#">Home <span class="sr-only">(current)</span></a>
                <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Article
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="artikel.php">Culture</a>
                        <a class="dropdown-item" href="artikel.php">Law</a>
                      </div>
                </li>
                <a class="nav-item nav-link" href="author.html">Author</a>
              </div>
            </div>
        </div>
          </nav>
    <!-- Akhir Navbar -->



    <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            
              <img src="img/io.png" alt="">
                <h1 class="display-4">Welcome to My Website</h1>
            
        </div>
    <!-- Akhir Jumbotron -->

    <!-- Tampilan Profil -->
        <div class="profil text-center">
            <h1>My Profile</h1>
            <img src="img/office-1571931_960_720.jpg" alt="" class="rounded-circle">
            <p>Putu Bagus Dananjaya <br>(Author)</p>
            <p>Be clear and content. Be moderate and wise. <br> Be vigilant and steady. Be earnest and sweet.</p>
            <div class="buttone text-center">
              <a href="author.html" class="btn btn-outline-dark tombol">View My Profile</a>
            </div>
        </div>
    <!-- Akhir Profil -->

    <!-- Artikel -->
        <section class="portofolio" id="portofolio">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2>My Article</h2>
                <hr>
              </div>
            </div>
          

            <div class="row">
              <div class="col-sm-4 text-center">
                <a href="">
                  <img src="img/office-1571931_960_720.jpg" class="img-thumbnail">
                  <p>Keterangan</p>
                </a>
              </div>

              <div class="col-sm-4 text-center">
                <a href="">
                  <img src="img/office-1571931_960_720.jpg" class="img-thumbnail">
                  <p>Keterangan</p>
                </a>
              </div>

              <div class="col-sm-4 text-center">
                <a href="">
                  <img src="img/office-1571931_960_720.jpg" class="img-thumbnail">
                  <p>Keterangan</p>
                </a>
              </div>
            </div>
          </div>
        </section>

        <div class="buttone text-center">
          <a href="law.html" class="btn btn-outline-dark tombol">Law Article</a>
          <a href="culture.html" class="btn btn-outline-dark tombol">Culture Article</a>
        </div>
    <!-- Akhir Artikel -->

    <!-- Footer -->
    <div class="card-footer text-muted foter">
      <div class="container">
        <p>Be clear and content. Be moderate and wise. Be vigilant and steady. Be earnest and sweet.</p>
        <p>Copyright ByasaWritten2019</p>
      </div>
    </div>
    <!-- Footer -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>