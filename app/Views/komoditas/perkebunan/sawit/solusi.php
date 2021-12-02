<?php
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$menu_solusiSawit = $menu->solusiSawit();
?>
<div class="container">
    <div class="row mt-5">
        <div align="center">
            <img src="<?php echo base_url() ?>/assets/img/SOLUSI.png" class="img-fluid rounded-pill" alt="" width="400px">
            <br>
        </div>
        <?php foreach ($menu_solusiSawit as $menu_solusiSawit) { ?>
            <div class="col-md-4" style="background:#b5e7a0">
                <button type="button" class="btn btn-lg" style="background:#b5e7a0">
                    <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('berita/solusi_sawit/' . $menu_solusiSawit['slug_berita']) ?>"><?php echo $menu_solusiSawit['judul_berita'] ?></a></li>
                </button>
            </div>
        <?php } ?>
    </div>
</div>