<?php
function getMenuBtn($target, $label, $icon = '') {
    $btnClass =
        'w-full h-12 rounded-full bg-brand-1 text-white flex items-center justify-center relative ml-auto border-2 border-solid border-brand-1 hover:bg-white hover:text-brand-1 transition font-bold px-4 cursor-pointer';
    $iconElement = empty($icon) ? '' : '<i class="mr-3 ' . $icon . '"></i>';

    if ($target == 'shutdown-btn' || $target == 'reboot-btn') {
        $iconElement = '<i class="mr-3 fa fa-power-off"></i>';
        return '
                <div class="' .
            $btnClass .
            '" id="' .
            $target .
            '">' .
            $iconElement .
            '<span data-i18n="' .
            $label .
            '">' .
            $label .
            '</span></div>
        ';
    }
    return '
                <a href="' .
        $target .
        '" class="' .
        $btnClass .
        '">' .
        $iconElement .
        '<span data-i18n="' .
        $label .
        '">' .
        $label .
        '</span></a>
            ';
}
?>
