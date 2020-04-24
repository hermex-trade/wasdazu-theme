<?php
 
namespace WasdazuTheme\Providers;
 
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;
use IO\Helper\ResourceContainer;

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
		// Override Templates
		$this->overrideTemplate("Ceres::Customer.Components.AddressSelect.CreateUpdateAddress", "WasdazuTheme::content.CreateUpdateAddress");
		$this->overrideTemplate("Ceres::Customer.Components.SalutationSelect", "WasdazuTheme::content.SalutationSelect");
		$this->overrideTemplate("Ceres::Customer.Components.AddressInputGroup.Locale.BillingAddressInputGroupDE", "WasdazuTheme::content.BillingAddressInputGroupDE");
	
		// Register own Vue Components
		$eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container)
        {
            $container->addScriptTemplate('WasdazuTheme::Components.Datepicker');
        }, 0);
	}
}