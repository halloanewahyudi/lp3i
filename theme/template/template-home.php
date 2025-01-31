<?php
/* Template Name: Home */
get_header();
?>
<div class="">

<?php 
if(have_posts()):
    while(have_posts()):
        the_post();
      get_template_part( 'template-parts/home/section', 'slideshow');
      get_template_part( 'template-parts/home/section', 'one');
      get_template_part( 'template-parts/home/section', 'two');
      get_template_part( 'template-parts/home/section', 'three');
    endwhile;
endif;
 ?>

</div>
<?php get_footer(); ?>
