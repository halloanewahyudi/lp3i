<?php
$home_section_4 = get_field('home_section_4');
$home_s4_judul_section = $home_section_4['home_s4_judul_section'];
$buttons = $home_section_4['buttons'];
$home_s4_content_section = $home_section_4['home_s4_content_section'];
?>
<section class="bg-light py-20 ">
    <div class="container">
        <h2 class="text-4xl font-bold mb-10 text-center text-secondary" x-data="{show:false}" x-intersect="show = true" x-intersect:leave="show = false" :class="show ? 'fade-up opacity-100' : 'opacity-0'" ><?php echo $home_s4_judul_section; ?></h2>
        <div class="flex justify-center flex-wrap items-center gap-5">
            <?php foreach ($buttons as $button) { ?>
                <a href="<?php echo $button['button_link']; ?>" class="flex items-center w-max gap-2 bg-secondary text-white text-xl py-2 px-4 rounded-full group hover:shadow-2xl hover:bg-secondary-dark duration-200">
                    <?php echo $button['button_text'] ?>
                </a>
            <?php } ?>
        </div>
    </div>
</section>