<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .full-bg {
      background-color: white;
      color: red;
      height: #FF3B3F;
    }

     .limiter {
  width: 360px;
  height: 640px;
  margin: 0 auto;
}


  </style>
  <title>HYPERLOKAL</title>
</head>


<body style="background-color:#FF3B3F;" id="bodyChange">
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- //Slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <br><br><br>
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" background: #fff></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner first-slide">
      <div class="carousel-item active" align="center"><br><br><br><br><br><br><br><br><br>
        <img class="img-fluid" src="images/logo_lokal_putih.png" alt="First slide">
        <br><br><br>
        <div class="d-flex justify-content-center">
          <h5 style="color: #ffffff">Selamat Datang di LOKAL</h5>
        </div> <br>
        <div class="d-flex justify-content-center">
          <P style="color: #ffffff; font-size: 12px"> Cari kerja dengan LOKAL aja </P>
          <br><br>
        </div>
      </div>
      <div class="carousel-item full-bg">
        <br><br>
        <img class="img-fluid" src="images/Page2.jpg" alt="Second slide"><br><br>
        <div class="d-flex justify-content-center">
          <h5 style="color: red" align="center">Buka lebar kesempatanmu dengan
            berbagai peluang karir di LOKAL</h5>
        </div>
        <div class="d-flex justify-content-center">
          <p style="color:red;font-size: 12px " align="center">Cara mudah peroleh rekomendasi pekerjaan tanpa takut
            hoaks serta mengelola profil dimana dan kapan Saja</p>
        </div>
      </div>
      <div class="carousel-item full-bg">
        <br><br>
        <img class="img-fluid" src="images/Page3.jpg" alt="Third slide"><br><br>
        <div class="d-flex justify-content-center">
          <h5 style="color: red" align="center">Yuk kembangkan karir berkualitas
            bersama LOKAL</h5>
        </div>
        <div class="d-flex justify-content-center">
          <p style="color:red;font-size: 12px " align="center">Temukan perusahaan terverifikasi, maksimalkan CV,
            serta tingkatkan skill di LOKAL Talk</p>
        </div>
      </div>
      <div class="carousel-item full-bg">
        <br><br>
        <img class="img-fluid" src="images/Page4.jpg" alt="fourth slide"><br><br>
        <div class="d-flex justify-content-center">
          <h5 style="color: red" align="center"> Segera daftarkan dirimu</h5>
        </div><br>
        <div class="d-flex justify-content-center">
          <p style="color:red;font-size: 12px " align="center">Ratusan pekerjaan Impian sedang menunggumu saat Ini.<br>
            tingkatan kemampuanmu untuk mendapatkan karier terbaik </p>
        </div>
      </div>
    </div>
    <br><br>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <br><br>
  </div>
  <!-- End-Slider -->
  <div class="d-flex justify-content-center">
    <a href="/login" class="btn btn-primary"
      style="border-radius:20px;width:275px; background-color: #3B96FF;color:white; border: 0px"> <strong> Mulai
      </strong> </a>
  </div>

  <div class="d-flex justify-content-center">
    <p style="font-size: 12px;color:red;">Belum Punya Akun? <a href="" class="link-warning">Registrasi Disini</a></p>
  </div>

  </div>



  <script>
    const carousel = document.getElementById('carousel-control-next-icon');
    const bodi = document.getElementById('bodyChange');
    const changebg = addEventListener('click', function () {
      bodi.style.backgroundColor = "white";
      bodi.style.color = "red";
      

    })
  </script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>