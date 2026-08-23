# Gnaww PHP SDK

Official PHP SDK for the Gnaww print intelligence API.

## Install

```bash
composer require jawwws/gnaww-sdk
```

## Quick start

```php
<?php

use Jawwws\Gnaww\GnawwClient;

$gnaww = new GnawwClient(
    getenv('GNAWW_API_KEY'),
    'https://api.gnaww.io',
    getenv('GNAWW_WORKSPACE_ID') ?: null,
);

$result = $gnaww->consume(
    '500 A5 double-sided flyers on 170gsm silk'
);
```

Gnaww may return clarification or review requirements when a print requirement is
incomplete. It does not guess unresolved physical attributes.

Capability matching does not by itself confirm price, live availability, producer
acceptance or an order.

Documentation: https://developer.gnaww.io

## Licence

MIT. See `LICENSE`.
