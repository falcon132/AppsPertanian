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
    $vol_gliposat = 0.0015;
    $harga_gliposat = 5.2;
    $tt_gliposat = 78;
    $vol_perekat = 0.0025;
    $harga_perekat = 2.6;
    $tt_perekat = 65;
    $vol_ally = 0.005;
    $harga_ally = 1;
    $tt_ally = 50;
    $vol_parakuat = 0.00045;
    $harga_parakuat = 5;
    $tt_parakuat = 22.5;
    $vol_gramoxon = 0.00075;
    $harga_gramoxon = 7;
    $tt_gramoxon = 52.5;
    $totalpindah = 2625;
    $harga_urea2 = 0.7;
    $harga_tsp2 =  0.6;
    $harga_mop2 = 1;
    $harga_dolomint2 = 0.08;
    $harga_borat2 = 5;
    $harga_san2 = 2.7;
    $harga_fruttago =  8.4;
    $harga_kalsigro = 1.2;
    $harga_mix = 3;
    $harga_metar = 3;
    $vol_kerja = 0.00005;
    $harga_kerja = 400;
    $tt_kerja = 600;
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
    $umurpindah = 80;
    $vol_babat = 0.00005;
    $babat = 13;
    $vol_34 =  0.0002674;
    $harga_34 = 13;
    $vol_58 =  0.00030303;
    $harga_58 = 13;
    $vol_915 =  0.0003318;
    $harga_915 = 13;
    $vol_1620 =  0.00030303;
    $harga_1620 = 13;
    $vol_20 =  0.0002744;
    $harga_20 = 13;
    $vol_tenagapiringanmanual =  0.0004;
    $harga_tenagapiringanmanual = 13;
    $vol_tenagapiringanchemis =   0.000028571429;
    $harga_tenagapiringanchemis = 13;
    $vol_tbm =   0.000033333333;
    $harga_tbm = 13;
    $vol_tunas =  0.0004;
    $harga_tunas = 13;
    $th34 =  13;
    $th56 = 13;
    $th79 =  13;
    $th915 = 13;
    $th1620 =  13;
    $th20 = 13;
    $total = 3586.3;
    $reve = 0;
    $laba = -3586.3;
    $totalpupuk = 0.2919;
    $produktivitas = 0;
    $hpp = 0;
    $rcc = 0;
    $totalkerja =  961.5;
}
//end data input
$angka = @$_POST['tangka2'];
$hasil =  @$_POST['hasil'];
//rumus//
{
    $hasil1 = $Vol_Benih * $angka;
    $hasil2 = $harga_benih * $angka;
    $hasil3 = $tt_benih * $angka;
    $hasil4 = $vol_ajir * $angka;
    $hasil5 = $harga_ajir * $angka;
    $hasil6 = $tt_ajir * $angka;
    $hasil7 = $Vol_tsp1 * $angka;
    $hasil8 = $harga_tsp1 * $angka;
    $hasil9 = $tt_tsp1 * $angka;
    $hasil10 = $Vol_tricogreen * $angka;
    $hasil11 = $harga_tricogreen * $angka;
    $hasil12 = $tt_tricogreen * $angka;
    $hasil13 = $Vol_san * $angka;
    $hasil14 = $harga_san * $angka;
    $hasil15 = $tt_san * $angka;
    $hasil16 = $Vol_Snn * $angka;
    $hasil17 = $harga_Snn * $angka;
    $hasil18 = $tt_Snn * $angka;
    $hasil19 = $Vol_hortind * $angka;
    $hasil20 = $harga_hortind * $angka;
    $hasil21 = $tt_hortind * $angka;
    $hasil22 = $vol_urea * $angka;
    $hasil23 = $harga_urea * $angka;
    $hasil24 = $tt_urea * $angka;
    $hasil25 = $Vol_tsp * $angka;
    $hasil26 = $harga_tsp * $angka;
    $hasil27 = $tt_tsp * $angka;
    $hasil28 = $vol_mop * $angka;
    $hasil29 = $harga_mop * $angka;
    $hasil30 = $tt_mop * $angka;
    $hasil31 = $vol_dolomint * $angka;
    $hasil32 = $harga_dolomint * $angka;
    $hasil33 = $tt_dolomint * $angka;
    $hasil34 = $vol_borat * $angka;
    $hasil35 = $harga_borat * $angka;
    $hasil36 = $tt_borat * $angka;
    $hasil37 = $vol_CuSO4 * $angka;
    $hasil38 = $harga_CuSO4 * $angka;
    $hasil39 = $tt_CuSO4 * $angka;
    $hasil40 = $vol_Trichoderma * $angka;
    $hasil41 = $harga_Trichoderma * $angka;
    $hasil42 = $tt_Trichoderma * $angka;
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
                Sawit Periode 1 - 3
            </div>
            <div class="card-body" style="background-image: url(../assets/img/sawitt.jpg);">
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
                    <strong>Variable Cost ( Mulai pindah tanam ke lahan )</strong>
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
                                    <td>Bibit sawit</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil1, 1, ".", ",") . " pohon "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil2, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil3, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Ajir</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil4, 1, ".", ",") . " batang "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil5, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil6, 2, ".", ","); ?></td>
                                </tr>
                                <tr>
                                    <td>Pupuk Dasar</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>TSP</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil7, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil8, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil9, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Tricogreen</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil10, 1, ".", ",") . " Bks "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil11, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil12, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>SAN 500 gr</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil13, 1, ".", ",") . " btl "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil14, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil15, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>SNN 1000 ml</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil16, 1, ".", ",") . " btl "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil17, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil18, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Hortind 250 ml</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil19, 1, ".", ",") . " btl "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil20, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil21, 2, ".", ","); ?></td>
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
                    <strong>Pemupukan susulan selama TBM (1-3)</strong>
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
                                <tr style="width: 100px;">
                                    <td>Urea</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil22, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil23, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil24, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>TSP</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil25, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil26, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil27, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>MOP</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil28, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil29, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil30, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Dolomint</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil31, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil32, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil33, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Borat</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil34, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil35, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil36, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>CuSO4</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil37, 1, ".", ",") . " Kg "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil38, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil39, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Trichoderma</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil40, 1, ".", ",") . " bks "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil41, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil42, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Total pupuk selama TBM </td>
                                    <td style="width: 50px;"><?php echo  $hasil117 ?></td>
                                    <td></td>
                                    <td></td>
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
                                    <td style="width: 50px;"><?php echo  number_format($hasil43, 1, ".", ",") . " lt "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil44, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil45, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Perekat 5 liter/ aplikasi</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil46, 1, ".", ",") . " lt "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil47, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil48, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Ally plus</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil49, 1, ".", ",") . " sachet "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil50, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil51, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Parakuat</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil52, 1, ".", ",") . " lt "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil53, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil54, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Gramoxon</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil55, 1, ".", ",") . " lt "; ?></td>
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
                <a class="card-link text-white"" data-toggle=" collapse" href="#menu4" aria-expanded="false" aria-controls="menuone">
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
                                    <td>Harga (Rp)</td>
                                    <td>Total Harga (Rp)</td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Urea / pohon selama 3-20 th</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil58, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>TSP/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil59, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>MOP/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil60, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Dolomit/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil61, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Boraks/ pohon selama 3-20 th</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil62, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
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
                    <strong>PPupuk Organik Indmira</strong>
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
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil63, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Fruttagro</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil64, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Kalsigro</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil65, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Mix trico dan glio</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil66, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Metarhizium</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil67, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
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
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil69, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil70, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Pindah tanam ke lahan 30 tan/orang</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil71, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil72, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil73, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Babat gawangan/ bebersih lahan ( borongan ) setahun 2 kali</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil74, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil75, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Semprot chemis gawangan 1 orang 2 ha setahun 2 kali</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil76, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil77, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil78, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Pemupukan TBM 1 orang 400 kg pupuk dan semprot pupuk cair</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil79, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil80, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil81, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Kastrasi umur 2 masuk ke-3 : pemotongan pelepah, buah pasir, buah busuk</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil82, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil83, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"><?php echo " Rp. " . number_format($hasil84, 2, ".", ","); ?></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Investasi jalan/ pembuatan jalan 1 m x 300 m</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil85, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil86, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
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
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil87, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>>7 th babat gawangan 1 kali setahun dan chemis tetap 2 kali dalam setahun</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil88, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil89, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Tenaga pemupukan padat 1 orang 500-600 kg</td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>3-4 th : 1337 kg</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil90, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil91, 2, ".", ","); ?></td>
                                    <td style="width: 100px;">></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>5-8 th : 1515,5 kg</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil92, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil93, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>9-15 th : 1659 kg</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil94, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil95, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>16-20 th : 1515,5 kg</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil96, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil97, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>>20 th : 1372 kg</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil98, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil99, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Tenaga Piringan manual ( 2,5 mx 2m ) = 1 orang/35 piringan 2 kali setahun</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil100, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil101, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Tenaga Piringan chemis ( 1/3,5 ha) 2 kali setahun</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil102, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil103, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>TBM 3, tempat pengumpulan hasil buah 6 tempat/1 HOK</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil104, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil105, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Perawatan tunas 9 bulan sekali, mulai TM 1-25 (output 35-40/pohon )</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil106, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil107, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>Sub total tenaga kerja TBM ke TM</td>
                                    <td style="width: 50px;"><?php echo  number_format($hasil106, 1, ".", ",") . " HOK "; ?></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil107, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
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
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil108, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>th 5-6: 900 kg/orang ( 1 HOK )</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil109, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>th7-9 : 1000 kg/orang ( 1 HOK )</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil110, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>th 9-15 : 1200 kg/orang ( 1 HOK)</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil111, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>th 16-20 :1000kg/orang ( 1 HOK )</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil112, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
                                </tr>
                                <tr style="width: 100px;">
                                    <td>>20 th : 900 kg/0rang (1 HOK)</td>
                                    <td style="width: 50px;"></td>
                                    <td style="width: 70px;"><?php echo " Rp. " . number_format($hasil113, 2, ".", ","); ?></td>
                                    <td style="width: 100px;"></td>
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