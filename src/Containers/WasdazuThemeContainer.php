<?php
 
namespace WasdazuTheme\Providers;

use Plenty\Plugin\Templates\Twig;
 
class WasdazuThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Theme::content.Theme');
    }
}