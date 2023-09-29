<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pendukung Keputusan SAW</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">SMARTPHONE CHOICER 

                </a>
            </div>

            <div class="notifications-wrapper">
              
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/adam.jpg" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> Muhammad Adam </strong></a>
                    </li>

                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="alternatif.php"><i class="fa fa-venus "></i>Alternatif</a>
                        
                    </li>
                    
                    <li>
                        <a href="kriteria.php"><i class="fa fa-bolt "></i>Kriteria</a>
                        
                    </li>
                   
                     
                     <li>
                        <a href="subkriteria.php"><i class="fa fa-code "></i>Sub Kriteria</a>
                    </li>
                   
                    <li>
                        <a href="normalisasi.php"><i class="fa fa-dashcube "></i>Normalisasi</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="perhitungan.php"><i class="fa fa-dashcube "></i>Perhitungan</a>
                    </li>
                    <li>
                        <a href="kesimpulan.php"><i class="fa fa-dashcube "></i>Kesimpulan</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Perhitungan</h1>
                    </div>
                </div>
                
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Perhitungan Pemilihan Smartphone
                        </div>
                        <div class="panel-body">
                    <form action="perhitungan_hasil.php" method="post" name="form1">
                        <table width="25%" border="0">
                            <div class="form-group">
                                <label>C1. Harga</label>
                                <div>
                                    <select name="bobot_harga" class="form-control">
                                        <option value="1">Sangat Rendah</option>
                                        <option value="2">Rendah</option>
                                        <option value="3">Cukup</option>
                                        <option value="4">Tinggi</option>
                                        <option value="5">Sangat Tinggi</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label>C2. RAM</label>
                                <div>
                                    <select name="bobot_ram" class="form-control">
                                        <option value="1">Sangat Rendah</option>
                                        <option value="2">Rendah</option>
                                        <option value="3">Cukup</option>
                                        <option value="4">Tinggi</option>
                                        <option value="5">Sangat Tinggi</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label>C3. Memory Internal</label>
                                <div>
                                    <select name="bobot_rom" class="form-control">
                                        <option value="1">Sangat Rendah</option>
                                        <option value="2">Rendah</option>
                                        <option value="3">Cukup</option>
                                        <option value="4">Tinggi</option>
                                        <option value="5">Sangat Tinggi</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label>C4. Camera</label>
                                <div>
                                    <select name="bobot_camera" class="form-control">
                                        <option value="1">Sangat Rendah</option>
                                        <option value="2">Rendah</option>
                                        <option value="3">Cukup</option>
                                        <option value="4">Tinggi</option>
                                        <option value="5">Sangat Tinggi</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label>C5. Resolusi Layar</label>
                                <div>
                                    <select name="bobot_layar" class="form-control">
                                        <option value="1">Sangat Rendah</option>
                                        <option value="2">Rendah</option>
                                        <option value="3">Cukup</option>
                                        <option value="4">Tinggi</option>
                                        <option value="5">Sangat Tinggi</option>
                                    </select>
                                    
                                </div>
                            </div>

                            <tr> 
                                <td><input type="submit" name="simpan" value="Execute" class="btn btn-primary btn-sm"></td>
                                
                            </tr>
                        </table>
                    </form>
                    
    </div>
                    
            <!-- /. PAGE INNER  -->
        </div>
    </div>
        </div>
    </div>
    </div>
<footer>
    &copy; 2018 Poltekpos | By : <a href="#" target="_blank">Muhammad Adam Nahdlotul Halimi</a>
</footer>
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>