<?php
$home_section_4 = get_field('home_section_4');
if ($home_section_4):
    $home_s4_judul_section = $home_section_4['home_s4_judul_section'];
    $buttons = $home_section_4['buttons'];
    $home_s4_content_section = $home_section_4['home_s4_content_section'];
?>
<section class="section-4 bg-slate-100  flex flex-col justify-center items-center">
    <div class="container text-center py-20">
        <h4 class="text-primary mb-5">
            <?php echo $home_s4_judul_section; ?>
        </h4>
        <div class="flex justify-center gap-5 flex-wrap">
            <?php foreach ($buttons as $button): ?>
                <a href="<?php echo $button['button_link']; ?>" class="btn btn-primary hover:scale-105 duration-200">
                    <?php echo $button['button_text']; ?>
                </a>
            <?php endforeach; ?>    
        </div>
        <p class="text-2xl mb-5">
            <?php echo $home_s4_content_section; ?>
        </p>
    </div>
</section>
<?php endif; ?>