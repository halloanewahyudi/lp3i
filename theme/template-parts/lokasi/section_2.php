<?php
$college = new WP_Query(create_location_list('lp3i-college'));
$politeknik = new WP_Query(create_location_list('politeknik-lp3i'));
?>
<section class="mb-20">
<div class="container">
        <div x-data="{ activeTab: 'tab1' }" class="p-4">
            <!-- Tab Buttons -->
            <div class="flex space-x-4 border-b border-secondary/60  text-secondary">
                <button @click="activeTab = 'tab1'" :class="{'active border-b-4 border-secondary': activeTab === 'tab1'}" class="btn-tab pb-4 cursor-pointer">
                    <span class="text-2xl font-bold"> LP3I College</span>
                </button>
                <button @click="activeTab = 'tab2'" :class="{'active border-b-4 border-secondary': activeTab === 'tab2'}" class="btn-tab pb-4 cursor-pointer">
                    <span class="text-2xl font-bold"> Politeknik LP3I</span>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="mt-10">
                <div x-show="activeTab === 'tab1'" x-transition><!--  contemt tab 1 -->
                    <?php if ($college->have_posts()) : ?>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                            <?php while ($college->have_posts()) : $college->the_post(); ?>
                                <div class="campus-item rounded-lg hover:shadow-2xl  border border-r-4 border-b-4 border-primary/70 duration-300 ease-in-out h-max">
                                    <div class="p-6 h-max">
                                        <h3 class="text-xl font-bold text-primary"> <?php the_title(); ?> </h3>
                                        <?php if (get_field('alamat')): ?> <p class="mt-2 text-sm "> <?php the_field('alamat'); ?> </p> <?php endif; ?>
                                    </div>
                                    <div class="bg-secondary/20 border-t border-secondary/60 px-6 py-2 flex justify-between flex-wrap relative bottom-0">
                                        <a href="<?php the_permalink(); ?>" class="text-sm font-medium text-primary"> Selengkapnya</a>
                                        <?php if (get_field('lokasi_map')): ?>
                                            <?php $lokasi_map = get_field('lokasi_map'); ?>
                                            <a href="https://www.google.com/maps/search/?api=1&query=<?php echo $lokasi_map; ?>" target="_blank" class="text-sm flex items-center gap-2">
                                                <i class="bi bi-geo-alt"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div x-show="activeTab === 'tab2'" class="tabs__content__item" x-transition> <!-- konten tab 2 -->
                    <?php if ($politeknik->have_posts()) : ?>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                            <?php while ($politeknik->have_posts()) : $politeknik->the_post(); ?>
                                <div class="campus-item rounded-lg hover:shadow-2xl  border border-r-4 border-b-4 border-primary/70 duration-300 ease-in-out h-max">
                                    <div class="p-6 h-max">
                                        <h3 class="text-xl font-bold text-primary"> <?php the_title(); ?> </h3>
                                        <?php if (get_field('alamat')): ?> <p class="mt-2 text-sm "> <?php the_field('alamat'); ?> </p> <?php endif; ?>
                                    </div>
                                    <div class="bg-secondary/20 border-t border-gray-300 px-6 py-2 flex justify-between flex-wrap relative bottom-0">
                                        <a href="<?php the_permalink(); ?>" class="text-sm font-medium text-primary"> Selengkapnya</a>
                                        <?php if (get_field('lokasi_map')): ?>
                                            <?php $lokasi_map = get_field('lokasi_map'); ?>
                                            <a href="https://www.google.com/maps/search/?api=1&query=<?php echo $lokasi_map; ?>" target="_blank" class="text-sm flex items-center gap-2">   
                                                <i class="bi bi-geo-alt"></i>
                                            </a>                                           
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>