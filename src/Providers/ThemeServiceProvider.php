<?php
 
namespace WasdazuTheme\Providers;
 
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;

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
		$this->overrideTemplate("Ceres::Customer.Components.AddressSelect.CreateUpdateAddress", "WasdazuTheme::content.CreateUpdateAddress");
		$this->overrideTemplate("Ceres::Customer.Components.SalutationSelect", "WasdazuTheme::content.SalutationSelect")
	}
}