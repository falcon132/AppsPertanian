<?php
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
$menu_perikanan = $menu->perikanan();
$menu_perkebunan = $menu->perkebunan();
?>
<div class="container">
    <div class="row mt-5">
        <div align="center">
            <img src="<?php echo base_url() ?>/assets/img/panduan-cov.png" class="img-fluid rounded-pill" alt="" width="400px">
            <br>
        </div>
        <?php foreach ($menu_perikanan as $menu_perikanan) { ?>
            <div style="background:#b5e7a0">
                <button class="btn btn-success " type="submit">
                    <li><i class="bx bx-chevron-right"></i> <a class="text-white" href="<?php echo base_url('berita/panduan_padi/' . $menu_perikanan['slug_berita']) ?>"><?php echo $menu_perikanan['judul_berita'] ?></a></li>
                </button>
            </div>
        <?php } ?>
    </div>
</div>