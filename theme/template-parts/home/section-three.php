<?php
$home_section_3 = get_field('home_section_3');
if ($home_section_3):
    $home_s3_judul_section = $home_section_3['home_s3_judul_section'];
    $list = $home_section_3['list'];
    $background = $home_section_3['background'];
    $sub_title = $home_section_3['sub_title'];
    $button = $home_section_3['button'];
?>
    <section class="section-3 bg-cover bg-no-repeat min-h-screen flex flex-col justify-center items-center text-primary-50 mb-24" style="background-image: url('<?php echo $background; ?>');">
        <div class="container text-center">
            <h4 class="text-primary-50 mb-5">
                <?php echo $home_s3_judul_section; ?>
            </h4>
            <p class="text-2xl mb-5"><?php echo $sub_title; ?></p>
            <a href="<?php echo  $button['button_link']; ?>" class="btn btn-primary mb-5">
                <?php echo $button['button_text']; ?>
            </a>
            <div class="flex flex-wrap justify-center items-center max-w-screen-md mx-auto gap-6 ">
                <?php foreach ($list as $l): ?>
                    <a href="<?php echo $l['link']; ?>" class="flex flex-wrap items-center gap-5 rounded-full bg-secondary-50 text-secondary p-2.5 min-w-[200px] hover:bg-primary hover:text-primary-50 duration-200">
                        <img src="<?php echo $l['icon']; ?>" alt="">
                        <span class="text-xl font-semibold"><?php echo $l['text']; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>