<?php
$komponen_kompetensi = get_field('3_komponen_kompetensi');
?>
<div>
    <?php echo $komponen_kompetensi['text']; ?>
</div>
<?php for ($i = 0; $i <= 3; $i++): ?>
    <div class="flex flex-wrap items-center gap-3">
        <img src="<?php echo $komponen_kompetensi['item_' . $i]['image'] ?>" alt="" class="max-w-[120px] shrink-0">
        <div>
        <?php echo $komponen_kompetensi['item_' . $i]['deskripsi'] ?>
        </div>
    </div>
<?php endfor; ?>

</div>