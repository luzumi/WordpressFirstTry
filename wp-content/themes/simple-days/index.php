<?php
get_header();

$layout =get_theme_mod( 'simple_days_index_layout_list','list');
if($layout === 'list' ){
  $layout = 'flat_list';
}elseif($layout === 'grid3' ){
  $layout = 'grid grid_3';
}elseif($layout === 'grid2' ){
  $layout = 'grid grid_2';
}elseif($layout === 'grid1' ){
  $layout = 'grid grid_1';
}elseif($layout === 'grid1_2' ){
  $layout = 'grid grid_2 grid_1st_full';
}elseif($layout === 'grid1_3' ){
  $layout = 'grid grid_3 grid_1st_full';
}
?>

<div id="main_wrap" class="wrap_frame m_con f_box f_col110 jc_c001">
  <main class="contents index_contents f_box f_wrap <?php echo esc_attr($layout); ?>">
    <?php
    if(have_posts()):

      get_template_part( 'template-parts/index/post_card' );
      simple_days_index_post_card();

    else:

      get_template_part( 'template-parts/index/content', 'none' );

    endif;

    
    get_template_part( 'template-parts/index/pagination' );

    ?>
  </main>
  <?php
  if(SIMPLE_DAYS_LEFT_SIDEBAR) get_sidebar('left');
  if(SIMPLE_DAYS_RIGHT_SIDEBAR) get_sidebar('right');
  ?>
</div>
<?php get_footer();
