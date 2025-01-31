<?php
$home_section_1 = get_field('home_section_1');
if ($home_section_1):
    // kiri
    $home_s1_image = $home_section_1['home_s1_image'];
    $counter = $home_section_1['counter'];
    $angka = $counter['angka'];
    $counter_text = $counter['counter_text'];
    // kanan
    $home_s1_content_section = $home_section_1['home_s1_content_section'];
    $title = $home_s1_content_section['title'];
    $description = $home_s1_content_section['description'];
    $list = $home_s1_content_section['list'];
    $last_description = $home_s1_content_section['last_description'];
    $button = $home_s1_content_section['button'];
?>
    <section class="section-one mb-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12">
                <div class="relative"> <!-- kiri -->
                    <img class="w-full h-auto object-cover fade-up" src="<?php echo $home_s1_image['url']; ?>" alt="<?php echo $home_s1_image['alt']; ?>">
                    <div class="bg-secondary absolute top-1/2 -right-5 rounded-xl p-6 max-w-[200px] text-white flex flex-col justify-center items-center text-center">
                        <h1 class="text-white"><?php echo $angka; ?></h1>
                        <p><?php echo $counter_text; ?></p>
                    </div>
                </div> <!-- end kiri -->
                <div> <!-- kanan -->

                    <h4 class="text-secondary mb-5"><?php echo $title; ?></h4>
                    <div class="text-xl">
                        <?php echo $description; ?>
                    </div>
                    <div class="flex flex-col gap-3 mt-6">
                        <?php foreach ($list as $item): ?>
                            <div class="flex items-center gap-6 text-xl">
                                <div class="flex gap-3">
                                    <img class="w-16 h-16 shrink-0" src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>">
                                    <?php echo $item['text']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
<?php endif; ?>