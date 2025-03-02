<?php
$section_one = get_field('home_section_1');

$image = $section_one['home_s1_image'];
$counter = $section_one['counter'];
$angka = $counter['angka'];
$counter_text = $counter['counter_text'];


$kanan = $section_one['home_s1_content_section'];
$kanan_title = $kanan['title'];
$kanan_description = $kanan['description'];
$kanan_list = $kanan['list'];
$last_description = $kanan['last_description'];
$button = $kanan['button'];


?>
<section class="mb-24">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="relative h-full"> <!-- kiri -->
                <img src="<?php echo $image; ?>" alt="">
                <div data-aos="fade-up" data-aos-duration="700" class="absolute top-1/2 right-1/2 lg:-right-12  -translate-y-1/2 max-w-[200px] bg-secondary p-6 rounded-xl flex items-center justify-center">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold mb-2 text-white"><?php echo $angka; ?></h2>
                        <p class="text-white text-xl"><?php echo $counter_text; ?></p>
                    </div>
                </div>
            </div>
            <div class="px-6 lg:px-10"> <!-- kanan -->
                <h2 class="text-4xl font-bold mb-2" data-aos="fade-up" data-aos-duration="700"><?php echo $kanan_title; ?></h2>
                <p class="mb-4"><?php echo $kanan_description; ?></p>
                <ul class="mb-4">
                    <?php foreach ($kanan_list as $list) { ?>
                        <li class="flex items-center gap-2 mb-2">
                            <img src="<?php echo $list['icon']; ?>" alt="">
                            <span class="text-xl"> <?php echo $list['text']; ?> </span>
                        </li>
                    <?php } ?>
                </ul>
                <p><?php echo $last_description; ?></p>
                <a href="<?php echo $button['button_link']; ?>" class="btn-secondary mt-4"><?php echo $button['button_text']; ?></a>
            </div>
        </div>
    </div>
</section>