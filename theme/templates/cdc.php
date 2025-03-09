<?php
/* Template Name: CDC */
?>
<?php get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 


get_template_part( 'template-parts/cdc/section_one' );
get_template_part( 'template-parts/cdc/section_two' );
get_template_part( 'template-parts/cdc/section_three' );
get_template_part( 'template-parts/cdc/section_four' );
get_template_part( 'template-parts/cdc/section_five' );

get_template_part( 'template-parts/content/content','cta' );

endwhile; 
endif;

get_footer(); ?>