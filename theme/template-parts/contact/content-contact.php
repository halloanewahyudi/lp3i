<?php
$kejasama = get_field('kejasama');
// label kerjasamna \
$label_kerjasama = get_field_object('kejasama');

$konsultasi_pendidikan = get_field('konsultasi_pendidikan');
// label konsultasi pendidikan
$label_konsultasi_pendidikan = get_field_object('konsultasi_pendidikan');

$kantor_yayasan_lp3i_indonesia = get_field('kantor_yayasan_lp3i_indonesia');
// label kantor yayasan lp3i indonesia
$label_kantor_yayasan_lp3i_indonesia = get_field_object('kantor_yayasan_lp3i_indonesia');

?>
<div class="container">
    <div class="text-center py-20 flex flex-col justify-center items-center">
        <h1 class=" text-center text-primary  pb-5"><?php the_title(); ?></h1>
        <div class="max-w-[400px] w-full h-2 bg-primary block rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-20">
        <div class="flex flex-col gap-6">
            <div>
                <h4 class="mb-2"><?php echo $label_kerjasama['label']; ?> </h4>
                <?php echo $kejasama; ?>
            </div>
            <div>
                <h4 class="mb-2"><?php echo $label_konsultasi_pendidikan['label']; ?> </h4>
                <?php echo $konsultasi_pendidikan; ?>
            </div>
            <div>
                <h4 class="mb-2"><?php echo $label_kantor_yayasan_lp3i_indonesia['label']; ?> </h4>
                <div class="flex gap-2 ">
                    <i class="bi bi-whatsapp"></i>
                    <a href="<?php echo $kantor_yayasan_lp3i_indonesia['whatsapp']['url']; ?>">
                        <?php echo $kantor_yayasan_lp3i_indonesia['whatsapp']['title']; ?>
                    </a>
                </div>
                <div class="flex gap-2 ">
                    <i class="bi bi-envelope-check"></i>
                    <a href="mailto:<?php echo $kantor_yayasan_lp3i_indonesia['email']; ?>">
                        <?php echo $kantor_yayasan_lp3i_indonesia['email']; ?>
                    </a>
                </div>
                <div class="flex gap-2 ">
                    <i class="bi bi-geo-alt"></i>
                    <?php echo $kantor_yayasan_lp3i_indonesia['alamat']; ?>
                </div>
            </div>
        </div>
        <div>
         <?php echo do_shortcode( '[contact-form-7 id="27452" title="Contact form 1"]',true ) ?>
        </div>
    </div>
</div>