<?php

use App\Models\Menu_model;

$menu         = new Menu_model();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
?>
<!-- ======= Top Bar ======= -->
<div id="topbar" class="fixed-top bg-light" width="10px">

</div>

<!-- ======= Header ======= -->
<header>
  <div>
    <nav>
      <ul>
        <ul>
          <?php foreach ($menu_berita as $menu_berita) { ?>
          <?php } ?>
        </ul>
        <ul>
          <?php foreach ($menu_layanan as $menu_layanan) { ?>
          <?php } ?>
        </ul>
      </ul>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->