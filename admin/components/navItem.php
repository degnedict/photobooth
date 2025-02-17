<?php
function getNavItem($label, $hidden) {
    $className = "
            navItem relative
            w-full h-16 mt-1 px-3
            flex flex-col justify-center shrink-0
            rounded-l-2xl text-white
            hover:bg-content-1 hover:bg-opacity-10 hover:z-10 hover:text-brand-1
            [&.isActive]:bg-content-1 [&.isActive]:text-brand-1 [&.isActive]:font-bold 
        ";
    $href = 'href="#' . $label . '"';
    if ($hidden === 'hidden') {
        $className .= 'hidden';
        $href = '';
    }

    return '<li class="pb-4 -mt-4 relative">
                <a id="nav-' .
        $label .
        '" class="' .
        $className .
        '" ' .
        $href .
        '" onclick="toggleAdminNavi()">
                    <span class="corner w-4 h-4 bg-content-1 absolute -top-[16px] right-0 hidden">
                        <span class="flex w-4 h-4 rounded-br-full bg-brand-1"></span>
                    </span>
                    <span class="naviLabel" data-i18n="' .
        $label .
        '">' .
        $label .
        '</span>
                    <span class="corner w-4 h-4 bg-content-1 absolute -bottom-[16px] right-0 hidden">
                        <span class="flex w-4 h-4 rounded-tr-full bg-brand-1"></span>
                    </span>
                </a>
            </li>';
}
?>
