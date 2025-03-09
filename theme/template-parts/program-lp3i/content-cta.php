<?php
$text = get_field('text');
$link_text = get_field('link_text');
$link_url = get_field('link_url');
$background = get_field('background');
?>
<section class="py-20 min-h-screen flex flex-col justify-center" style="background: url('<?php echo $background; ?>') no-repeat center/cover;">
    <div class="container">
       <div class="max-w-[720px] w-full text-white">
        <div class="text-base mb-10 font-light leading-snug"> <?php echo $text; ?></div>
       
        <a href="<?php echo $link_url; ?>" class="text-2xl flex items-center gap-3 ">
        <i class="bi bi-whatsapp"></i>  <?php echo $link_text; ?>
        </a>
       </div>
    </div>
</section>