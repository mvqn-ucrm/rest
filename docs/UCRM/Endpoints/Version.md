# Version
`GET /version`


## Basic Usage

**/version**
```php
<?php

use MVQN\REST\UCRM\Endpoints\Version;

// Collection returned, so simply grab the first object.
$version = Version::get()->first();

echo $version;
```
```json
{"version":"2.13.0-beta3"}
```
