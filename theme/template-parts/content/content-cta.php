<?php
$text = get_field('text', 'option');
$link_text = get_field('link_text','option');
$link_url = get_field('link_url','option');
$background = get_field('background','option');

?>
<section class="cta py-20 min-h-screen flex flex-col justify-center bg-primary" style="background: url('<?php echo $background; ?>') no-repeat center/cover;">
    <div class="container">
       <div class="max-w-[600px] w-full text-white">
        <div class="mb-10 font-semibold leading-snug text-3xl"> <?php echo $text; ?></div>
       
        <a href="<?php echo $link_url; ?>" class="text-2xl flex items-center gap-3 ">
        <i class="bi bi-whatsapp"></i>  <?php echo $link_text; ?>
        </a>
       </div>
    </div>
</section>