<?php
session_start();
include('../../koneksi.php');
if ($_SESSION['level'] == 'admin') {

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Admin Sistem Pendukung Keputusan Sepatu Bola</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="../assets/css/main.css">
        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="../assets/css/demo.css">
        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- ICONS -->
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            <!-- NAVBAR -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="brand">
                    Admin
                </div>
                <div class="container-fluid">
                    <div id="navbar-menu">
                    </div>
                </div>
            </nav>
            <!-- END NAVBAR -->
            <?php
            $username = $_SESSION['username'];
            $query = mysqli_query($con, "SELECT * FROM user where username='$username'");
            $user = mysqli_fetch_array($query);
            ?>
            <!-- LEFT SIDEBAR -->
            <div id="sidebar-nav" class="sidebar">
                <div class="sidebar-scroll">
                    <nav>
                        <ul class="nav">
                            <li><a href="../index.php"><i class="lnr lnr-home"></i> <span>Daftar Sepatu</span></a></li>
                            <li><a href="../pages/datasepatu.php" class="active"><i class="lnr lnr-file-empty"></i> <span>CRUD Sepatu</span></a></li>
                            <li><a href="../../proses_logout.php" class=""><i class="lnr lnr-home"></i> <span>Logout</span></a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- END LEFT SIDEBAR -->
            <!-- MAIN -->
            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="col-md-12">

                          

                            <button type="button" href="datasepatu.php" class="close">&times;</button>
                            <h4 style="text-align: center; margin: bottom 10px;">Tambah Data Sepatu</h4>
                        </div>
                        <form method="post" name="tambah_sepatu" action="proses_tambah.php">


                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">ID Sepatu</label>
                                <div class="col-sm-9">
                                    <?php function id_sepatu($limit)
                                    {
                                        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
                                    }
                                    ?>
                                    <input type="text" class="form-control" name="id_sepatu" placeholder="ID Sepatu Anda" value="<?php echo id_sepatu(3); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Merk Sepatu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="merk_sepatu" placeholder="Merk Sepatu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Jenis Sepatu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tipe_sepatu" placeholder="Jenis Sepatu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Gambar Sepatu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="gambar_sepatu" placeholder="Url Gambar">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Harga Sepatu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="harga_sepatu" placeholder="Harga">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Kriteria Harga</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_harga_nilai" name="harga" class="form-control">
                                        <option value="-">Masukan Nilai Kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "select * from kriteria_harga");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                            <option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai'] ?>-<?php echo $data['nama_range'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Bobot Harga</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_bobot_harga" name="harga_B" class="form-control">
                                        <option value="-">Masukan bobot kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM kriteria_bobot_harga INNER JOIN kriteria_harga ON kriteria_bobot_harga.nilai_kriteria_harga=kriteria_harga.nilai");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>


                                            <option id="kriteria_bobot_harga" class="<?php echo $data['nilai_kriteria_harga']; ?>" value="<?php echo $data['bobot_kriteria_harga'] ?>"><?php echo $data['bobot_kriteria_harga'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Jenis Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jenis_type" placeholder="Jenis Type">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Kriteria Type</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_type_nilai" name="type" class="form-control">
                                        <option value="-">Masukan Nilai Kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "select * from kriteria_type");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                            <option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai'] ?>-<?php echo $data['nama_range'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Bobot Type</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_bobot_type" name="bobot_type" class="form-control">
                                        <option value="-">Masukan bobot kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM kriteria_bobot_type INNER JOIN kriteria_type ON kriteria_bobot_type.nilai_kriteria_type=kriteria_type.nilai");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>


                                            <option id="kriteria_bobot_type" class="<?php echo $data['nilai_kriteria_type']; ?>" value="<?php echo $data['bobot_kriteria_type'] ?>"><?php echo $data['bobot_kriteria_type'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jenis_material" placeholder="Bahan Material">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Kriteria Material</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_material_nilai" name="material" class="form-control">
                                        <option value="-">Masukan Nilai Kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "select * from kriteria_material");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                            <option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai'] ?>-<?php echo $data['nama_range'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Bobot Material</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_bobot_material" name="bobot_material" class="form-control">
                                        <option value="-">Masukan bobot kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM kriteria_bobot_material INNER JOIN kriteria_material ON kriteria_bobot_material.nilai_kriteria_material=kriteria_material.nilai");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>


                                            <option id="kriteria_bobot_material" class="<?php echo $data['nilai_kriteria_material']; ?>" value="<?php echo $data['bobot_kriteria_material'] ?>"><?php echo $data['bobot_kriteria_material'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Wegiht</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jenis_weight" placeholder="Wegiht">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Kriteria Weight</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_weight_nilai" name="weight" class="form-control">
                                        <option value="-">Masukan Nilai Kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * from kriteria_weight");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                            <option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai'] ?>-<?php echo $data['nama_range'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Bobot Weight</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_bobot_weight" name="bobot_weight" class="form-control">
                                        <option value="-">Masukan bobot kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM kriteria_bobot_weight INNER JOIN kriteria_weight ON kriteria_bobot_weight.nilai_kriteria_weight=kriteria_weight.nilai");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>


                                            <option id="kriteria_bobot_weight" class="<?php echo $data['nilai_kriteria_weight']; ?>" value="<?php echo $data['bobot_kriteria_weight'] ?>"><?php echo $data['bobot_kriteria_weight'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jenis_position" placeholder="Position">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Kriteria Position</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_position_nilai" name="position" class="form-control">
                                        <option value="-">Masukan Nilai Kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * from kriteria_position");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                            <option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai'] ?>-<?php echo $data['nama_range'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Bobot Position</label>
                                <div class="col-sm-9">
                                    <select id="kriteria_bobot_position" name="bobot_position" class="form-control">
                                        <option value="-">Masukan bobot kriteria</option>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM kriteria_bobot_position INNER JOIN kriteria_position ON kriteria_bobot_position.nilai_kriteria_position=kriteria_position.nilai");
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option id="kriteria_bobot_position" class="<?php echo $data['nilai_kriteria_position']; ?>" value="<?php echo $data['bobot_kriteria_position'] ?>"><?php echo $data['bobot_kriteria_position'] ?></option>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>


                        <!-- END MODAL TAMBAH -->




                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2021 .Gerald Arrivaldo. 00000020733.</p>
            </div>
        </footer>
        </div>
        <!-- END WRAPPER -->
        <!-- Javascript -->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/scripts/klorofil-common.js"></script>
        <script src="../assets/js/jquery.chained.min.js"></script>
        <script>
            $("#kriteria_bobot_harga").chained("#kriteria_harga_nilai");
            $("#kriteria_bobot_type").chained("#kriteria_type_nilai");
            $("#kriteria_bobot_material").chained("#kriteria_material_nilai");
            $("#kriteria_bobot_weight").chained("#kriteria_weight_nilai");
            $("#kriteria_bobot_position").chained("#kriteria_position_nilai");
        </script>
    </body>

    </html>
<?php } else {
    echo "<script>alert('anda harus login')</script>";
    echo "<script>location.href='../../index.php'</script>";
} ?>