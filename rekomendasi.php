<!DOCTYPE html>
<html>

<head>
    <title>Sistem Pendukung Keputusan Sepatu Bola</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import jQuery before materialize.js-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div class="container">

                <div class="nav-wrapper">

                    <!-- <img src="assets/image/logo.png" style="height: 35px; width: auto; margin-top: 12px"> -->
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active" href="rekomendasi.php">Rekomendasi</a></li>
                        <li><a href="daftarsepatu.php">Daftar Sepatu Bola</a></li>
                        <li><a href="about.php">About</a></li>
                        <ul class="right hide-on-med-and-down">
                            <li><a class="waves-effect waves-light btn" href="login.php">Login</a></li>
                        </ul>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
    <!-- Body Start -->




    <!-- Daftar Sepatu Start -->
    <div style="background-color: #FBF37C">
        <div class="container">
            <div class="section-card" style="padding: 50px 0px">
                <!--   Icon Section   -->
                <center>
                    <h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73">REKOMENDASI SEPATU</h4>
                </center><br><br><br>
                <ul>
                    <li>

                        <div class="row">
                            <div class="col s12">
                                <div class="card">

                                    <div class="card-body">

                                        <center>
                                            <h4>Masukan Kriteria</h4>
                                        </center>
                                        <br><br><br>
                                        <form class="col s12" method="POST" action="proses_hasil.php">



                                            <div>
                                                <select required name="harga" class="form-select" aria-label="Default select example">
                                                    <option value="" disabled selected>Kriteria Harga</option>
                                                    <option value="5">Dibawah 2 juta</option>
                                                    <option value="4">2.000.000 - 2.500.000</option>
                                                    <option value="3">2.500.001 - 3.500.000</option>
                                                    <option value="2">3.500.001 - 4.000.000</option>
                                                    <option value="1">Diatas 4 juta</option>

                                                </select>
                                            </div>


                                            <div>
                                                <select required name="type" class="form-select" aria-label="Default select example">
                                                    <option value="" disabled selected>Kriteria Type</option>
                                                    <option value="1">Control</option>
                                                    <option value="2">Heritage</option>
                                                    <option value="3">Speed</option>
                                                    <option value="4">Agility</option>
                                                    <option value="5">Striking</option>
                                                </select>
                                            </div>




                                            <div>
                                                <select required name="material" class="form-select" aria-label="Default select example">
                                                    <option value="" disabled selected>Kriteria Material</option>
                                                    <option value="1">Taurus Leather</option>
                                                    <option value="2">Synthetic</option>
                                                    <option value="3">Knit</option>
                                                    <option value="4">PrimeKnit</option>
                                                    <option value="5">FlyKnit</option>
                                                </select>
                                            </div>


                                            <div>
                                                <select required name="weight" class="form-select" aria-label="Default select example">
                                                    <option value="" disabled selected>Kriteria Weight</option>
                                                    <option value="2">100 - 200 grams</option>
                                                    <option value="1">200 - 300 grams</option>

                                                </select>
                                            </div>





                                            <div>
                                                <select required name="position" class="form-select" aria-label="Default select example">
                                                    <option value="" disabled selected>Kriteria Position</option>

                                                    <option value="1">Defence</option>
                                                    <option value="2">MidField</option>
                                                    <option value="3">Attack</option>

                                                </select>
                                            </div>



                                    </div>
                                    <center><button type="submit" style="margin-bottom: 10px;" class="waves-effect waves-light btn">Recomendation</button></center>
                                    </form>

                                </div>
                            </div>
                        </div>
            </div>
            </li>
            </ul>
        </div>
    </div>
    </div>
    <!-- Rekomendasi Sepatu End -->
    <!-- Body End -->

    <!-- Footer Start -->
    <div class="footer-copyright" style="padding: 30px 0px; background-color: white">
        <div class="container">
            <center>
                <!-- <img src="assets/image/logo.png" style="height: 40px; width: auto; margin-top: 12px"> -->
            </center>
            <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sepatu Bola - Gerald Arrivaldo</p>
        </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.parallax').parallax();
            $('select').material_select();
            $('.modal').modal();
        });
    </script>
</body>

</html>