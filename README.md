PHP Quick Start Sample for Digital Goods API Copyright (C) 2013 Google Inc.

digitalgoods-sample-php
=======================

Basic PHP implementation of the Google Wallet for Digital Goods API.

### Setup

To setup the sample, edit seller_info.php.

* Sign up for Google Wallet for digital goods. Then get your Seller Identifier and Seller Secret.
  [Sign up for Wallet for digital goods (sandbox)](https://sandbox.google.com/checkout/inapp/merchant/signup.html)
  [Sign up for Wallet for digital goods (production)](https://checkout.google.com/inapp/merchant/signup.html)
* Replace $issuerId and $secretKey in seller_info.php with your Seller Identifier and Seller Secret.

### Google appengine.

To run application on google appengine requires [Google App Engine SDK](https://developers.google.com/appengine/downloads#Google_App_Engine_SDK_for_PHP) and PHP5.4+

1. Create new application at your [appengine account](https://appengine.google.com).
2. You need to register your application to be whitelisted before uploading it on appengine. To register your PHP application visit [https://gaeforphp.appspot.com]( https://gaeforphp.appspot.com).
3. Change application name in app.yaml file.
4. Follow instruction to install google appengine sdk and to upload the application on [Google Appengine for PHP Docs](https://developers.google.com/appengine/docs/php/gettingstarted/introduction).

### Local dev.

To run application on local server requires [apache HTTP server](http://apache.org/) 2.0 or greater and PHP5+.

1. Make sure "allow_url_include" option is enabled in php.ini file.
2. Copy the files to default DocumentRoot of the server.
3. You can now visit http://localhost in your browser to see the application in action.
