<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

     <!-- my Css-->
     <link href="../css/home.css" rel="stylesheet" >
  

    <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <a class="navbar-brand" href="#">TRIP2TRIP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <a class="nav-item nav-link" href="#">Login</a>
            <a class="nav-item nav-link" href="#">Sign Up</a>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- end off navbar -->

    <!-- JumboTron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 font-weight-bold">Mengapa repot-repot mencari hotel saat kami dapat membantu Anda?
                              Temukan beragam pilihan akomodasi, promo eksklusif, dan penawaran
                              spesial di website travel agent kami.</h1>
      </div>
    </div>

    <!-- end off jumbotron -->

    

    <!-- container -->

    <!-- Booking Panel -->
    <div class="container justify-content-center">
          <div class="col-10 booking-panel">
            <div class="row">
                <div class="col-lg">
                  <p>Tanggal</p>
                  <h5>Check In</h5>
                  <p><input type="date" id="ci"></p>
                </div>
                <div class="col-lg">
                  <p>Tanggal</p>
                  <h5>Check Out</h5>
                  <p><input type="date" id="co"></p>
                </div>
                <div class="col-lg">
                    <label for="select">Pilih</label>
                    <h5>Jumlah Kamar</h5>
                    <select id="select">
                      <option value="">...</option>
                      <optgroup label="ketik dalam jumlah lain">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                 
                </div>
                <div class="col-lg">
                  <p>Pilih</p>
                  <h5>Kota Tujuan</h5>
                  <p><input type="text" id="kota" placeholder="Kuta Selatan.."></p>
                </div>
                <div class="col-lg">
                  <p>  </p>
                  <h5>Book Sekarang</h5>
                  <p><button type="button" href="#" class="btn btn-primary" style="width: 140px" >Cari</button></p>
                </div>
            </div>
          </div>
      </div>
        <!-- end of booking panel -->

    <!-- Rekomendasi Panel -->
      <div class="container justify content-center" >
        <div class="row high-light">
          <div class="col">
            <p>Mau Kemana Kita Hari ini ?</p>
          </div>
        </div>
      </div>
      
      <div class="container content-center" >
        <div class="col box-1">
          <div class="row">
          <img src="img/box1.jpg" alt="Responsive image" class="img-fluid" style="width:375px ; height:264px ; border-radius:30px ">
          <h5>AYANA RESORT BALI</h5>
          <p>AYANA’s majestic sunsets and ocean-front views are complemented by a white-sand beach and shared facilities as Bali’s only integrated resort with RIMBA by AYANA Bali. </p>
          </div>
      </div>

      <div class="container content-center" >
        <div class="col box-2">
          <div class="row">
          <img src="img/box1.jpg" alt="Responsive image" class="img-fluid" style="width:375px ; height:264px ; border-radius:30px ">
          <h5>AYANA RESORT BALI</h5>
          <p>AYANA’s majestic sunsets and ocean-front views are complemented by a white-sand beach and shared facilities as Bali’s only integrated resort with RIMBA by AYANA Bali. </p>
          </div>
      </div>

      <div class="container content-center" >
        <div class="col box-3">
          <div class="row">
          <img src="img/box1.jpg" alt="Responsive image" class="img-fluid" style="width:375px ; height:264px ; border-radius:30px ">
          <h5>AYANA RESORT BALI</h5>
          <p>AYANA’s majestic sunsets and ocean-front views are complemented by a white-sand beach and shared facilities as Bali’s only integrated resort with RIMBA by AYANA Bali. </p>
          </div>
      </div>

      <div class="container content-center" >
        <div class="col box-4">
          <div class="row">
          <img src="img/box1.jpg" alt="Responsive image" class="img-fluid" style="width:375px ; height:264px ; border-radius:30px ">
          <h5>AYANA RESORT BALI</h5>
          <p>AYANA’s majestic sunsets and ocean-front views are complemented by a white-sand beach and shared facilities as Bali’s only integrated resort with RIMBA by AYANA Bali. </p>
          </div>
      </div>

      <div class="container content-center" >
        <div class="col box-5">
          <div class="row">
          <img src="img/box1.jpg" alt="Responsive image" class="img-fluid" style="width:375px ; height:264px ; border-radius:30px ">
          <h5>AYANA RESORT BALI</h5>
          <p>AYANA’s majestic sunsets and ocean-front views are complemented by a white-sand beach and shared facilities as Bali’s only integrated resort with RIMBA by AYANA Bali. </p>
          </div>
      </div>

      <div class="container content-center" >
        <div class="col box-6">
          <div class="row">
          <img src="img/box1.jpg" alt="Responsive image" class="img-fluid" style="width:375px ; height:264px ; border-radius:30px ">
          <h5>AYANA RESORT BALI</h5>
          <p>AYANA’s majestic sunsets and ocean-front views are complemented by a white-sand beach and shared facilities as Bali’s only integrated resort with RIMBA by AYANA Bali. </p>
          </div>
      </div>

      <div class="container justify content-center" >
        <div class="row high-light">
          <div class="col">
          <button type="button" class="btnSelengkapnya btn-primary btn-lg btn-block">Selengkapnya Disini</button>
          </div>
      </div>
    <!-- end off rekomendasi panel -->

    <!-- Panel Kota rekomendasi -->

    <div class="container justify content-center" >
        <div class="row rekomen-kota">
          <div class="col">
            <h6>lebih dari <span>100++ </span> orang mencari dan </h6>
            <h6>rekomendasikan kota kota berikut</h6>
          </div>
        </div>
    </div>

    <div class="kotarekomen container justify-content-center">
          <div class="col-12 autogrup">
            <div class="row">
                <div class="col-lg auto-group-pkzr-F17">
                <div class="col lg group-2-9MP">PANTAI</div>
                <div class="col-lg group-3-axV">BUKIT &amp; PERSAWAHAN</div>
                <div class="col-lg group-4-eBf">ATRAKSI</div>
                <div class="col-lg group-5-7Df">TERMURAH</div>
            </div>
          </div>
      </div>
          <!-- <div class="auto-group-kayt-PBB">
            <div class="group-6-gRB">PANTAI</div>
            <div class="group-9-MGR">BUKIT &amp; PERSAWAHAN</div>
            <div class="group-7-x1K">ATRAKSI</div>
            <div class="group-8-DT3">TERMURAH</div>
          </div>
          <div class="auto-group-rpso-fpq">
            <div class="group-10-bTb">PANTAI</div>
            <div class="group-13-fyF">BUKIT &amp; PERSAWAHAN</div>
            <div class="group-11-Scd">ATRAKSI</div>
            <div class="group-12-WMb">TERMURAH</div>
          </div> -->
      </div>
    </div>

    <!-- end ofPanel Kota rekomendasi -->

    <!-- end of container -->
        

    

       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 
