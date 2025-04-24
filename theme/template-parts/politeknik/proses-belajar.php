<?php
$proses_belajar = get_field('proses_belajar');
$proses_belajar_group = get_field_object('proses_belajar');
if (!$proses_belajar) return;
$text = $proses_belajar['description'];

$content = $proses_belajar['seperti_apa_ekosistem_belajar_mengajar_di_lp3i'];
?>

<div>
    <p> 
    <?php echo $text; ?>
    </p>
   
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-10">
        <?php for ($i=1; $i<=5; $i++): ?>
            <div>
                <img src="<?php echo $proses_belajar['item_'.$i]['image'] ?>"class="w-full mb-3">
                <?php echo $proses_belajar['item_'.$i]['text'] ; ?>
            </div>
        <?php endfor; ?>
    </div>
    <div>
        <?php echo $content; ?>
    </div>
</div>