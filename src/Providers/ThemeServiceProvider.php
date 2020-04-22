<?php
 
namespace WasdazuTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
 
class ThemeServiceProvider extends TemplateServiceProvider
{
 
	/**
	 * Register the service provider.
	 */
	public function register()
	{
 
	}

	public function boot(Twig $twig, Dispatcher $eventDispatcher) 
	{
		$this->overrideTemplate("Ceres::Customer.Components.AdressSelect", "WasdazuTheme::content.AdressSelect");
	}
}