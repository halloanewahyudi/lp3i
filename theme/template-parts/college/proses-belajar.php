<?php
$proses_belajar = get_field('proses_belajar');
if (!$proses_belajar) return;
$text = $proses_belajar['text'];
$kolom_1 = $proses_belajar['kolom_1'];
$kolom_2 = $proses_belajar['kolom_2'];
$kolom_3 = $proses_belajar['kolom_3'];
$content = $proses_belajar['content'];
?>

<div>
    <p>
    <?php echo $text; ?>
    </p>
   
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-10">
        <?php for ($i = 1; $i <= 3; $i++):
            ${"kolom_$i"} = $proses_belajar["kolom_$i"]; ?>
            <div>
                <img src="<?php echo ${"kolom_$i"}['image']['url']; ?>" alt="<?php echo ${"kolom_$i"}['image']['title']; ?>" class="w-full">
                <?php echo ${"kolom_$i"}['deskripsi'] ; ?>
            </div>
        <?php endfor; ?>
    </div>
    <div>
        <?php echo $content; ?>
    </div>
</div>