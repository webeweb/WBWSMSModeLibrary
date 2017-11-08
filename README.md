smsmode-library
=================

[![Build Status](https://travis-ci.org/webeweb/smsmode-library.svg?branch=master)](https://travis-ci.org/webeweb/smsmode-library) [![Coverage Status](https://coveralls.io/repos/github/webeweb/smsmode-library/badge.svg?branch=master)](https://coveralls.io/github/webeweb/smsmode-library?branch=master) [![Latest Stable Version](https://poser.pugx.org/webeweb/smsmode-library/v/stable)](https://packagist.org/packages/webeweb/smsmode-library) [![Latest Unstable Version](https://poser.pugx.org/webeweb/smsmode-library/v/unstable)](https://packagist.org/packages/webeweb/smsmode-library) [![License](https://poser.pugx.org/webeweb/smsmode-library/license)](https://packagist.org/packages/webeweb/smsmode-library) [![composer.lock](https://poser.pugx.org/webeweb/smsmode-library/composerlock)](https://packagist.org/packages/webeweb/smsmode-library) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/78a746c0-f837-4f8f-94c7-32c426d21f65/mini.png)](https://insight.sensiolabs.com/projects/78a746c0-f837-4f8f-94c7-32c426d21f65)

Integrate sMsmode API with your projects.

/!\ This package is currently in developpment /!\

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash

$ composer require webeweb/smsmode-library "~1.0@dev"

```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

---

## Usage

```php

	// Create the provider.
	$provider = new SMSModeProvider(new SMSModeAuthentication(), new SMSModeSendSMSRequest());

	// Initialize the authentication.
	$provider->getAuthentication()->setUsername("username");
	$provider->getAuthentication()->setPassword("password");

	// Initialize the request.
	$provider->getRequest()->addNumber("0612345678");
	$provider->getRequest()->setMessage("Hello world !");
	$provider->getRequest()->setSender("sender");
	$provider->getRequest()->setStop(SMSModeSendSMSRequest::STOP_ONLY);

	// Call API.
	$response = $provider->callAPI();

```

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash

$ mkdir smsmode-library
$ cd smsmode-library
$ git clone git@github.com:webeweb/smsmode-library.git .
$ composer install

```

Once all required libraries are installed then do:

```bash

$ vendor/bin/phpunit

```

---

## License

smsmode-library is released under the LGPL License. See the bundled [LICENSE](LICENSE)
file for details.

Please note that the sMsmode API is not free for use, see their
[product page](https://www.smsmode.com/tarifs-sms/) for details on pricing.