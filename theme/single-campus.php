<?php
get_header();

$no_wa = get_field('no_whatsapp', 'option');
?>
<div class="">

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <section class="bg-secondary mb-20">
                <div class="container">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 min-h[380px] py-20 items-center justify-between">
                        <div class="lg:col-span-2">
                            <div class="h-20 w-full">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class=" h-[120px] object-fill">
                            </div>

                        </div>
                        <div class="lg:col-span-2">
                            <h1 class="font-bold text-3xl lg:text-5xl text-white mb-0"><?php the_title(); ?></h1>
                        </div>

                    </div>
                </div>
            </section>
            <section class="container mb-20">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-16">
                    <div class="lg:col-span-3">
                        <div class="">

                            <?php the_content() ?>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="relative lg:-top-32 rounded-xl overflow-hidden bg-white shadow-2xl ">
                            <div class="p-6 lg:p-10">
                                <h5 class="text-xl font-bold "><?php the_title(); ?></h5>
                                <div class="flex flex-col divide-y divide-primary/30 ">
                                    <?php if (get_field('telp')): ?>
                                        <span class="flex gap-2 py-3">
                                            <i class="bi bi-telephone"></i>
                                            <?php the_field('telp') ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (get_field('hp')): ?>
                                        <span class="flex gap-2 py-3">
                                            <i class="bi bi-phone-fill"></i>
                                            <?php the_field('hp') ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (get_field('alamat')): ?>
                                        <span class="flex gap-2 py-3">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <?php the_field('alamat') ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (get_field('email')): ?>
                                        <span class="flex gap-2 py-3">
                                            <i class="bi bi-envelope-at-fill"></i>
                                            <?php the_field('email') ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="bg-secondary px-6 py-3 lg:px-10 text-white flex lg:justify-between flex-wrap justify-center items-center">
                                <a href="https://wa.me/<?php echo $no_wa  ?>?text=Hallo%20LP3I" class="btn"> Hubungi Kami</a>
                                <a href="https://pmb.lp3i.ac.id/" class="btn">Daftar Online</a>
                            </div>
                        </div>
                        <?php if (get_field('jadwal')): ?>
                            <div class="rounded-xl bg-secondary text-white p-6 pb-6 lg:p-10 jadwal relative lg:-mt-24">
                                <h4 class="text-xl mb-0">Jadwal pendaftaran dan mulai program</h4>
                                <?php the_field('jadwal') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="mb-20">
                <div class="container">
                    <div class="text-center">
                   <p class="mb-0 text-xl">Puluhan Mitra  </p> 
                  <h4 class="text-primary"> Penempatan Kerja </h4>  
                    </div>
                    <?php if(get_field('mitra')): ?>
                        <?php the_field('mitra'); ?>
                    <?php endif; ?>
                </div>
            </section>
    <?php endwhile;
    endif; ?>
</div>
<?php get_footer(); ?>