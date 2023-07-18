<?php
 include('session.php');
?>
<!DOCTYPE html>
<head>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Akhir Bootstrap -->

    <link href="berita.css" rel="stylesheet" />

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
    </style>
    <!-- Akhir CSS  -->

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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>

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

<section style="top: 50%; left: 50%; transform: translate(-10%, 10%); margin-bottom: -800px;">
<h1 style="top: 50px; bottom: 50px; margin-left: 775px;">Jadwal Kelas <?php echo $rows['Kelas']?></h1><br>
<table border="1" class="tg" style="table-layout: fixed; width: 1085px; top: 50px; bottom: 50px; margin-left: 375px;">
<colgroup>
<col style="width: 85.88889px">
<col style="width: 140.88889px">
<col style="width: 330.88889px">
<col style="width: 62.88889px">
<col style="width: 219.77778px">
<col style="width: 97.88889px">
<col style="width: 146.88889px">
</colgroup>
<thead>
  <tr>
    <th class="tg-7btt">Hari</th>
    <th class="tg-7btt">Waktu</th>
    <th class="tg-7btt">MATAKULIAH</th>
    <th class="tg-7btt">Sks</th>
    <th class="tg-7btt">Dosen</th>
    <th class="tg-7btt">Kode GCR</th>
    <th class="tg-7btt">NO. Kontak</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-c3ow" rowspan="2">SENIN</td>
    <td class="tg-c3ow">08.00 - 10.30</td>
    <td class="tg-c3ow">Pemrograman Web</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">Avip Kurniawan, ST, MKom</td>
    <td class="tg-7btt">f277uoa</td>
    <td class="tg-c3ow">081314146783</td>
  </tr>
  <tr>
    <td class="tg-c3ow">13.00 - 15.30</td>
    <td class="tg-c3ow">Grafika Komputer</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">Moch Fachri, ST, MT</td>
    <td class="tg-7btt">upjla37</td>
    <td class="tg-c3ow">087851268222</td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="2">SELASA</td>
    <td class="tg-c3ow">08.00 - 09.30</td>
    <td class="tg-c3ow">Pend. BHS. Inggris 2</td>
    <td class="tg-c3ow">2</td>
    <td class="tg-c3ow">DRS. Anwar Sihombing, MPd</td>
    <td class="tg-7btt">5xemifb</td>
    <td class="tg-c3ow">085393812920</td>
  </tr>
  <tr>
    <td class="tg-c3ow">10.00 - 12.30</td>
    <td class="tg-c3ow">Basis Data Lanjutan</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">Ali Khumaidi, MKom</td>
    <td class="tg-7btt">qkhvxt4</td>
    <td class="tg-c3ow">081380096459</td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="2">RABU</td>
    <td class="tg-c3ow">11.00 - 13.30</td>
    <td class="tg-c3ow">Teori Graf dan Otomata</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">Agustina Indrawati, SSi, MSi</td>
    <td class="tg-7btt">bb65ich</td>
    <td class="tg-c3ow">087771510356</td>
  </tr>
  <tr>
    <td class="tg-c3ow">15.00 - 10.30</td>
    <td class="tg-c3ow">Statistika dan Probabilitas</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">Tri Hartati, SKom, MKom</td>
    <td class="tg-7btt">4ekvjcs</td>
    <td class="tg-c3ow">085871472556</td>
  </tr>
  <tr>
    <td class="tg-c3ow">KAMIS</td>
    <td class="tg-c3ow">08.00 - 10.30</td>
    <td class="tg-c3ow">Komputasi Cerdas</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">Ali Khumaidi, MKom</td>
    <td class="tg-7btt">ese4vc2</td>
    <td class="tg-c3ow">081380096469</td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="3">Praktikum Pemrograman Web</td>
    <td class="tg-c3ow">1</td>
    <td class="tg-c3ow">Lab Komputer</td>
    <td class="tg-c3ow"></td>
    <td class="tg-c3ow"></td>
  </tr>
</tbody>
</table>

<?php 
// close while loop 
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</section>

<!-- footer -->
<footer>
    <div class="container-footer" style="bottom: 0; position: absolute; width: 100%; height: 100px;">
      <div class="container-foot">
        <footer class="py-3 my-4">
          <p class="text-center text-muted copyrightText">Copyright &copy; 2021 ELID - All Rights Reserved.</p>
        </footer>
      </div>
    </div>
</footer>
<!-- akhir footer -->

<!--Script Burger -->
<script>
  (function () {
    'use strict';

    document.querySelector('#navbarSideCollapse').addEventListener('click', function () {
      document.querySelector('.offcanvas-collapse').classList.toggle('open');
    });
  })();
</script>
<!--Akhir Script Burger -->

</body>
</html>
