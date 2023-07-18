<?php
 include('session.php');
?>
<!DOCTYPE html>
<head>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Akhir Bootstrap -->

    <!-- CSS  -->
    <style>
      @media (max-width: 991.98px) {
        .offcanvas-collapse {
          position: fixed;
          top: 75px; /* Height of navbar */
          left: 100%;
          width: 100%;
          padding-right: 1rem;
          padding-left: 1rem;
          overflow-y: auto;
          visibility: hidden;
          background-color: #073c64;
          transition: transform 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }
        .offcanvas-collapse.open {
          visibility: visible;
          transform: translateX(-100%);
        }
      }

      /* Navbar */
      #Navbar {
        z-index: 9999;
        position: fixed;
        background-color: #073c64;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
      }

      #navmenu:hover::after {
        content: '';
        display: block;
        border-bottom: 2px solid #ff8c00;
        width: 80%;
        margin: auto;
        padding-bottom: 2px;
        margin-bottom: -4px;
      }

      #navmenu {
        color: white;
        margin: auto;
        text-align: center;
        text-decoration: none;
        font-family: 'Comfortaa', cursive;
      }

      #navbarDropdown {
        color: white;
        margin: auto;
        text-align: center;
        text-decoration: none;
        font-family: 'Comfortaa', cursive;
        cursor: pointer;
      }

      .nav-log {
        margin: auto;
        width: 80px;
        height: 40px;
        border: 1px solid #fff;
        border-radius: 10px;
        padding-top: 7px;
        padding-left: 7px;
        margin-right: 10px;
      }

      .container-footer {
        background-color: #073c64;
        margin-top: auto;
      }

      body {
        display: flex;
        flex-direction: column;
        min-height: 100%;
      }

      html {
        height: 100%;
      }
    </style>
    <!-- Akhir CSS -->

    <!-- Style -->
    <link href="berita.css" rel="stylesheet" />
    <!-- Akhir Style -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
    <link href="//db.onlinewebfonts.com/c/961a181da27e7cbc072ec2fb5bbfe2a9?family=Circular+Std+Bold" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet" />
    <link href="https://use.typekit.net/emv3zbo.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- Akhir Font -->

	  <title>Simak Unkris</title>
</head>

<body>
<?php
$sql="SELECT * FROM mhs where nim=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script src="./script.js"></script>

<!-- Navbar -->
<header>
  <section id="navbar">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bgcolor" id="Navbar">
        <div class="container-fluid me-5 ms-5">
          <a class="navbar-brand" href="../index.html"><img src="img/logo2.png" alt="logo" width="200" /></a>
          <button
            class="navbar-toggler p-0 border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            id="navbarSideCollapse">
            <span class="navbar-toggler-icon navbar-toggler-icon-light">
              <i class="fas fa-bars" style="color: #fff; font-size: 28px"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link me-3" id="navmenu" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3" id="navmenu" href="akademika.php">Akademika</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3" id="navmenu" href="matkul.php">Mata Kuliah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3" id="navmenu" href="jadwal.php">Jadwal</a>
              </li>
              <li class="nav-item nav-log">
                <a class="me-3" href="../index.html" style="color: white; margin: auto; text-align: center; text-decoration: none; font-family: 'Comfortaa', cursive;">LOGOUT</a>  
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </section>
</header>
<br>
<br>
<br>
<br>
<br>
<!-- Akhir Navbar -->

        <div class="container emp-profile" style="margin: auto; margin-left: 265px; margin-top: 50px" >
            <form method="post">
                <div class="row justify-content-center" >
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <div style="margin: auto; margin-left: -550px; margin-bottom: 30px; margin-top: -80px;">
                        <img class="rounded-circle md-4 img-thumbnail shadow-lg mt-5" alt="foto" src="img/Iqbal.jpg" data-holder-rendered="true" width="250" style="margin: auto; margin-left: 415px; margin-bottom: 30px">
                                    <h5 style="margin: auto; margin-left: 505px; margin-bottom: -10px;">
                                      <?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?>
                                    </h5>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" style="margin: auto; margin-bottom: 50px; margin-right: 150px">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NIM</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows['nim'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows['address']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telepon</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows['nohp']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Fakultas</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows['fklts']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jurusan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $rows['nama_jurusan']?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
<?php 
// close while loop 
}
?>
<br>

<!-- footer -->
<footer>
    <div class="container-footer" style="position: absolute; width: 100%; height: 100px;">
      <div class="container-foot">
        <footer class="py-3 my-4">
          <p class="text-center text-muted copyrightText">Copyright &copy; 2021 ELID - All Rights Reserved.</p>
        </footer>
      </div>
    </div>
</footer>
<!-- akhir footer -->

<!-- Script Burger -->
<script>
      (function () {
        'use strict';

        document.querySelector('#navbarSideCollapse').addEventListener('click', function () {
          document.querySelector('.offcanvas-collapse').classList.toggle('open');
        });
      })();
</script>
<!-- Akhir Script Burger -->

</body>
</html>
