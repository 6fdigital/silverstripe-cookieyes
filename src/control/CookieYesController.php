<?php
namespace _6fdigital\CookieYes\Control;
use SilverStripe\Dev\Debug;
use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\ORM\FieldType\DBField;



class CookieYesController extends Extension {

	/**
	 * Return the code given by CookieYes if the
	 * banner was activated via SiteConfig
	 *
	 * @return null|HTMLFragment
	 */
	public function CookieYes() {
		// get current SiteConfig
		$config = SiteConfig::current_site_config();

		// abort if cookie-banner wasn't actived via SiteConfig
		if (!$config->CookieYesActive) return null;

		// return script field contents
		return DBField::create_field("HTMLFragment", $config->CookieYesScript);
	}
}
