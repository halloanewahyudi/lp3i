<?php 
$pilihan_program = get_field('pilihan_program');
// get label pilihan program
$pilihan_program_group = get_field_object('pilihan_program'); 

?>

<?php if ($pilihan_program_group && isset($pilihan_program_group['sub_fields'])) : ?>

<div class="splide__arrows">
    <button id="kurikulum-splide-prev" class="text-primary text-3xl">
    <i class="bi bi-arrow-left-circle-fill"></i>
    </button>
    <button  id="kurikulum-splide-next" class=" text-primary text-3xl">
    <i class="bi bi-arrow-right-circle-fill"></i>
    </button>
</div>
<div id="kurikulum-splide" class="splide" role="group" aria-label="Splide Basic HTML Example">

<div class="splide__track">
    <ul class="splide__list">
        <?php foreach ($pilihan_program_group['sub_fields'] as $field) : 
            $name = $field['name']; // contoh: semester_1
            $label = $field['label'];
            $value = isset($kurikulum_values[$name]) ? $kurikulum_values[$name] : '';
        ?>
            <li class="splide__slide">
                <div class="bg-secondary p-2 text-center">
                <strong class="text-white"><?php echo $label; ?></strong><br>
                </div>
                <div class="p-6">
                <?php echo $value; ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
<?php endif; ?>
