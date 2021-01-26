# SilverStripe CookieYes

An extension for SilverStripe 4+ which allows displaying a Cookie Consent Banner from [CookieYes](https://cookieyes.com)

## Requirements

SilverStripe >= 4

## Installation
```bash
$ composer require 6fdigital/silverstripe-cookieyes
```

Then run `dev/build`.

In your main `Page.ss` template add the `$CookieYes` variable between the `<head></head>` tags.

## Usage

After installation of the module, login to the cms and go to `Settings` > `CookieYes`. There you will find two fields:

|Name|Description|
|---|---|
|Active|Whether to show the banner on the website or not|
|Script|The installation code given by CookieYes|

Now you can save the settings and the consent banner will apppear on the pages of your websites.
