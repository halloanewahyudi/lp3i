<?php
$home_section_7 = get_field('home_section_7');
$judul_section = $home_section_7['judul_section'];
$sub_title = $home_section_7['sub_title'];

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
);
$loop = new WP_Query($args);
if ($loop->have_posts()): ?>
    <section class="mb-24">
        <div class="container">
            <p class="text-2xl text-center text-secondary" data-aos="fade-up" data-aos-duration="700"><?php echo $sub_title; ?></p>
            <h2 class="text-4xl font-bold mb-16 text-center text-secondary" data-aos="fade-up" data-aos-duration="700"><?php echo $judul_section; ?></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-10">
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <div class="flex flex-col h-full items-center bg-white rounded-xl border border-gray-300  overflow-hidden hover:shadow-2xl duration-200">
                    <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        <div class="p-6">
                        <span class="text-sm text-gray-500"> <i class="bi bi-calendar3"></i> <?php echo get_the_date(); ?></span>    
                            <a href="<?php the_permalink(); ?>" class="text-secondary hover:text-secondary-dark duration-200">
                                <h3 class="text-xl font-medium mb-2"><?php the_title(); ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>