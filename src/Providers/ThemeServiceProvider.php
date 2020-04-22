<?php
 
namespace WasdazuTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
 
class ThemeServiceProvider extends ServiceProvider
{
 
	/**
	 * Register the service provider.
	 */
	public function register()
	{
 
	}

	public function boot(Twig $twig, Dispatcher $eventDispatcher) 
	{
		$this->overrideTemplate("Ceres::Customer.Components.AddressInputGroup.AdressInputGroup", "WasdazuTheme::content.AdressInputGroup.AdressInputGroup");
	}
}