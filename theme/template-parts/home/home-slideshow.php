<?php
$args = array(
    'post_type'      => 'slideshow',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'tax_query'      => array(
        array(
            'taxonomy' => 'slideshow-category', // replace with your taxonomy name
            'field'    => 'name',
            'terms'    => 'home',
        ),
    ),
);
$loop = new WP_Query($args);
if ($loop->have_posts()): ?>

<div id="home-slideshow" class="splide bg-primary-dark mb-24" aria-label="Home Slideshow" >
        <div class="splide__track">
            <ul class="splide__list">
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <li class="splide__slide w-full min-h-[580px] lg:p-12"
                        style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
                        <div class="flex flex-col justify-center h-full">
                            <div class="container">
                            <div class="max-w-[678px]">
                                <h1 class="text-5xl font-bold mb-2 text-white"><?php the_title(); ?></h1>
                                <?php if(get_field('description')) 
                                { echo '<div class="text-white text-xl">' . get_field('description') . '</div>';
                                 } ?>
                                 <?php if( have_rows('button') ): ?>
                                    <div class="mt-4 flex flex-wrap items-center gap-4">
                                        <?php while( have_rows('button') ): the_row(); ?>
                                            <a href="<?php echo get_sub_field('buton_link'); ?>"
                                                class="btn-secondary w-max ">
                                                <?php echo get_sub_field('button_text'); ?></a>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            </div>
                        </div>
                    </li> <!-- ✅ TAG <li> SEKARANG SUDAH DITUTUP -->
                <?php endwhile; ?>
            </ul>
        </div>
    </div>

<?php endif;
wp_reset_postdata(); ?>
