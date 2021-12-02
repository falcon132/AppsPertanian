<?php

//Data Input 
{
    $Vol_Benih = 0.014;
    $harga_benih = 5;
    $tt_benih = 700;
    $vol_ajir = 0.014;
    $harga_ajir = 0.15;
    $tt_ajir = 21;
    $Vol_tsp1 = 0.0028;
    $harga_tsp1 = 0.6;
    $tt_tsp1 = 16.8;
    $Vol_tricogreen = 0.0008;
    $harga_tricogreen = 3;
    $tt_tricogreen = 24;
    $Vol_san = 0.0004;
    $harga_san = 2.7;
    $tt_san = 10.8;
    $Vol_Snn = 0.0003;
    $harga_Snn = 2.8;
    $tt_Snn = 8.4;
    $Vol_hortind = 0.0003;
    $harga_hortind = 1.4;
    $tt_hortind = 4.2;
    $vol_urea = 0.0644;
    $harga_urea = 0.7;
    $tt_urea = 450.8;
    $Vol_tsp = 0.0385;
    $harga_tsp =  0.6;
    $tt_tsp = 231;
    $vol_mop = 0.0602;
    $harga_mop = 1;
    $tt_mop = 602;
    $vol_dolomint =  0.126;
    $harga_dolomint = 0.08;
    $tt_dolomint = 100.8;
    $vol_borat = 0.00245;
    $harga_borat = 5;
    $tt_borat = 122.5;
    $vol_CuSO4 = 0.00035;
    $harga_CuSO4 = 3;
    $tt_CuSO4 = 10.5;
    $vol_Trichoderma = 0.0018;
    $harga_Trichoderma = 3;
    $tt_Trichoderma = 54;
    /// tahun ke 3 up //
    $vol_gliposat = 0.0015;
    $harga_gliposat = 5.2;
    $tt_gliposat = 26;
    $vol_perekat = 0.0025;
    $harga_perekat = 2.6;
    $tt_perekat = 21.66666667;
    $vol_ally = 0.005;
    $harga_ally = 1;
    $tt_ally = 16.66666667;
    $vol_parakuat = 0.00045;
    $harga_parakuat = 5;
    $tt_parakuat = 7.5;
    $vol_gramoxon = 0.00075;
    $harga_gramoxon = 7;
    $tt_gramoxon = 21;
    $totalpindah = 85.3333333;
    $harga_urea2 = 0.7;
    $tt_urea2 = 294;
    $harga_tsp2 =  0.6;
    $tt_tsp2 = 168;
    $harga_mop2 = 1;
    $tt_mop2 = 420;
    $harga_dolomint2 = 0.08;
    $tt_dolomint2 = 30.8;
    $harga_borat2 = 5;
    $tt_borat2 = 52.5;
    $harga_san2 = 2.7;
    $tt_san2 = 45.9;
    $harga_fruttago =  8.4;
    $tt_fruttago = 33.6;
    $harga_kalsigro = 1.2;
    $tt_kalsigro = 5.4;
    $harga_mix = 3;
    $tt_mix = 36;
    $harga_metar = 3;
    $tt_metar = 36;
    $vol_kerja = 0.00005;
    $harga_kerja = 400;
    $tt_kerja = 200;
    $vol_pindah = 0.00045;
    $harga_pindah = 13;
    $tt_pindah = 58.5;
    $harga_babat = 80;
    $tt_babat = 160;
    $Vol_semprot = 0.00005;
    $harga_semprot =  13;
    $tt_semprot = 13;
    $vol_pupuk = 0.0008;
    $harga_pupuk = 13;
    $tt_pupuk = 104;
    $vol_kastrasi =  0.0002;
    $harga_kastrasi = 13;
    $tt_kastrasi = 26;
    $vol_investasi = 0.0001;
    $harga_investasi = 13;
    $tt_investasi = 13;
    $umurpindah = 80;
    $tt_umurpindah = 80;
    $vol_babat = 0.00005;
    $babat = 13;
    $tt_babat2 = 13;
    $vol_34 =  0.0002674;
    $harga_34 = 13;
    $tt_34 = 34.762;
    $vol_58 =  0.00030303;
    $harga_58 = 13;
    $tt_58 = 39.3939;
    $vol_915 =  0.0003318;
    $harga_915 = 13;
    $tt_915 = 0;
    $vol_1620 =  0.00030303;
    $harga_1620 = 13;
    $tt_1620 = 0;
    $vol_20 =  0.0002744;
    $harga_20 = 13;
    $tt_20 = 0;
    $vol_tenagapiringanmanual =  0.0004;
    $harga_tenagapiringanmanual = 13;
    $tt_tenagapiringanmanual = 104;
    $vol_tenagapiringanchemis =   0.000028571429;
    $harga_tenagapiringanchemis = 13;
    $tt_tenagapiringanchemis = 7.428571429;
    $vol_tbm =   0.000033333333;
    $harga_tbm = 13;
    $tt_tbm = 4.33333;
    $vol_tunas =  0.0004;
    $harga_tunas = 13;
    $tt_tunas = 52;
    $th34 =  13;
    $tt_th34 = 412.5;
    $th56 = 13;
    $th79 =  13;
    $th915 = 13;
    $th1620 =  13;
    $th20 = 13;
    $total = 2120.1891;
    $reve = 6875;
    $laba = 4989.8109;
    $totalpupuk = 0.2919;
    $produktivitas = 2.75;
    $hpp = 0.0771;
    $rcc = 0;
    $totalkerja =  500.1558;
    $subtoalpupuk = 1122.2;
}
//end data input
$angka = @$_POST['tangka2'];
$hasil =  @$_POST['hasil'];
//rumus//
{
    $hasil1 = $Vol_Benih * $angka;
    //tambahan tahun 3 up//
    $hasil2 = $tt_urea2 * $angka;
    $hasil3 = $tt_tsp2 * $angka;
    $hasil4 = $tt_mop2 * $angka;
    $hasil5 = $tt_dolomint2 * $angka;
    $hasil6 = $tt_borat2 * $angka;
    $hasil7 = $tt_san2 * $angka;
    $hasil8 = $tt_fruttago * $angka;
    $hasil9 = $tt_kalsigro * $angka;
    $hasil10 = $tt_mix * $angka;
    $hasil11 = $tt_metar * $angka;
    $hasil12 = $tt_investasi * $angka;
    $hasil13 = $tt_umurpindah * $angka;
    $hasil14 = $tt_babat2 * $angka;
    $hasil15 = $tt_34 * $angka;
    $hasil16 = $tt_58 * $angka;
    $hasil17 = $tt_915 * $angka;
    $hasil18 = $tt_1620 * $angka;
    $hasil19 = $tt_20 * $angka;
    $hasil20 = $tt_tenagapiringanmanual * $angka;
    $hasil21 = $tt_tenagapiringanchemis * $angka;
    $hasil22 = $tt_tbm * $angka;
    $hasil23 = $tt_tunas * $angka;
    $hasil24 = $tt_th34 * $angka;
    $hasil25 = $subtoalpupuk * $angka;

    //end tahun 3 up//
    $hasil43 = $vol_gliposat * $angka;
    $hasil44 = $harga_gliposat * $angka;
    $hasil45 = $tt_gliposat * $angka;
    $hasil46 = $vol_perekat * $angka;
    $hasil47 = $harga_perekat * $angka;
    $hasil48 = $tt_perekat * $angka;
    $hasil49 = $vol_ally * $angka;
    $hasil50 = $harga_ally * $angka;
    $hasil51 = $tt_ally * $angka;
    $hasil52 = $vol_parakuat * $angka;
    $hasil53 = $harga_parakuat * $angka;
    $hasil54 = $tt_parakuat * $angka;
    $hasil55 = $vol_gramoxon * $angka;
    $hasil56 = $harga_gramoxon * $angka;
    $hasil57 = $tt_gramoxon * $angka;
    $hasil58 = $harga_urea2 * $angka;
    $hasil59 = $harga_tsp2 * $angka;
    $hasil60 = $harga_mop2 * $angka;
    $hasil61 = $harga_dolomint2 * $angka;
    $hasil62 = $harga_borat2 * $angka;
    $hasil63 = $harga_san2 * $angka;
    $hasil64 = $harga_fruttago * $angka;
    $hasil65 = $harga_kalsigro * $angka;
    $hasil66 = $harga_mix * $angka;
    $hasil67 = $harga_metar * $angka;
    $hasil68 = $vol_kerja * $angka;
    $hasil69 = $harga_kerja * $angka;
    $hasil70 = $tt_kerja * $angka;
    $hasil71 = $vol_pindah * $angka;
    $hasil72 = $harga_pindah * $angka;
    $hasil73 = $tt_pindah * $angka;
    $hasil74 = $harga_babat * $angka;
    $hasil75 = $tt_babat * $angka;
    $hasil76 = $Vol_semprot * $angka;
    $hasil77 = $harga_semprot * $angka;
    $hasil78 = $tt_semprot * $angka;
    $hasil79 = $vol_pupuk * $angka;
    $hasil80 = $harga_pupuk * $angka;
    $hasil81 = $tt_pupuk * $angka;
    $hasil82 = $vol_kastrasi * $angka;
    $hasil83 = $harga_kastrasi * $angka;
    $hasil84 = $tt_kastrasi * $angka;
    $hasil85 = $vol_investasi * $angka;
    $hasil86 = $harga_investasi * $angka;
    $hasil87 = $umurpindah * $angka;
    $hasil88 = $vol_babat * $angka;
    $hasil89 = $babat * $angka;
    $hasil90 = $vol_34 * $angka;
    $hasil91 = $harga_34 * $angka;
    $hasil92 = $vol_58 * $angka;
    $hasil93 = $harga_58 * $angka;
    $hasil94 = $vol_915 * $angka;
    $hasil95 = $harga_915 * $angka;
    $hasil96 = $vol_1620 * $angka;
    $hasil97 = $harga_1620 * $angka;
    $hasil98 = $vol_20 * $angka;
    $hasil99 = $harga_20 * $angka;
    $hasil100 = $vol_tenagapiringanmanual * $angka;
    $hasil101 = $harga_tenagapiringanmanual * $angka;
    $hasil102 = $vol_tenagapiringanchemis * $angka;
    $hasil103 = $harga_tenagapiringanchemis * $angka;
    $hasil104 = $vol_tbm * $angka;
    $hasil105 = $harga_tbm * $angka;
    $hasil106 = $vol_tunas * $angka;
    $hasil107 = $harga_tunas * $angka;
    $hasil108 = $th34 * $angka;
    $hasil109 = $th56 * $angka;
    $hasil110 = $th79 * $angka;
    $hasil111 = $th915 * $angka;
    $hasil112 = $th1620 * $angka;
    $hasil113 = $th20 * $angka;
    $hasil114 = $total * $angka;
    $hasil115 = $reve * $angka;
    $hasil116 = $laba * $angka;
    $hasil117 = $totalpupuk * $angka;
    $hasil118 = $totalpindah * $angka;
    $hasil119 = $produktivitas * $angka;
    $hasil120 = $hpp * $angka;
    $hasil121 = $rcc * $angka;
    $hasil122 = $totalkerja * $angka;
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
                Sawit Periode tahun ke 17
            </div>
            <div class="card-body" style="background-image: url(../assets/img/sawitt.jpg);">
                <h5 class="card-title text-white">Masukkan Luas Lahan</h5>
                <p class="card-text"><input type="text" name="tangka2" value="<?= $angka ?>" style="width: 100px;" border="6"></p>
                <input type="submit" name="bkali" value="hitung">
            </div>
            <div class="card-footer text-muted">
                Jumlah Pohon <?php echo  number_format($hasil1, 0, ".", ",") . " pohon "; ?>
            </div>
        </div>

    </form>
    <div id="accordion">
        <div class="card bg-success ">
            <div class="card-header">
                <a class="card-link text-white" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Pestisida untuk pembersihan lahan ( 5 kali dalam 3 th) </strong>
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
                                <tr style="width: 100px;">
                                    <td>Gliposat 3 liter/aplikasi</td>
                                    <td style="width: 50px;"><?php echo ($hasil43 / 3) . " lt "; ?></td>
                                    <td style="width: 70px;">Rp. 53.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil45, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Perekat 5 liter/ aplikasi</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil46 / 3, 1, ".", ",") . " lt "; ?></td>
                                    <td style="width: 70px;">Rp. 26.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil48, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Ally plus</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil49 / 3, 1, ".", ",") . " sachet "; ?></td>
                                    <td style="width: 70px;">Rp. 10.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil51, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Gramoxon</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil55 / 3, 1, ".", ",") . " lt "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil56, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil57, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Sub Total pindah tanam sampai TBM 3</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil118, 2, ".", ","); ?></td>
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
                    <strong>Pupuk Makro</strong>
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
                                    <td>Jumlah Pohon</td>
                                    <td>Harga (Rp)</td>
                                    <td>Total Harga (Rp)</td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Urea / pohon selama 3-20 th</td>
                                    <td style="width: 50px;"><?php echo 0.0003 * $angka ?></td>
                                    <td style="width: 50px;"><?php echo number_format($hasil1, 0, ".", ",") . " pohon"; ?></td>
                                    <td style="width: 70px;">Rp. 7.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil2, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>TSP/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"><?php echo 0.0002 * $angka ?></td>
                                    <td style="width: 50px;"><?php echo number_format($hasil1, 0, ".", ",") . " pohon"; ?></td>
                                    <td style="width: 70px;">Rp. 6.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil3, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>MOP/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"><?php echo 0.0003 * $angka ?></td>
                                    <td style="width: 50px;"><?php echo number_format($hasil1, 0, ".", ",") . " pohon"; ?></td>
                                    <td style="width: 70px;">Rp. 10.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil4, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Dolomit/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"><?php echo 0.000275 * $angka ?></td>
                                    <td style="width: 50px;"><?php echo number_format($hasil1, 0, ".", ",") . " pohon"; ?></td>
                                    <td style="width: 70px;">Rp. 800,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil5, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Boraks/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"><?php echo 0.0000075 * $angka ?></td>
                                    <td style="width: 50px;"><?php echo number_format($hasil1, 0, ".", ",") . " pohon"; ?></td>
                                    <td style="width: 70px;">Rp. 50.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil6, 2, ".", ","); ?></td>
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
                <a class="card-link text-white" data-toggle="collapse" href="#menu5" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Pupuk Organik Indmira</strong>
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
                                <tr style="width: 100px;">
                                    <td>SAN tanaman</td>
                                    <td style="width: 50px;"><?php echo (17 / 10000) * $angka ?></td>
                                    <td style="width: 70px;">Rp. 27.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil7, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Fruttagro</td>
                                    <td style="width: 50px;"><?php echo (4 / 10000) * $angka ?></td>
                                    <td style="width: 70px;">Rp. 84.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil8, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Kalsigro</td>
                                    <td style="width: 50px;"><?php echo (4.5 / 10000) * $angka ?></td>
                                    <td style="width: 70px;">Rp. 12.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil9, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Mix trico dan glio</td>
                                    <td style="width: 50px;"><?php echo (12 / 10000) * $angka ?></td>
                                    <td style="width: 70px;">Rp. 30.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil10, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Metarhizium</td>
                                    <td style="width: 50px;"><?php echo (12 / 10000) * $angka ?></td>
                                    <td style="width: 70px;">Rp. 30.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil11, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Sub Total pemupukan TM</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil25, 2, ".", ","); ?></td>
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
                <a class="card-link text-white" data-toggle="collapse" href="#menu6" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Variable Cost Tenaga Kerja TBM </strong>
                </a>
            </div>
            <div id="menu6" class="collapse">
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
                                    <td>Tenaga kerja tetap</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil68, 1, ".", ","); ?></td>
                                    <td style="width: 70px;">Rp. 4.000.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil70, 2, ".", ","); ?></td>
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
                <a class="card-link text-white" data-toggle="collapse" href="#menu7" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Variable Cost Tenaga Kerja TM</strong>
                </a>
            </div>
            <div id="menu7" class="collapse">
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
                                    <td>Umur 4-7 tahun dilakukan babat gawangan dan chemis setahun 2 kali</td>
                                    <td style="width: 50px;"><?php echo (2 / 10000) * $angka ?></td>
                                    <td style="width: 70px;">Rp. 800.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil13, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>>7 th babat gawangan 1 kali setahun dan chemis tetap 2 kali dalam setahun</td>
                                    <td style="width: 50px;"><?php echo (1 / 10000) * $angka . " HOK "; ?></td>
                                    <td style="width: 70px;">Rp. 130.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil14, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Tenaga pemupukan padat 1 orang 500-600 kg</td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>16-20 th : 1515,5 kg</td>
                                    <td style="width: 50px;"><?php echo (3.3030 / 10000) * $angka . " HOK "; ?></td>
                                    <td style="width: 70px;">Rp. 130.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil16, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Tenaga Piringan manual ( 2,5 mx 2m ) = 1 orang/35 piringan 2 kali setahun</td>
                                    <td style="width: 50px;"><?php echo (4 / 10000) * $angka . " HOK "; ?></td>
                                    <td style="width: 70px;">Rp. 130.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil20, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Tenaga Piringan chemis ( 1/3,5 ha) 2 kali setahun</td>
                                    <td style="width: 50px;"><?php echo (0.29 / 10000) * $angka . " HOK "; ?></td>
                                    <td style="width: 70px;">Rp. 130.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil21, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>TBM 3, tempat pengumpulan hasil buah 6 tempat/1 HOK</td>
                                    <td style="width: 50px;"><?php echo (0.33 / 10000) * $angka . " HOK "; ?></td>
                                    <td style="width: 70px;">Rp. 130.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil22, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Perawatan tunas 9 bulan sekali, mulai TM 1-25 (output 35-40/pohon )</td>
                                    <td style="width: 50px;"><?php echo (4 / 10000) * $angka . " HOK "; ?></td>
                                    <td style="width: 70px;">Rp. 130.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil23, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Sub total tenaga kerja TBM ke TM</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil122, 2, ".", ","); ?></td>
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
                <a class="card-link text-white" data-toggle="collapse" href="#menu8" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Variabel cost tenaga kerja panen</strong>
                </a>
            </div>
            <div id="menu8" class="collapse">
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
                                    <td>th 3-4 : 700 kg/orang ( 1 HOK)</td>
                                    <td style="width: 50px;"><?php echo (27.5 / 10000) * $angka ?></td>
                                    <td style="width: 70px;">Rp. 150.000,00</td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil24, 2, ".", ","); ?></td>
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
                <a class="card-link text-white" data-toggle="collapse" href="#menu9" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Perhitungan Kelayakan ( Estimasi panen kelas tanah S2 )</strong>
                </a>
            </div>
            <div id="menu9" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td>th 3= 5 ton, th 4 = 14 ton, th 5= 17 ton, th 6= 21 ton, th 7= 26 ton</td>
                                </tr>
                                <tr>
                                    <td>th 8= 28 ton, th 9= 30 ton, th 10 =31 ton, th 11= 32 ton, th 12= 32 ton</td>
                                </tr>
                                <tr>
                                    <td>th 13 = 32 ton, th 14= 31 ton, th 15= 30 ton, th 16= 28,5 ton, th 17= 27,5 ton</td>
                                </tr>
                                <tr>
                                    <td>th 18= 27ton, th 19= 26ton, th 20= 25 ton, th 21= 25,5 ton, th 22= 23 ton,</td>
                                </tr>
                                <tr>
                                    <td>th 23= 22 ton, th 24= 21,5 ton, th 25= 21 ton</td>
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
                <a class="card-link text-white" data-toggle="collapse" href="#menu10" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span>
                    <span class="expanded"><i class="fa fa-minus"></i></span>
                    <strong>Output</strong>
                </a>
            </div>
            <div id="menu10" class="collapse">
                <div class="card-body">
                    <form method="post">
                        <div class="table-responsive">
                            <table class="table table-striped" align="center" border="3" bgcolor="white">
                                <tr>
                                    <td>Total Pengeluaran setiap tahun</td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil114, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Produktivitas ( kg )</td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil119, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>HPP</td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil120, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Revenue</td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil115, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Laba Bersih</td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil116, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Return Cost Ratio =</td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil121, 2, ".", ","); ?></td>
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