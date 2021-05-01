# FortressWire SDK for PHP

The FortressWire SDK for PHP makes it easy for developers to interact with FortressWre from their PHP code. You can get started by installing the SDK through Composer.

Getting Started
---------------

1. <b>Minimum requirements</b> - To run the SDK, your system will need to have at least PHP 7.3 with the cURL extension. 

2. <b>Install the SDK</b> - Using Composer is the recommended way to install the FortressWire SDK for PHP. The SDK is available via Packagist under the `fortresswire/fw-sdk-php` package. If Composer is installed globally on your system, you can run the following in the base directory of your project to add the SDK as a dependency:

```
composer require fortresswire/fw-sdk-php
```

Quick Examples
--------------

### Creating a Watchdog client

```php
require './vendor/autoload.php';

use FortressWire\Watchdog\WatchdogClient;

$client = new WatchdogClient([
  'version' => '1',
  'region' => 'af-south-1',
  'key' => $_ENV['WATCHDOG_KEY'],
]);
```

### Creating Watchdog events

```php
...

use FortressWire\Watchdog\WatchdogEvents;

$logger = new WatchdogEvents($client);

$logger->create('debug - low', 'Account registration failed.', [
  'first_name' => 'Donald',
  'last_name' => 'Pakkies'
]);

```

License
-------

The MIT License (MIT). Please see [License File](LICENSE) for more information.
