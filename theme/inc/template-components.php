<?php
// kumpulan kompnent agar konsisten

// section title

function hero_content($title, $description, $button = array('link' => '', 'button_text' => ''), $class = '')
{
    // Pastikan $button adalah array dan memiliki indeks yang dibutuhkan
    if (!is_array($button)) {
        $button = array('link' => '', 'button_text' => '');
    }

    // Pastikan button tidak tampil jika kosong
    $button_html = '';
    if (!empty($button['link']) && !empty($button['button_text'])) {
        $button_html = '<a href="' . esc_url($button['link']) . '" class="btn-secondary inline-block ">' . esc_html($button['button_text']) . '</a>';
    }

    return '
    <div class="' . esc_attr($class) . '">
        <h1 class="text-5xl font-bold mb-4">' . $title . '</h1>
        <div class="mb-4 text-xl">' . $description . '</div>
        ' . $button_html . '
    </div>';
}

function section_title($title,$subtitle,$class = null){
    return '
    <div class="flex flex-col '.$class.'">
        <h2 class="text-4xl font-bold mb-4">'.$title.'</h2>
        <p class="text-xl">'.$subtitle.'</p>
    </div>
    ';
}