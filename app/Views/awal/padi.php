<?php

//Data Input
$Luas_Lahan = 1;
$vol_benih = 0.0035;
$harga_benih = 0.8;
$tt_benih = 28;
$vol_urea = 0.026;
$harga_urea = 0.25;
$tt_urea = 65;
$vol_TSP = 0.015;
$harga_TSP = 0.25;
$tt_TSP = 37.5;
$vol_KCL = 0.01;
$harga_KCL = 0.5;
$tt_KCL = 50;
$vol_ZA = 0.005;
$harga_ZA = 0.25;
$tt_ZA = 12.5;
$vol_PHONSKA = 0.025;
$harga_PHONSKA = 0.25;
$tt_PHONSKA = 62.5;
$vol_CORRIN = 0.0006;
$harga_CORRIN = 1.5;
$tt_CORRIN = 9;
$vol_BEA = 0.0006;
$harga_BEA = 1.5;
$tt_BEA = 9;
$vol_SAN = 0.002;
$harga_SAN = 2.7;
$tt_SAN = 54;
$vol_PT = 0.0005;
$harga_PT = 4.5;
$tt_PT = 22.5;
$vol_SNN = 0.001;
$harga_SNN = 2.8;
$tt_SNN = 28;
$vol_HORTIND = 0.0012;
$harga_HORTIND = 1.4;
$tt_HORTIND = 16.8;
$kerja = 1055;
$DEPRESIASI = 880.75;
$TOTAL_PENGELUARAN = 2330.55;
$TOTAL_VARIABLE = 1449.8;
$REVENUE = 4050;
$rcc = 0.0001737787218;
$Laba = 1719.45;
//end data input
$angka2 = @$_POST['tangka2'];
$hasil =  @$_POST['hasil'];


