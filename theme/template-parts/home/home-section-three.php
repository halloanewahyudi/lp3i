<?php
$home_section_3 = get_field('home_section_3');
$home_s3_judul_section = $home_section_3['home_s3_judul_section'];
$sub_title = $home_section_3['sub_title'];
$button = $home_section_3['button'];
$list = $home_section_3['list'];
$background = $home_section_3['background'];
?>

<section class="min-h-[480px] py-20 flex flex-col justify-center items-center" style="background:url('<?php echo $background; ?>')no-repeat center/cover; background-size: cover">
    <div class="container">
        <?php if ($home_s3_judul_section) { ?>
            <h2 class="text-4xl font-bold mb-2 text-white text-center" x-data="{show:false}" x-intersect="show = true" x-intersect:leave="show = false" :class="show ? 'fade-up opacity-100' : 'opacity-0'" ><?php echo $home_s3_judul_section; ?></h2>
        <?php } ?>
        <?php if ($sub_title) { ?>
            <p class="mb-4 text-white text-center text-xl" ><?php echo $sub_title; ?></p>
        <?php } ?>
        <?php if ($list) { ?>
            <ul class="mb-4 text-white text-center flex justify-center gap-4 flex-wrap" x-data="{show:false}" x-intersect="show = true" x-intersect:leave="show = false" :class="show ? 'fade-up opacity-100' : 'opacity-0'">
                <?php foreach ($list as $l) { ?>
                    <li class="mb-2">
                        <a href="<?php echo $l['link']; ?>" class="flex items-center gap-2 bg-secondary py-2 px-4 rounded-full group hover:shadow-2xl hover:bg-secondary-dark duration-200">
                            <div class="w-12 h-12 rounded-full bg-white flex justify-center items-center">
                                <img src="<?php echo $l['icon']; ?>" alt="<?php echo $l['text']; ?>" class="w-10 h-10 grou-hover:scale-110 duration-200">
                            </div>
                            <span class="text-xl"> <?php echo $l['text']; ?> </span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
        <?php if ($button) { ?>
            <div class="flex justify-center" >
                <a href="<?php echo $button['button_link']; ?>" class="btn btn-primary"><?php echo $button['button_text']; ?></a>
            </div>
        <?php } ?>
    </div>
</section>