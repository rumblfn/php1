<?php

$text1 = 'очень интересно';

$menu = renderTemplate('menu');
$content = renderTemplate('content', 
    array('text1' => $text1)
);
echo renderTemplate('layout', 
    array('menu' => $menu, 'content' => $content)
);

function renderTemplate($page, $args = array())
{
    ob_start();
    include $page . '.php';
    return ob_get_clean();
}

