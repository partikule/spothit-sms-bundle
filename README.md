# SpothitSMSBundle

Integrates the [Spothit SMS API client](https://www.spot-hit.fr/documentation-api) with Symfony.

## Installation

The recommended way to install SpothitSMSBundle is through composer:

```bash
$ composer require partikule/spothit-sms-bundle
```

Then enable it in your kernel:

```php
<?php

public function registerBundles()
{
    $bundles = [
        //...
        new Spothit\Bundle\SMSBundle\SpothitSMSBundle(),
    ];
}
```

## Configuration

```yaml
spothit_sms:
    api_key: "****************"
```

## Usage

You can obtain Spothit SMS API client from Symfony container using:

```php
<?php

$container->get('spothit_sms.api.client');
```

