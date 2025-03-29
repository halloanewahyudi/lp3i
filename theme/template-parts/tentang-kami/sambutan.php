<?php
$sambutan = get_field('sambutan');
$sambutan_pertama = $sambutan['sambutan_pertama'];
$sambutan_kedua = $sambutan['sambutan_kedua'];
$sambutan_ketiga = $sambutan['sambutan_ketiga'];
?>

<div>
    <div class="flex gap-2 items-end p-4 rounded-xl border border-gray-300 mb-5">
        <img src="<?php echo $sambutan_pertama['photo']['url']; ?>" alt="<?php echo $sambutan_pertama['photo']['title']; ?>" class="w-32 h-auto object-cover shrink-0">
        <div>
            <h4 class="mb-0 text-2xl"><?php echo $sambutan_pertama['nama']; ?></h4>
            <p class="text-primary"><?php echo $sambutan_pertama['jabatan']; ?></p>
        </div>
    </div>
    <div>
        <?php echo $sambutan_pertama['kata_sambutan']; ?>
    </div>
</div>

<div>
    <div class="flex gap-2 items-end p-4 rounded-xl border border-gray-300 mb-5">
        <img src="<?php echo $sambutan_kedua['photo']['url']; ?>" alt="<?php echo $sambutan_kedua['photo']['title']; ?>" class="w-32 h-auto object-cover shrink-0">
        <div>
            <h4 class="mb-0 text-2xl"><?php echo $sambutan_kedua['nama']; ?></h4>
            <p class="text-primary"><?php echo $sambutan_kedua['jabatan']; ?></p>
        </div>
    </div>
    <div>
        <?php echo $sambutan_kedua['kata_sambutan']; ?>
    </div>
</div>

<div>
    <div class="flex gap-2 items-end p-4 rounded-xl border border-gray-300 mb-5">
        <img src="<?php echo $sambutan_ketiga['photo']['url']; ?>" alt="<?php echo $sambutan_ketiga['photo']['title']; ?>" class="w-32 h-auto object-cover shrink-0">
        <div>
            <h4 class="mb-0 text-2xl"><?php echo $sambutan_ketiga['nama']; ?></h4>
            <p class="text-primary"><?php echo $sambutan_ketiga['jabatan']; ?></p>
        </div>
    </div>
    <div>
        <?php echo $sambutan_ketiga['kata_sambutan']; ?>
    </div>
</div>