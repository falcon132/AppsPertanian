<?php
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
$menu_perikanan = $menu->perikanan();
$menu_perkebunan = $menu->Perkebunan();
?>
<div class="container">
    <div class="row mt-5">
        <div align="center">
            <img src="<?php echo base_url() ?>/assets/img/hama-cov.png" class="img-fluid rounded-pill" alt="" width="400px">
            <br>
        </div>
        <?php foreach ($menu_perkebunan as $menu_perkebunan) { ?>
            <div style="background:#b5e7a0">
                <button type="button" class="btn btn-lg" style="background:#b5e7a0">
                    <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('berita/hama_padi/' . $menu_perkebunan['slug_berita']) ?>"><?php echo $menu_perkebunan['judul_berita'] ?></a></li>
                </button>
            </div>
        <?php } ?>
    </div>
</div>