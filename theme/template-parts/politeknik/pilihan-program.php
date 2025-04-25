<?php
$pilihan_program = get_field('pilihan_program_studi');
?>

<?php if ($pilihan_program && is_array($pilihan_program)) : ?>
    <div class="splide__arrows my-5">
        <button id="pilihan-program-splide-prev" class="text-primary text-3xl">
            <i class="bi bi-arrow-left-circle-fill"></i>
        </button>
        <button id="pilihan-program-splide-next" class="text-primary text-3xl">
            <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
    </div>

    <div id="pilihan-program-splide" class="splide" role="group" aria-label="Pilihan Program Studi">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach ($pilihan_program as $item) :
                    $title = isset($item['title']) ? trim($item['title']) : '';
                    $content = isset($item['content']) ? trim($item['content']) : '';

                    // Abaikan jika kosong semua
                    if (!$title && !$content) continue;
                ?>
                    <li class="splide__slide">
                        <?php if ($title) : ?>
                            <div class="bg-secondary p-2 text-center">
                                <strong class="text-white"><?php echo esc_html($title); ?></strong>
                            </div>
                        <?php endif; ?>

                        <?php if ($content) :
                            $lines = explode(PHP_EOL, $content); ?>
                            <div class="p-6">
                                <ul class="list-disc pl-4">
                                    <?php foreach ($lines as $line) :
                                        $line = trim($line);
                                        if ($line !== '') : ?>
                                            <li><?php echo $line; ?></li>
                                        <?php endif;
                                    endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
