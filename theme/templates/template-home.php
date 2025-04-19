<?php
/* Template Name: Home */

get_header(  );
if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part( 'template-parts/home/home', 'slideshow' );
get_template_part( 'template-parts/home/home', 'section-one' );
get_template_part( 'template-parts/home/home', 'section-two' );
// get_template_part( 'template-parts/home/home', 'section-three' );
// get_template_part( 'template-parts/home/home', 'section-four' );
get_template_part( 'template-parts/home/home', 'section-five' );
get_template_part( 'template-parts/home/home', 'section-six' );
get_template_part( 'template-parts/home/home', 'section-seven' );

endwhile; 
endif; 

get_footer()?>

