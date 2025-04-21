<?php
$penyetaraan_kandungan_unsur_kompetensi = get_field('penyetaraan_kandungan_unsur_kompetensi');
$penyetaraan_kandungan_unsur_kompetensi_group = get_field_object('penyetaraan_kandungan_unsur_kompetensi');

if ($penyetaraan_kandungan_unsur_kompetensi):
?>
    <div>
        <?php foreach ($penyetaraan_kandungan_unsur_kompetensi_group['sub_fields'] as $key => $field): ?>
            <div>
                <?php $name = $field['name']; // contoh: semester_1
                $label = $field['label'];
                $value = isset($penyetaraan_kandungan_unsur_kompetensi[$name]) ? $penyetaraan_kandungan_unsur_kompetensi[$name] : '';
                echo $value['text']; ?>
                <div class="grid grid-cols-1 lg:grid-cols-3">

                </div>
                <?php for ($i = 0; $i <= 3; $i++): ?>
                    <div>
                        <img src="<?php echo $value['item_' . $i]['image']; ?>" alt="">
                        <div>
                            <?php echo  $value['item_' . $i]['deskripsi']; ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endforeach ?>
    </div>
<?php endif; ?>