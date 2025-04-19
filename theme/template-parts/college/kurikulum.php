<?php
$kurikulum = get_field('kurikulum_lp3i_college');
if ($kurikulum) {
    $semester_1 = $kurikulum['semester_1'];
    $semester_2 = $kurikulum['semester_2'];
    $semester_3 = $kurikulum['semester_3'];
    $semester_4 = $kurikulum['semester_4'];
    $soft_skill = $kurikulum['soft_skill'];
    $program_lainya = $kurikulum['program_lainya'];
}
?>

<div id="kurikulum-splide" class="splide" role="group" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <?php echo get_field_object('semester_1')['label']; ?>
                 <?php echo $semester_1;  ?></li>
            <li class="splide__slide"> <?php echo $semester_2;  ?></li>
            <li class="splide__slide"> <?php echo $semester_3;  ?></li>
            <li class="splide__slide"> <?php echo $semester_4;  ?></li>
            <li class="splide__slide"> <?php echo $soft_skill;  ?></li>
            <li class="splide__slide"> <?php echo $program_lainya;  ?></li>
        </ul>
    </div>
</div>
