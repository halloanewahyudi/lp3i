<?php
$home_section_6 = get_field('home_section_6');
$judul_section = $home_section_6['judul_section'];
$sub_title = $home_section_6['sub_title'];
$logo_mitra = $home_section_6['logo_mitra'];
?>
<section class="mb-24">
    <div class="container h-max flex flex-col items-center text-center">
        <p class="text-2xl text-secondary" >
            <?php echo $sub_title; ?>
        </p>
        <h2 class="text-4xl font-bold mb-16 text-secondary"  x-data="{show:false}" x-intersect="show = true" x-intersect:leave="show = false" :class="show ? 'fade-up opacity-100' : 'opacity-0'">
            <?php echo $judul_section; ?>
        </h2>

        <div class="flex flex-wrap gap-6 lg:gap-12 items-center justify-center">
            <?php foreach ($logo_mitra as $logo) : ?>
                <img src="<?php echo $logo; ?>" alt="" class="h-7 w-auto hover:scale-110 duration-200" x-data="{show:false}" x-intersect="show = true" x-intersect:leave="show = false" :class="show ? 'fade-up opacity-100' : 'opacity-0'">
            <?php endforeach; ?>
        </div>
    </div>
</section>