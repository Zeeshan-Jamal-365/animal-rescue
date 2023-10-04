<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Animal rescue & welfare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">PROTECT PETS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rescue
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Post</a>
              <a class="dropdown-item" href="#">News</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Information
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Food</a>
              <a class="dropdown-item" href="#">Vaccine</a>
              <a class="dropdown-item" href="#">Vets</a>
              <a class="dropdown-item" href="take_care/cat/cat.html">How to take care of Cats</a>
              <a class="dropdown-item" href="take_care/dog/dog.html">How to take care of Dogs</a>
              <a class="dropdown-item" href="#">Study</a>

            </div>

          </div>


          <li class="nav-item">
            <a class="nav-link" href="user/login.php">User login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user/register.php">User Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="volunteer/login.php">Volunteer login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="volunteer/register.php">Volunteer Registration</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="thanks.php">Thanks</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/animal.jpg" alt="Los Angeles" width="1000" height="500">
        <div class="carousel-caption">
          <h3>LOVE ANIMAL</h3>
          <p>Save animal serve community!</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/animal1.jpg" alt="" width="1000" height="500">
        <div class="carousel-caption">
          <h3>SAVE ANIMAL</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <footer>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <div class="container">
      <div class="sec aboutus m-right">
        <h2>About us</h2>
        <p>We provide websites for animal welfare. Our goal is provide safety for animals, a safe ecosystem. This is a nonprofit project. </p>
        <ul class="sci">
          <li><a href="https://www.facebook.com/Protect-Pets-105525271471970"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="sec quickLinks ml-auto">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="about_us/index.html">About</a></li>


        </ul>
      </div>
      <div class="w 30 ml-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>

    </div>

  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>