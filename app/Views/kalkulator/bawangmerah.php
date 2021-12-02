<?php

//Data Input
{
    $Vol_Benih = 0.1;
    $harga_benih = 3.5;
    $tt_benih = 3500;
    $vol_Saprodap = 0.05;
    $harga_Saprodap = 0.7;
    $tt_Saprodap = 350;
    $Vol_Dolomit = 0.005;
    $harga_Dolomint = 0.5;
    $tt_Dolomint = 25;
    $Vol_Phonska = 0.05;
    $harga_Phonska = 0.24;
    $tt_phonska = 120;
    $Vol_PT = 0.0005;
    $harga_PT = 4.5;
    $tt_PT = 22.5;
    $Vol_SAN = 0.002;
    $harga_SAN = 2.7;
    $tt_SAN = 54;
    $Vol_Trico = 0.0006;
    $harga_Trico = 3;
    $tt_Trico = 18;
    $Vol_KCL = 0.04;
    $harga_KCL =  0.65;
    $tt_KCL = 260;
    $vol_ZA = 0.02;
    $harga_ZA = 0.5;
    $tt_ZA = 100;
    $vol_SNN =  0.002;
    $harga_SNN = 2.8;
    $tt_SNN = 56;
    $vol_Booster = 0.0003;
    $harga_Booster = 5;
    $tt_Booster = 15;
    $herbisida = 200;
    $insektisida = 700;
    $vol_bio = 0.0005;
    $harga_Bio = 5;
    $tt_bio = 25;
    $vol_stick = 0.001;
    $harga_Stick = 1.3;
    $tt_stick = 13;
    $Variable_tenaga = 5040;
    $hasilpanen = 1.7;
    $vol_panen = 1.2;
    $hasil_panen = 20400;
    $laba = 8401.5;
    $tcr = 0.000170021;
    $lahan = 1000;
}
//end data input
$angka = @$_POST['tangka2'];
$hasil =  @$_POST['hasil'];
//rumus//
{
    $hasil1 = $Vol_Benih * $angka;
    $hasil2 = $harga_benih * $angka;
    $hasil3 = $tt_benih * $angka;
    $hasil4 = $vol_Saprodap * $angka;
    $hasil5 = $harga_Saprodap * $angka;
    $hasil6 = $tt_Saprodap * $angka;
    $hasil7 = $Vol_Dolomit * $angka;
    $hasil8 = $harga_Dolomint * $angka;
    $hasil9 = $tt_Dolomint * $angka;
    $hasil10 = $Vol_Phonska * $angka;
    $hasil11 = $harga_Phonska * $angka;
    $hasil12 = $tt_phonska * $angka;
    $hasil13 = $Vol_PT * $angka;
    $hasil14 = $harga_PT * $angka;
    $hasil15 = $tt_PT * $angka;
    $hasil16 = $Vol_SAN * $angka;
    $hasil17 = $harga_SAN * $angka;
    $hasil18 = $tt_SAN * $angka;
    $hasil19 = $Vol_Trico * $angka;
    $hasil20 = $harga_Trico * $angka;
    $hasil21 = $tt_Trico * $angka;
    $hasil22 = $Vol_KCL * $angka;
    $hasil23 = $harga_KCL * $angka;
    $hasil24 = $tt_KCL * $angka;
    $hasil25 = $vol_ZA * $angka;
    $hasil26 = $harga_ZA * $angka;
    $hasil27 = $tt_ZA * $angka;
    $hasil28 = $vol_SNN * $angka;
    $hasil29 = $harga_SNN * $angka;
    $hasil30 = $tt_SNN * $angka;
    $hasil31 = $vol_Booster * $angka;
    $hasil32 = $harga_Booster * $angka;
    $hasil33 = $tt_Booster * $angka;
    $hasil34 = $herbisida * $angka;
    $hasil35 = $insektisida * $angka;
    $hasil36 = $vol_bio * $angka;
    $hasil37 = $harga_Bio * $angka;
    $hasil38 = $tt_bio * $angka;
    $hasil39 = $vol_stick * $angka;
    $hasil40 = $harga_Stick * $angka;
    $hasil41 = $tt_stick * $angka;
    $hasil42 = $Variable_tenaga * $angka;
    $hasil43 = $hasilpanen * $angka;
    $hasil44 = $vol_panen * $angka;
    $hasil45 = $hasil_panen * $angka;
    $hasil46 = $laba * $angka;
    $hasil47 = $tcr * $angka;
    $hasil48 = $lahan * $angka;
    $hasil50 = $hasil3 + $hasil48;
    $hasil51 = $hasil21 + $hasil18 + $hasil15 + $hasil12 + $hasil9 + $hasil6;
    $hasil52 = $hasil33 + $hasil30 + $hasil27 + $hasil24;
    $hasil53 = $hasil41 + $hasil38 + $hasil35 + $hasil34;
}
//end rumus//
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
                Bawang Merah
            </div>
            <div class="card-body" style="background-image: url(../assets/img/2.png);">
                <h5 class="card-title text-white">Masukkan Luas Lahan</h5>
                <p class="card-text"><input type="text" name="tangka2" value="<?= $angka ?>" style="width: 100px;" border="6"></p>
                <input type="submit" name="bkali" value="hitung">
            </div>
            <div class="card-footer text-muted">
                Hasil
            </div>
        </div>

    </form>
    <div id="accordion">
        <div class="card bg-success ">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Sewa Lahan dan Benih</strong>
                </a>
            </div>
            <div id="menu" class="collapse">
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
                                    <td>Sewa Lahan</td>
                                    <td></td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil48, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Benih</td>
                                    <td style="width: 50px;"><?php echo $hasil1 . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 35.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil3, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Total</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil50, 2, ".", ","); ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion">
        <div class="card bg-success ">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Pupuk Dasar</strong>
                </a>
            </div>
            <div id="menuone" class="collapse">
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
                                    <td>Saprodap</td>
                                    <td style="width: 50px;"><?php echo $hasil4 . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 7.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil6, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Dolomit</td>
                                    <td style="width: 50px;"><?php echo $hasil7 . " sak "; ?></td>
                                    <td style="width: 70px;">Rp. 5.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil9, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Phonska </td>
                                    <td style="width: 50px;"><?php echo $hasil10 . " Kg "; ?></td>
                                    <td style="width: 70px;">Rp. 2.400,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil12, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>PT 4 kg</td>
                                    <td style="width: 50px;"><?php echo $hasil13 . " pail "; ?></td>
                                    <td style="width: 70px;">Rp. 45.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil15, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>SAN 500 gr</td>
                                    <td style="width: 50px;"><?php echo $hasil16 . " botol "; ?></td>
                                    <td style="width: 70px;">Rp. 27.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil18, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Trico 250 gr</td>
                                    <td style="width: 50px;"><?php echo $hasil19 . " bks "; ?></td>
                                    <td style="width: 70px;">Rp. 30.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil21, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Total</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil51, 2, ".", ","); ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion">
        <div class="card bg-success ">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Susulan 1 dan 2 ( H19-21)</strong>
                </a>
            </div>
            <div id="menu2" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td>KCL</td>
                                    <td style="width: 50px;"><?php echo  $hasil22 . " kg "; ?></td>
                                    <td style="width: 70px;">Rp. 6.500,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil24, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>ZA</td>
                                    <td style="width: 50px;"><?php echo $hasil25 . " kg "; ?></td>
                                    <td style="width: 70px;">Rp. 5.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil27, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>SNN 1000ml</td>
                                    <td style="width: 50px;"><?php echo $hasil28 . " botol "; ?></td>
                                    <td style="width: 70px;">Rp. 28.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil30, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Booster umbi</td>
                                    <td style="width: 50px;"><?php echo $hasil31 . " lt "; ?></td>
                                    <td style="width: 70px;">Rp. 50.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil33, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Total</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil52, 2, ".", ","); ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion ">
        <div class="card bg-success ">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Pestisida</strong>
                </a>
            </div>
            <div id="menu3" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td>Herbisida Goal+prol+roundap</td>
                                    <td></td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil34, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Insektisida+Fungisida</td>
                                    <td></td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil35, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Bioinsektisida indmira</td>
                                    <td style="width: 50px;"><?php echo $hasil36 . " lt "; ?></td>
                                    <td style="width: 70px;">Rp. 50.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil38, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Stickpol 500 ml</td>
                                    <td style="width: 50px;"><?php echo $hasil39 . " botol "; ?></td>
                                    <td style="width: 70px;">Rp. 13.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil41, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Total</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil53, 2, ".", ","); ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="accordion">
        <div class="card bg-success ">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Output</strong>
                </a>
            </div>
            <div id="menu4" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td>Variable Cost Tenaga Kerja</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil42, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Hasil bawang merah</td>
                                    <td style="width: 50px;"><?php echo number_format($hasil43, 2, ".", ",") . " kg "; ?></td>
                                    <td style="width: 70px;">Rp. 12.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil45, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Laba bersih</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil46, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Turn cost ratio</td>
                                    <td>:</td>
                                    <td></td>
                                    <td style="width: 100px;"><?php echo  number_format($hasil47, 2, ".", ",") . " /Tc "; ?></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>



</body>