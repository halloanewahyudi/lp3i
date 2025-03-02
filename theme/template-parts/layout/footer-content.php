<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

$logo_footer = get_field('logo_footer', 'option');
$menu_title = get_field('menu_title', 'option');
$address_title = get_field('address_title', 'option');
$address = get_field('address', 'option');
$no_whatsapp = get_field('no_whatsapp', 'option');
$image_address = get_field('image_address', 'option');
$sosmed = get_field('sosmed', 'option');
?>

<footer id="colophon" class="bg-primary pt-20   text-gray-300">
    <div class="container mb-10">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
            <div class="lg:col-span-2">
                <a href="<?php echo home_url(); ?>" class="mt-auto">
                    <?php

                    if ($logo_footer) {
                        $logo_url = is_array($logo_footer) ? $logo_footer['url'] : wp_get_attachment_image_url($logo_footer, 'full');
                        echo '<img src="' . esc_url($logo_url) . '" alt="Logo Footer" class="w-32 h-auto">';
                    }
                    ?>
                </a>

                <!-- sosmed -->
                <div class="flex flex-wrap items-center mt-6 gap-6 lg:gap-10">

                    <?php if ($sosmed):
                        foreach ($sosmed as $sos) { ?>
                            <a href="<?php echo $sos['sosmed_link']; ?>" target="_blank" rel="noopener noreferrer" class="text-2xl hover:text-secondary duration-200">
                                <i class="bi bi-<?php echo $sos['sosmed_name']; ?>"></i>
                            </a>
                    <?php }
                    endif; ?>
                </div>

            </div>
            <div class="">
                <h4 class="text-xl font-medium mb-4"><?php echo $menu_title; ?></h4>
                <?php echo wp_nav_menu(array('theme_location' => 'menu-2')); ?>
            </div>
            <div class="">
                <h4 class="text-xl font-medium mb-4"><?php echo $address_title; ?></h4>
                <div class="mb-5">
                    <?php echo $address; ?>
                </div>
                <?php if($no_whatsapp): ?>
                <div class="mb-5">
                    <a href="https://wa.me/<?php echo $no_whatsapp; ?>?text=Hallo%20LP3I" class="text-white hover:text-secondary duration-200">
                        <i class="bi bi-whatsapp"></i> <?php echo $no_whatsapp; ?>
                    </a>
                </div>
                <?php endif; ?>
                <img src="<?php echo $image_address; ?>" alt="LP3I College">
            </div>
        </div>
    </div>
    <div class="container border-t border-gray-300/25">
        <div class="text-center py-4 text-sm">
            <p>© <?php echo date('Y'); ?> LP3I College. All rights reserved.</p>
        </div>
    </div>
</footer>