//uji jika tombol kali diklik
{
    $hasil1 = $vol_benih * $angka2;
    $hasil2 = $harga_benih * $angka2;
    $hasil3 = $tt_benih * $angka2;
    $hasil4 = $vol_urea * $angka2;
    $hasil5 = $harga_urea * $angka2;
    $hasil6 = $tt_urea * $angka2;
    $hasil7 = $vol_TSP * $angka2;
    $hasil8 = $harga_TSP * $angka2;
    $hasil9 = $tt_TSP * $angka2;
    $hasil10 = $vol_KCL * $angka2;
    $hasil11 = $harga_KCL * $angka2;
    $hasil12 = $tt_KCL * $angka2;
    $hasil13 = $vol_ZA * $angka2;
    $hasil14 = $harga_ZA * $angka2;
    $hasil15 = $tt_ZA * $angka2;
    $hasil16 = $vol_PHONSKA * $angka2;
    $hasil17 = $harga_PHONSKA * $angka2;
    $hasil18 = $tt_PHONSKA * $angka2;
    $hasil19 = $vol_CORRIN * $angka2;
    $hasil20 = $harga_CORRIN * $angka2;
    $hasil21 = $tt_CORRIN * $angka2;
    $hasil22 = $vol_BEA * $angka2;
    $hasil23 = $harga_BEA * $angka2;
    $hasil24 = $tt_BEA * $angka2;
    $hasil25 = $vol_SAN * $angka2;
    $hasil26 = $harga_SAN * $angka2;
    $hasil27 = $tt_SAN * $angka2;
    $hasil30 = $kerja * $angka2;
    $hasil36 = $vol_PT * $angka2;
    $hasil37 = $harga_PT * $angka2;
    $hasil38 = $tt_PT * $angka2;
    $hasil39 = $vol_HORTIND * $angka2;
    $hasil40 = $harga_HORTIND * $angka2;
    $hasil41 = $tt_HORTIND * $angka2;
    $hasil42 = $REVENUE * $angka2;
    $hasil43 = $vol_SNN * $angka2;
    $hasil44 = $harga_SNN * $angka2;
    $hasil45 = $tt_SNN * $angka2;
    $hasil31 = $hasil45 + $hasil41 + $hasil38 + $hasil30 + $hasil27 + $hasil24 + $hasil21 + $hasil18 + $hasil15 + $hasil12 + $hasil9 + $hasil6 + $hasil3;
    $hasil32 = $DEPRESIASI * $angka2;
    $hasil33 = $TOTAL_PENGELUARAN * $angka2;
    $hasil34 = $TOTAL_VARIABLE * $angka2;
    $hasil35 = $rcc * $angka2;
    $hasil46 = $Laba * $angka2;
    //PEMBERBARUAN//
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Padi</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jautocalc.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/script.js"></script>
</head>

<body background="/img/padi.jpg">
    <form method="post">
        <div class="card text-center">
            <div class="card-header">
                Padi
            </div>
            <div class="card-body" style="background-image: url(../assets/img/6.png);">
                <h5 class="card-title text-white">Masukkan Luas Lahan</h5>
                <p class="card-text"><input type="text" name="tangka2" value="<?= $angka2 ?>" style="width: 100px;" border="6"></p>
                <input type="submit" name="bkali" value="hitung">
            </div>
            <div class="card-footer text-muted">
                Hasil
            </div>
        </div>
    </form>
    <div id="accordion">
        <div class="card bg-success">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Benih</strong>
                </a>
            </div>
            <div id="menu1" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td></td>
                                    <td>Volume </td>
                                    <td>Harga (Rp)</td>
                                    <td>Total Harga (Rp)</td>

                                </tr>
                                <tr style="width: 100px;">
                                    <td>Benih Padi</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil1, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 8000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil3, 2, ".", ","); ?></td>

                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion">
        <div class="card bg-success">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Pupuk Anorganik</strong>
                </a>
            </div>
            <div id="menu2" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td></td>
                                    <td>Volume </td>
                                    <td>Harga (Rp)</td>
                                    <td>Total Harga (Rp)</td>

                                </tr>
                                <tr>
                                    <td>Urea</td>
                                    <td style="width: 50px;"><?php echo $hasil4 . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 2.500,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil6, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>TSP</td>
                                    <td style="width: 50px;"><?php echo $hasil7 . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 2.500,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil9, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>KCL</td>
                                    <td style="width: 50px;"><?php echo $hasil10. " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 5.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil12, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>ZA</td>
                                    <td style="width: 50px;"><?php echo $hasil13 . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 2.500,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil15, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Phonska</td>
                                    <td style="width: 50px;"><?php echo $hasil16 . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 2.500,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil18, 2, ".", ","); ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion">
        <div class="card bg-success">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Pupuk Indmira</strong>
                </a>
            </div>
            <div id="menu3" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td></td>
                                    <td>Volume </td>
                                    <td>Harga (Rp)</td>
                                    <td>Total Harga (Rp)</td>

                                </tr>
                                <tr>
                                    <td>Corrin @250 gr</td>
                                    <td style="width: 50px;"><?php echo  $hasil19 . " Bks "; ?></td>
                                    <td style="width: 70px;">Rp. 15.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil21, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Beauveria</td>
                                    <td style="width: 50px;"><?php echo $hasil22 . " Bh "; ?></td>
                                    <td style="width: 70px;">Rp. 15.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil24, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>SAN 500 gr</td>
                                    <td style="width: 50px;"><?php echo $hasil25 . " Botol "; ?></td>
                                    <td style="width: 70px;">Rp. 27.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil27, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>PT 4 kg</td>
                                    <td style="width: 50px;"><?php echo $hasil36 . " Pail "; ?></td>
                                    <td style="width: 70px;">Rp. 45.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil38, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>SNN 1000ml</td>
                                    <td style="width: 50px;"><?php echo $hasil43 . " Botol "; ?></td>
                                    <td style="width: 70px;">Rp. 28.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil45, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Hortind 250ml</td>
                                    <td style="width: 50px;"><?php echo  $hasil39 . " Botol "; ?></td>
                                    <td style="width: 70px;">Rp. 14.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil41, 2, ".", ","); ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion">
        <div class="card bg-success">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu5" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Total Olah Kerja dan Biaya</strong>
                </a>
            </div>
            <div id="menu5" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td></td>
                                    <td>Volume </td>
                                    <td>Harga (Rp)</td>
                                    <td>Total Harga (Rp)</td>

                                </tr>
                                <tr>
                                    <td>Olah Kerja</td>
                                    <td></td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil30, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Biaya</td>
                                    <td></td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil31, 2, ".", ","); ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion">
        <div class="card bg-success">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>OUTPUT</strong>
                </a>
            </div>
            <div id="menu4" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td></td>
                                    <td>Volume </td>
                                    <td>Harga (Rp)</td>
                                    <td>Total Harga (Rp)</td>

                                </tr>
                                <tr>
                                    <td>Penyusutan alat dan sewa lahan p3 bln</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil32, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Pengeluaran + Susut</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil33, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Variabel</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil34, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Revenue</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil42, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Laba Bersih</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil46, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Return Cost Ratio</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo  number_format($hasil35, 2, ".", ",") . " /TC "; ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>