<?php
get_header();
?>
<div class="template-clean">
<?php
$customPost = array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'post_status'    => 'publish',
    'catergory_name' => 'trending',
);
$loop = new WP_Query($customPost);
?>
<section class="py-20">
    <div class="container pb-10">
        <h1 class="text-secondary text-3xl lg:text-4xl">Trending</h1>
    </div>
    <div id="splide-blog" class="splide" aria-label="Splide Blog">
        <div class="splide__track">
            <ul class="splide__list">
                <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                        <li class="splide__slide">
                            <a href="<?php the_permalink(); ?>" class=" bg-white rounded-xl overflow-hidden border group relative h-[340px] p-6 text-white flex flex-col justify-end">
                                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-bg-primary to-primary/60  z-10"></div>
                                <div class="w-full  overflow-hidden absolute z-0 top-0 left-0">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="h-[340px] w-full object-cover group-hover:scale-110 duration-300 ease-in-out">
                                </div>
                                <div class="text-sm relative z-20">
                                    <span class="text-xs mb-2 inline-block"><i class="bi bi-calendar3"></i> <?php echo get_the_date(); ?></span> <br>
                                    <span class="font-semibold mb-2"> <?php the_title(); ?> </span>

                                </div>
                            </a>
                        </li>
                    <?php endwhile;
                else: ?>
                    <li class="splide__slide">No posts found</li>
                <?php endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="flex justify-end gap-2 text-2xl pt-10">
            <button id="splide-blog-prev" class="cursor-pointer"><i class="bi bi-arrow-left"></i></button>
            <button id="splide-blog-next" class="cursor-pointer"><i class="bi bi-arrow-right"></i></button>
        </div>
    </div>
</section>

<section id="mustRead" class="pb-10 py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <?php
        $categories = get_categories(array(
            'exclude' => [1, 46] // Pastikan ID kategori yang dikecualikan benar
        ));

        foreach ($categories as $category) :
            $args = array(
                'cat' => $category->term_id,
                'posts_per_page' => 4,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
        ?>
                <div class="category-section mb-12">
                    <div class="border-b border-primary/50  mb-6">
                        <h2 class="text-2xl font-bold text-primary pb-2 border-b-4 border-primary inline-block"><?php echo esc_html($category->name); ?></h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="w-full h-48 object-cover" alt="<?php the_title_attribute(); ?>">
                                    <?php else : ?>
                                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="w-full h-48 object-cover" alt="No Image">
                                    <?php endif; ?>
                                </a>
                                <div class="p-4">
                                    <h5 class="text-lg font-semibold">
                                        <a href="<?php the_permalink(); ?>" class="text-gray-800 hover:text-primary transition"><?php the_title(); ?></a>
                                    </h5>
                                    <p class="text-gray-600 mt-2 text-sm"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="flex justify-center mt-6">
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="px-6 py-3 bg-primary text-white font-semibold rounded-full hover:bg-primary-dark hover:ring-2 hover:ring-primary ring-offset-2 transition">
                            <?php echo esc_html($category->name); ?> Selengkapnya
                        </a>
                    </div>
                </div>
        <?php
            endif;
            wp_reset_postdata();
        endforeach;
        ?>
    </div>
</section>


</div>
<?php get_footer(); ?>