<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
<?php
$footerHideBlog = false;
$footerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home();
$footerHideProducts = false;
$footerHideProduct = false;
$footerHideCart = false;
$pageProducts = false;
$pageProduct = false;
$pageCart = false;
if (function_exists('wc_get_product')) {
    $pageProducts = is_shop() || is_product_category();
    $pageProduct = is_product();
    $pageCart = is_cart();
} ?>
		</div><!-- #content -->
<?php if (!$pageBlog && !$pagePost && !$pageProducts && !$pageProduct && !$pageCart ||
    $pageBlog && !$footerHideBlog ||
    $pagePost && !$pageProduct && !$footerHidePost ||
    $pageProducts && !$footerHideProducts ||
    $pageProduct && !$footerHideProduct ||
    $pageCart && !$footerHideCart) { ?>
        <footer class="u-align-center u-clearfix u-footer u-palette-4-dark-2 u-footer" id="sec-1ec7">
  <div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="https://nicepage.com/WordPress Theme" target="_blank">
        <span>wordpress-themes</span>
            </a>
        <p class="u-text"><span>created with</span></p>
        <a class="u-link" href="https://nicepage.com/wordpress-website-builder" target="_blank"><span>WordPress Website Builder</span></a>.
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
