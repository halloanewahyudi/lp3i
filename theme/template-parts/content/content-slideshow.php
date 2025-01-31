<?php
$args = array(
    'post_type' => 'slideshow',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'slide-category',
            'field' => 'slug',
            'terms' => 'home',
        )
    ),
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$slides = new WP_Query($args);

if ($slides->have_posts()) : ?>
    <div id="slideshow" class="splide bg-gradient-to-t from-primary via-primary-800 to-primary-900 mb-20">
        <div class="splide__track">
            <ul class="splide__list">
                <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                    <li class="splide__slide min-h-screen flex flex-col justify-center items-center bg-cover bg-no-repeat" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                        <div class="container">
                            <div class="max-w-[600px] text-primary-50">
                                <?php if (get_field('include_title')): ?>
                                    <h2 class="text-white"><?php the_title(); ?></h2>
                                <?php endif; ?>
                                <?php if (get_field('add_description') && get_field('description')): ?>
                                    <div class="text-xl">
                                        <?php echo get_field('description'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('add_button') && get_field('button')): ?>
                                    <div class="flex flex-wrap items-center gap-5">
                                    <?php
                                    // Loop through rows.
                                    while (have_rows('button')) : the_row();
                                      
                                        // Load sub field value.
                                        $btn_text = get_sub_field('button_text');
                                        $btn_link = get_sub_field('buton_link');
                                        
                                        echo '<a href="' . esc_url($btn_link) . '" class="btn btn-secondary">' . esc_html($btn_text) . '</a>';
                                    // Do something, but make sure you escape the value if outputting directly...

                                    // End loop.
                                    endwhile;
                                    ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>
<?php endif; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slideshow = new Splide('#slideshow', {
            type: 'loop',
            perPage: 1,
            pagination: false,
            autoplay: true,
            interval: 3000,
            arrows: true
        });

        slideshow.mount();
    })
</script>