<?php
namespace _6fdigital\CookieYes\Extension;

use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;

class CookieYesSiteConfigExtension extends DataExtension {

	/**
	 * @var array
	 */
	private static $db = [
		"CookieYesActive" => "Boolean",
		"CookieYesScript" => "Text",
	];

	/**
	 * Update SiteConfig Fields
	 * @return FieldList
	 */
	public function updateCMSFields(FieldList $fields)
	{
		$fields->addFieldsToTab("Root.CookieYes", [
			CheckboxField::create("CookieYesActive", _t("SiteInfo.ACTIVE", "Active")),
			TextareaField::create("CookieYesScript", _t("SiteInfo.SCRIPT", "Script")),

		]);

		return $fields;
	}
}
