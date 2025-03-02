<?php
$section_2 = get_field('home_section_2');
$home_s2_judul_section = $section_2['home_s2_judul_section'];
$featured = $section_2['featured'];
?>
<section class="mb-24">
    <div class="container">
        <h2 class="text-4xl font-bold mb-16 text-center text-secondary"><?php echo $home_s2_judul_section; ?></h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10" data-aos="fade-up">
            <?php foreach ($featured as $f) { ?>
                <div class="flex flex-col h-full  items-center gap-6 bg-white rounded-xl border border-gray-300  overflow-hidden hover:shadow-2xl duration-200">
                    <img src="<?php echo $f['image']; ?>" alt="<?php echo $f['title']; ?>" class="w-full">
                    <div class="px-6  pt-6 pb-12 h-full relative">
                        <h3 class="text-2xl font-bold mb-2"><?php echo $f['title']; ?></h3>
                        <p class="mb-auto"><?php echo $f['description']; ?></p>
                        <div class="absolute bottom-6 right-6">
                            <a href="<?php echo $f['link']; ?>" class="text-4xl text-secondary "><i class="bi bi-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>