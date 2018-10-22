  <a class="toggleMenu" href="#">Menu</a>
  <div id="hero" class="wrap">
      <?php include "menu-kiri.php"; ?>
    <div id="header">
      <?php include "header-slide.php"; ?>
    </div><div class="clear"></div>
  </div>
  
  <div style='background:#fff' class="wrap">
      <div id="event" class="block">
        <div class="event-nav">
            <a href=# id="event-prev">Prev</a>
            <a href=# id="event-next">Next</a>
        </div>
        <?php include "agenda-atas.php"; ?>
        <div class="clear"></div>
      </div>

      <?php include "pmb-atas.php"; ?>
  </div>
  
  <!-- content start -->
  <div id="content-container" class="wrap">
      <?php include "berita-home.php"; ?>
            
    <div id="pengumuman" class="block">
      <?php include "sidebar-pengumuman.php"; ?>
    </div>

    <div id="lowongan" class="block">
      <?php include "sidebar-lowongan.php"; ?>
    </div>
  </div>

  <div id="footer-banner">
    <?php include "banner-footer.php"; ?>
  </div>
  
  <div id="credit">
    <?php include "info-footer.php"; ?>
  </div>
  
<script type="text/javascript">
jQuery(document).ready(function($) {
  $("#rotator").cycle({ 
      fx: 'fade',
      timeout: 3000,
      speed: 1000,
      pause: 1,
      fit: 1
  });
});
</script>
