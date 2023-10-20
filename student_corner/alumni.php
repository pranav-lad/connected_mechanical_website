<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Icon -->
  <link href="../vender/img/logo/PCCOE_LOGO_b.jpg" rel="shortcut icon" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="../vender/css/bootstrap.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
  <link href="../vender/css/navbar.css" rel="stylesheet" />
  <link href="../vender/css/style1.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Icon Link -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- PCCOE HEADER FOOTER CSS FILE -->
  <link rel="stylesheet" href="../imp-pccoe-style.css" type="text/css" />
  <title>Admission | Student Corner | Department of Mechanical Engineering at PCCOE</title>
  <style>
    /* Slideshow container */
    .slideshow-container {
      max-width: 700px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.5s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 3s;
      animation-name: fade;
      animation-duration: 3s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
</head>

<body>
  <!-- Start Header -->
  <?php include("../pccoe-header.php"); ?>
  
  <br><br>
  <section class="p-3 bg-light">
  <div class="container">
      <div class="row border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark mt-4">
          <h2>Grand Alumni Meet 2023</h2>
      </div>
    </div>
    <div class="container-lg bg-light">
      <br>

      <!-- ---------------------------- -->
      <div class="gallery">
          <img src="img/alumini/img (1).JPG" title="TITLE 1">
          <img src="img/alumini/img (2).JPG" title="TITLE 1">
          <img src="img/alumini/img (3).JPG" title="TITLE 2">
          <img src="img/alumini/img (4).JPG" title="TITLE 2">
          <img src="img/alumini/img (5).JPG" title="TITLE 3">
          <img src="img/alumini/img (6).JPG" title="TITLE 3">
          <img src="img/alumini/img (7).JPG" title="TITLE 4">
          <img src="img/alumini/img (8).JPG" title="TITLE 4">
          <img src="img/alumini/img (9).jpg" title="TITLE 5">
          <img src="img/alumini/img (10).jpg" title="TITLE 5">
          <img src="img/alumini/img (11).jpg" title="TITLE 6">
          <img src="img/alumini/img (12).jpg" title="TITLE 6">
          <img src="img/alumini/img (13).JPG" title="TITLE 6">
          <img src="img/alumini/img (14).JPG" title="TITLE 6">
          <!-- <img src="img/alumini/img (15).JPG" title="TITLE 6"> -->
      <!-- ---------------------------- -->
      
    </div>
    </div>
  </section>
  <!-- ----------------------------------------------- Gallery ----------------------------------------------- -->

  </div>

  <style>
    .gallery {
      /* (B1) GRID LAYOUT - 3 IMAGES PER ROW */
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;

      /* (B2) OPTIONAL WIDTH RESTRICT */
      max-width: 1000px;
      margin: 0 auto;
      overflow: hidden;
    }

    .gallery img {
      /* (C1) DIMENSION */
      width: 100%;
      height: 250px;
      /* optional */
      padding: 10px;

      /* (C2) COLORS */
      border: 1px solid #ddd;
      background: #fff;

      /* (C3) IMAGE RESIZE */
      /* cover | contain | fill | scale-down */
      object-fit: contain;
      position: relative;
    }

    /* (D) ON SMALL SCREENS - 2 IMAGES PER ROW */
    @media only screen and (max-width: 600px) {
      .gallery {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* (E) OPTIONAL ZOOM ON HOVER */
    .gallery img:hover {
      z-index: 9;
      transform: scale(1.3);
      /* linear | ease | ease-in | ease-out | ease-in-out */
      transition: transform ease 0.5s;
    }

    .gallery img.full {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 999;
      width: 100vw;
      height: 100vh;
      object-fit: fit;
      background: rgba(0, 0, 0, 0.7);
    }

    .gallery img.full:hover {
      z-index: 999;
      transform: none;
    }
  </style>
  <script>
    window.onload = () => {
      for (let i of document.querySelectorAll(".gallery img")) {
        i.onclick = () => i.classList.toggle("full");
      }
    };
  </script>

  <!-- ----------------------------------------------- Gallery ----------------------------------------------- -->


  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2500); // Change image every 2 seconds
    }
  </script>

  <?php include("../pccoe-footer.php"); ?>
  <!-- End footer -->
  <script src="../vender/js/bootstrap.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <!-- <script src="vender/js/navbar.js"></script> -->

</body>

</html>