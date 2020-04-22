<?php
 
namespace WasdazuTheme\Containers;

use Plenty\Plugin\Templates\Twig;
 
class WasdazuThemeCSSContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('WasdazuTheme::content.Theme');
    }
}