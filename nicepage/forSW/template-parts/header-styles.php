<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>

<style>.u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 81px;
}
.u-header .u-image-1 {
  margin: 25px auto 0 0;
}
.u-header .u-logo-image-1 {
  max-width: 64px;
  max-height: 64px;
}
.u-header .u-menu-1 {
  margin: -32px 0 24px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
  font-weight: 700;
  text-transform: uppercase;
}
.u-block-30dd-17 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-block-30dd-18 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
@media (max-width: 991px) {
  .u-header .u-menu-1 {
    width: auto;
  }
}
@media (max-width: 767px) {
  .u-header .u-image-1 {
    width: auto;
    margin-top: 33px;
  }
  .u-header .u-menu-1 {
    margin-bottom: 33px;
  }
}
@media (max-width: 575px) {
  .u-header .u-image-1 {
    margin-top: 41px;
  }
  .u-header .u-menu-1 {
    margin-bottom: 41px;
  }
}</style>
